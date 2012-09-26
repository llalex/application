<?php
/**
 * 教练分类控制器
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: category.php 37 2012-07-06 08:23:16Z Jie.Liu $
 */
class Controller_Admin_Category extends Controller_Admin_Crud {

	protected $_model = 'coach_category';

	/**
	 * 重载list方法，默认显示最上一级的教练分类
	 */
	public function action_list(){
		$pid = intval($this->request->query('pid')); //父级栏目
		$cid = intval($this->request->query('cid')); //子栏目

		$this->main = View::factory('admin/category/list')->set(array('pid'=>$pid, 'cid' => $cid));

		// 显示所有的父级栏目
		$this->main->parent_list = $this->get_category_list(0, Model_Coach_Category::LEVEL_PARENT);

		if($pid > 0){ //如果选择了父级栏目则显示该父级栏目下的所有子栏目
			$this->main->child_list  = $this->get_category_list($pid, Model_Coach_Category::LEVEL_CHILD);
		}

		if($cid > 0){ // 如果选择了子级栏目，则显示该子级栏目下的所有节点
			$this->main->item_list =  $this->get_category_list($cid, Model_Coach_Category::LEVEL_ITEM);
		}
	}

	private function get_category_list($upid, $level){
		$this->main->upid = $upid;
		$this->main->level = $level;
		$model_list = ORM::factory($this->_model)->where('upid', '=', $upid)->where('level', '=', $level)->find_all();
		$this->main->model_list = $model_list;
		return $model_list;
	}

	/**
	 * 重载删除方法，如果该分类下还有子分类则提示无法删除
	 */
	public function action_delete(){
		$id = intval($this->request->param('id'));
		$district = ORM::factory('district', $id);
		if($district->loaded()){
			$upid = $district->upid;
			$count = ORM::factory('district')->where('upid', '=', $district->pk())->count_all();
			if($count > 0){
				$this->set_status('error', __("You cann't delete this recored, its child element is not empty"));
			} else {
				$district->delete();
				$this->set_status('success');
			}
		}else{
			$this->set_status('error', __('Data not found'));
		}


		$this->jump($this->get_list_url());
	}

	/**
	 * 更新数据
	 */
	public function action_update(){
		// 如果有提交的数据，则保存
		if(Request::POST === $this->request->method()){
			// 原有数据更新
			$model_list = $this->request->post('model');

			if(!empty($model_list)){
				foreach($model_list as $key => $model){
					$category = ORM::factory($this->_model, $key);
					$category->values($model)->save();
				}
			}


			// 如果有新数据
			$upid = intval($this->request->post('upid'));
			$level = intval($this->request->post('level'));
			$new_model_list = $this->request->post('newmodel');

			if(!empty($new_model_list)){
				// 新建的数据，设置默认的level和upid
				$values = array('level' => $level, 'upid' => $upid);
				foreach($new_model_list as $value){
					if( ! empty($value) ){
						$value += $values;
						ORM::factory($this->_model)->values($value)->save();
					}
				}

			}

			$this->set_status('success');
		}

		$this->jump($this->get_list_url());
	}

	/**
	 * 获取访问列表的地址，带筛选条件
	 * @return string
	 */
	private function get_list_url(){
		$param = array();

		$param['pid'] = intval($this->request->query('pid'));
		$param['cid'] = intval($this->request->query('cid'));

		$redirect_url = 'admin/category/list?'.http_build_query($param);
		return URL::site($redirect_url);
	}

	/**
	 * 获取子分类
	 */
	public function action_child(){
		if($this->request->is_ajax()){
			$label = $this->request->query('label');
			$list = ORM::factory('coach_category')->get_child_list($label)->as_array('label', 'name');
			$this->send_json(array('list' => $list));
		}
	}

	/**
	 * 获取节点分类
	 */
	public function action_item(){
		if($this->request->is_ajax()){
			$label = $this->request->query('label');
			$list = ORM::factory('coach_category')->get_item_list($label)->as_array('label', 'name');
			$this->send_json(array('list' => $list));
		}
	}

}