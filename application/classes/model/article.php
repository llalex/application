<?php
/**
 * 文章Model
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: article.php 71 2012-08-29 13:44:39Z liujie $
 */
class Model_Article extends ORM{

	const PUBLISH = 1;
	const UNPUBLISH = 0;

	static public $attr_name = array(
		1 => '原创',
		2 => '热点',
		3 => '组图',
		4 => '爆料',
		5 => '头条',
		6 => '幻灯',
		7 => '滚动',
		8 => '推荐',
	);

	/**
	 * 列表显示项
	 * @var array
	 */
	protected $_list_row = array( 'id', 'author', 'title', 'dateline', 'update', 'hits', 'publish');

	/**
	 * 搜索显示项
	 * @var array
	 */
	protected $_search_row = array('id' , 'author', 'title', 'category_id');
	
	protected $_created_column = array(
		'column' => 'dateline',
		'format' => TRUE,
	);
	
	protected $_updated_column = array(
		'column' => 'update',
		'format' => TRUE,
	);
	
	/**
	 * 关联文章内容
	 * @var array
	 */
	protected $_has_one = array(
		'content' => array(
			'model'=>'article_content',
		),
	);
	
	/**
	 * 关联评论和标签
	 */
	protected $_has_many = array(
	    'comments' => array(
	        'model'   => 'comment',
			'foreign_key' => 'targetid',
	    ),
		'tags' => array(
			'through' => 'articles_tags',
		),
	);
	
	/**
	 * 属于文章栏目
	 * @var array
	 */
	protected $_belongs_to = array(
		'category' => array(
			'model'=>'article_category',
		),
	);

	public function rules(){
		return array(
			'title' => array(
				array('not_empty'),
			),
		);
	}

	/**
	 * 数据过滤
	 * @return array
	 * @version $Id: article.php 71 2012-08-29 13:44:39Z liujie $
	 */
	public function filters(){
		return array(
			'authorid' => array(
				array('intval'),
			),
			'publish' => array(
				array('intval'),
			),
			'hits' => array(
				array('intval'),
			),
		);
	}
	
	/**
	 * 更新文章点击率
	 * @version 2011-11-16 上午11:03:08 Jie.Liu
	 */
	public function updateHits(){
		$this->hits++;
		$this->save();
	}

	/**
	 * 发布文章
	 */
	public function publish(){
		$this->publish = 1;
		$this->save();
	}

	/**
	 * 取消文章发布
	 */
	public function unpublish(){
		$this->publish = 0;
		$this->save();
	}

	/**
	 * 更新文章标签
	 * @param string $tags
	 */
	public function updateTags($tags){
		$newTags = explode(',', $tags);
		if ($this->loaded()){//如果文章存在
			//获取原有文章的tags
			$modelTags = $this->tags->find_all();
			$oldTags = array();
			foreach ($modelTags as $tag){
				$oldTags[] = $tag->name;
			}

			//删除不存在的tag
			$deleteTags = array_diff($oldTags, $newTags);
			$this->deleteTags($deleteTags);

			//增加新添加到tag
			$addTags = array_diff($newTags, $oldTags);
			$this->addTags($addTags);
		}else{
			return 'model_noexiets';
		}
	}

	/**
	 * 删除文章标签
	 * @param array $deleteTags
	 */
	public function deleteTags(array $deleteTags){
		if(!empty($deleteTags)){
			foreach ($deleteTags as $tag){
				$tag = trim($tag);
				$tagMod = new Model_Tag(array('name'=>$tag));
				$this->deleteTag($tagMod);
			}
		}
	}

	/**
	 * 删除文章标签，数据库操作
	 * @param Model_Tag $tag
	 */
	private function deleteTag(Model_Tag $tag){
		if ($tag->loaded()){ //如果标签存在
			$this->remove('tags', $tag);  //删除便签与文章的关联

			//标签的文章数减一
			$tag->articles--;
			if ($tag->articles == 0){
				$tag->delete();
			}else{
				$tag->save();
			}
		}
	}

	/**
	 * 添加文章标签
	 * @param array $addTags
	 */
	public function addTags(array $addTags){
		if(!empty($addTags)){
			foreach ($addTags as $tag){
				$tag = trim($tag);
				if($tag){
					$tagMod = new Model_Tag(array('name'=>$tag));
					//如果标签不存在则创建
					if(!$tagMod->loaded()){
						$tagMod->name = $tag;
						$tagMod->articles = 1;
						$tagMod->update = $_SERVER['REQUEST_TIME'];
					}else {
						$tagMod->articles++;
					}
					$tagMod->save();
					$this->add('tags', $tagMod);
				}
			}
		}
	}

	/**
	 * 删除文章的同时，删除文章的内容和评论
	 * @see Kohana_ORM::delete()
	 */
	public function delete(){
		//删除文章内容
		if ($this->content->loaded()){
			$this->content->delete();
		}
		//删除文章标签
		$tags = $this->tags->find_all();
		foreach ($tags as $tag){
			$this->deleteTag($tag);
		}
		//删除评论
		$comments = $this->comments->find_all();
		foreach ($comments as $comment){
			$comment->delete();
		}
		return parent::delete();
	}

	/**
	 * 生成自定义属性
     * // where (attribute & 8) = 8
	 * @param array $attrs
	 * @return int
	 */
	public function make_attr($attrs){
		$attrs = (array)$attrs;
		$attr = 0;
		for ($i = 0; $i < 8; $i++){
			if (!empty($attrs[$i+1])){
				$attr += pow(2, $i);
			}
		}
		return $attr;
	}

	/**
	 * 解析自定义属性
	 * @param int $attr
	 * @return array
	 */
	public function parse_attr($attr){
		$attr = intval($attr);
		$attrs = array();
		for($i=1; $i<=8; $i++) {
			$k = pow(2, $i-1);
			$attrs['attribute['.$i.']'] = ($attr & $k) ? 1 : 0;
		}
		return $attrs;
	}
	
	/**
	 * 获取文章摘要
	 * @version 2011-11-16 上午11:08:28 Jie.Liu
	 */
	public function getDescription(){
		return $this->description?$this->description:UTF8::substr($this->content->content, 0, 100);
	}
	
	/**
	 * 输出文章内容，考虑分页
	 * @version 2011-11-16 下午12:02:02 Jie.Liu
	 */
	public function printContent(){
		$content = explode('<!-- pagebreak -->', $this->content->content);
		$pagenum = count($content);
		
		$page = max((int)(Request::$current->param('page')), 1);
		
		if ($page > $pagenum){
			$page = $pagenum;
		}
		
		//只有第一页更新点击率
		if ($page == 1){
			$this->updateHits();	
		}
		
		echo $content[$page - 1];
		
		if ($pagenum > 1){
			echo Pagination::factory(array('total_items' => $pagenum, 'items_per_page' => 1));
		}
	}

	public function category_id_showselect(){
		$category_options = ORM::factory('article_category')->get_select_options();
		array_unshift($category_options, __('All'));
		return Form::select('category_id', $category_options, $this->category_id);
	}
}