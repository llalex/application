<?php
/**
 * 文章栏目Model
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: category.php 71 2012-08-29 13:44:39Z liujie $
 */
class Model_Article_Category extends ORM{
	/**
	 * 一个栏目对应多个文章
	 * @var array
	 */
	protected $_has_many = array(
		'articles' => array(
			'model' => 'article',
			'foreign_key' => 'category_id',
		)
	);

	/**
	 * 获取下拉列表菜单
	 */
	public function get_select_options(){
		$options = array();
		$category = $this->makeCategory(FALSE);
		foreach($category as $key => $value){
			if(!isset($value['level'])){
				$options[$key] = $value['catname'];
				if(!empty($value['child'])){
					foreach($value['child'] as $catid){
						$cat_value = $category[$catid];
						$options[$catid] = str_repeat(' — ',$cat_value['level']).$cat_value['catname'];
						if(!empty($cat_value['child'])){
							foreach($cat_value['child'] as $catid2){
								$cat_value2 = $category[$catid2];
								$options[$catid2] = str_repeat(' — ',$cat_value2['level']).$cat_value2['catname'];
							}
						}
					}
				}
			}
		}
		return $options;
	}

	/**
	 * 生成结构化栏目
	 * @version 2011-8-17 下午04:26:14 Jie.Liu
	 */
	public function makeCategory($get_articles = FALSE){

		$category = array();
		$list = ORM::factory('article_category')->find_all();
		if ($list){
			foreach ($list as $value){
				$category[$value->id] = $value->object();
				if($get_articles){
					$category[$value->id]['articles'] = $value->articles->count_all();
				}
			}
			$catlist = $category;
			//设置每一个栏目等级,其中$key为该栏目的ID
			foreach ($catlist as $key=>$value) {
				if ($upid = $value['upid']){
					$category[$key]['level'] = 0;
					$category[$upid]['child'][] = $key;
					while (isset($category[$upid]['upid'])){
						//如果上级栏目不是顶级
						$category[$key]['level']++;
						$upid = $category[$upid]['upid'];
					}
				}//endif
			}//endforeach

		} //endif

		return $category;
	}

	/**
	 * 输出结构化栏目
	 * @version 2011-8-17 下午05:31:03 Jie.Liu
	 */
	public function getCategoryHtm(){

		if (empty($htmlStr)){

			$category = $this->makeCategory(TRUE);

			$htmlStr = '';
			foreach ($category as $key=>$value){

				if (!isset($value['level'])){
					//顶级栏目
					$htmlStr .= <<<HTML
	<tr>
		<td>{$key}</td>
		<td>
			<input type="text" name="name[{$key}]" value="{$value['catname']}"/>
			<a class="addtr" level="0" catid="{$key}" href="javascript:void(0);"><i class="icon-plus-sign"></i>添加子栏目</a>
		</td>
		<td>{$value['articles']}</td>
		<td>
			<a href="" class="btn btn-mini btn-danger ajax" title="删除栏目 {$value['catname']}"><i class="icon-remove"></i>删除</a>
		</td>
	</tr>
HTML;
					// 如果该分类下有子栏目，则显示子栏目
					if (isset($value['child'])){
						$this->getCategoryItem($category, $value['child'], $htmlStr);
					}

					$htmlStr .= <<<HTML
	<tr>
		<td>&nbsp;</td>
		<td>
			<div><a href="javascript:void(0);" class="addtr" level="-1" catid="0">添加顶级栏目</a></div>
		</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
HTML;
				}
			}
		}

		return $htmlStr;
	}

	/**
	 * 输出某一个单项栏目的html
	 * @version 2011-8-17 下午05:41:55 Jie.Liu
	 */
	private function getCategoryItem($category, $itemlist, &$htmlStr){
		if (is_array($itemlist)){
			foreach ($itemlist as $key){
				$level = $category[$key]['level'];

				$add = '';
				if($level < 2){ // 只有一、二级目录有添加子栏目的功能
					$add = '<a class="addtr" id="addchildboard" level="'.$level.'" catid="'.$key.'" href="javascript:void(0);"><i class="icon-plus-sign"></i>添加子栏目</a>';
				}

				$htmlStr .= <<<HTML
    <tr>
    	<td>{$key}</td>
    	<td class="level{$level}">
    		<input type="text" name="name[{$key}]" value="{$category[$key]['catname']}"/>
			{$add}
    	</td>
    	<td>{$category[$key]['articles']}</td>
    	<td>
    		<a href="/admin/article/delcategory/{$key}" class="btn btn-mini btn-danger ajax" title="删除栏目 {$category[$key]['catname']}"><i class="icon-remove"></i>删除</a>
    	</td>
    </tr>
HTML;

				if (isset($category[$key]['child'])){
					$this->getCategoryItem($category, $category[$key]['child'], $htmlStr);
				} // endif

			} // foreach
		}
	}
	
}