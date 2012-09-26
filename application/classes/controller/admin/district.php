<?php
/**
 * 地区设置控制器
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: district.php 37 2012-07-06 08:23:16Z Jie.Liu $
 */
class Controller_Admin_District extends Controller_Admin_Crud {

	/**
	 * 重载list方法，默认显示省份信息
	 */
	public function action_list(){
		$pid = intval($this->request->query('pid')); //省级城市ID
		$cid = intval($this->request->query('cid')); //城市ID
		$tid = intval($this->request->query('tid')); //州县ID

		$this->main = View::factory('admin/district/list')->set(array('pid'=>$pid, 'cid' => $cid, 'tid' => $tid));

		// 显示所有的省级地区
		$this->main->province_list = $this->get_district_list(0, Model_District::LEVEL_PROVINCE);

		if($pid > 0){ //如果选择了省级则显示该省下面的所有市级地区
			$this->main->city_list  = $this->get_district_list($pid, Model_District::LEVEL_CITY);
		}

		if($cid > 0){ // 如果选择了城市ID，则显示该城市下的所有州县地区
			$this->main->county_list =  $this->get_district_list($cid, Model_District::LEVEL_COUNTY);
		}

		if($tid > 0){ // 如果选择了城市ID，则显示该城市下的所有州县地区
			$this->get_district_list($tid, Model_District::LEVEL_TOWNS);
		}
	}

	private function get_district_list($upid, $level){
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
		$district = ORM::factory($this->_model, $id);
		if($district->loaded()){
			$upid = $district->upid;
			$count = ORM::factory($this->_model)->where('upid', '=', $district->pk())->count_all();
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
			$model_list = $this->request->post('model');

			// 更新原有数据
			if(!empty($model_list)){
				foreach($model_list as $key => $model){
					$district = ORM::factory($this->_model, $key);
					$district->values($model)->save();
				}
			}

			// 插入新加入的数据
			$new_model_list = $this->request->post('newmodel');
			if ( ! empty($new_model_list)) {
				$level = $this->request->post('level');
				$upid = $this->request->post('upid');
				$values = array('level' => $level, 'upid' => $upid);
				foreach ($new_model_list as $value) {
					$values += $value;
					ORM::factory($this->_model)->values($values)->save();
				}
			}

			$this->set_status('success');
		}

		$this->jump($this->get_list_url());
	}

	private function get_list_url(){
		$param = array();

		$param['pid'] = intval($this->request->query('pid'));
		$param['cid'] = intval($this->request->query('cid'));
		$param['tid'] = intval($this->request->query('tid'));
		$redirect_url = 'admin/district/list?'.http_build_query($param);
		return URL::site($redirect_url);
	}

	/**
	 * 获取某个省级下的所有城市
	 */
	public function action_city(){
		if($this->request->is_ajax()){
			$label = $this->request->query('label');
			$list = ORM::factory('district')->get_city_list($label)->as_array('label', 'name');
			$this->send_json(array('list' => $list));
		}
	}

	/**
	 * 获取某个城市下的所有县
	 */
	public function action_county(){
		if($this->request->is_ajax()){
			$label = $this->request->query('label');
			$list = ORM::factory('district')->get_county_list($label)->as_array('label', 'name');
			$this->send_json(array('list' => $list));
		}
	}

	/**
	 * 获取某个县下的所有乡镇
	 */
	public function action_towns(){
		if($this->request->is_ajax()){
			$label = $this->request->query('label');
			$list = ORM::factory('district')->get_towns_list($label)->as_array('label', 'name');
			$this->send_json(array('list' => $list));
		}
	}
}
