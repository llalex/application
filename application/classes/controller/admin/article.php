<?php
/**
 * 文章后台管理控制器
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: article.php 72 2012-08-30 10:19:41Z Jie.Liu $
 */
class Controller_Admin_Article extends Controller_Admin_Crud {

	/*  隐藏文章栏目管理
	protected $top_actions = array(
		'menu' => array(
			'category' => array(
				'name' => 'Category',
				'icon' => 'icon-list-ul',
			),
		),
		'dropdown' => array(

		),
	);
	*/

	/**
	 * 文章栏目管理
	 */
	public function action_category(){
		$category = NULL;
		if(HTTP_Request::POST === $this->request->method()){
			foreach($this->request->post('name') as $key=>$value){
				$category = new Model_Article_Category($key);
				if($category->loaded()){
					$category->catname = $value;
					$category->save();
				}
			}

			$newname = $this->request->post('newname');
			if( is_array($newname) AND !empty($newname) ){
				foreach($this->request->post('newname') as $key => $val){
					if(is_array($val) AND !empty($val)){
						foreach($val as $value){
							$category = new Model_Article_Category();
							$category->upid = $key;
							$category->catname = $value;
							$category->save();
						}
					}
				}
			}

			$this->set_status('success');
		}
		if(!($category instanceof Model_Article_Category)){
			$category = new Model_Article_Category();
		}
		$categorystr = $category->getCategoryHtm();
		$this->main = View::factory('admin/article/category');
		$this->main->category = $categorystr;
	}

	/**
	 * 删除文章栏目
	 */
	public function action_delcategory(){
		$catid = intval($this->request->param('id'));
		if($catid){
			$category = new Model_Article_Category($catid);
			if($category->loaded()){
				$count = ORM::factory('article_category')->where('upid', '=', $category->id)->count_all();
				if($count > 0){ // 如果该分类下有子分类，则不能删除
					$this->set_status('error',  __("You cann't delete this recored, its child element is not empty"));
				} else {
					$category->delete();
				}

			} else {
				$this->set_status('error', __('Data not found'));
			}
		}

		$this->jump('/admin/article/category');
	}

	public function action_create(){
		parent::action_create();
		// 获取父级分类
		$this->main->parent_list = array_merge(array(''=>'--请选择--'), ORM::factory('coach_category')->get_parent_list()->as_array('label', 'name'));
	}

	public function action_edit(){
		if($model = parent::action_edit()){
			$parent_list = $child_list = $item_list = array(''=>'--请选择--');
			// 获取父级分类列表
			$this->main->parent_list = array_merge($parent_list, ORM::factory('coach_category')->get_parent_list()->as_array('label', 'name'));

			// 获取子分类列表
			if($parent_label = $model->parent){
				$child_list = array_merge($child_list, ORM::factory('coach_category')->get_child_list($parent_label)->as_array('label', 'name'));
			}
			$this->main->child_list = $child_list;

			// 获取节点列表
			if($child_label = $model->child){
				$item_list = array_merge($item_list, ORM::factory('coach_category')->get_item_list($child_label)->as_array('label', 'name'));
			}

			$this->main->item_list = $item_list;
		}
	}

	public function action_update(){
		$id = intval($this->request->param('id'));
		$model = ORM::factory($this->_model, $id);

		if (HTTP_Request::POST == $this->request->method()){

			try {
				$model->values($this->request->post());
				//自定义属性
				$model->attribute = $model->make_attr($this->request->post('attribute'));
				$model->save();
				//添加文章内容
				$content = $this->request->post('content');
				if (!empty($content)){
					$model = new Model_Article($model->id);
					$model->content->article_id = $model->id;
					$model->content->values($this->request->post())->save();
					$tags = explode(',', $this->request->post('tags'));
					$model->addTags($tags);
				}

				$this->set_status('success');
				$this->action_list();

			} catch (ORM_Validation_Exception $e){

				$this->set_status('error', $e->errors('validation'));
			}

		}
	}
}
