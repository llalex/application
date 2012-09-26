<?php
/**
 * 教练信息控制器
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: district.php 37 2012-07-06 08:23:16Z Jie.Liu $
 */
class Controller_Admin_Coach extends Controller_Admin_Crud {

	public function action_create(){
		parent::action_create();
        $province_list = $city_list = $county_list = $towns_list = $parent_list = $child_list = $item_list = array(''=>'--请选择--');// 获取省列表
        $this->main->province_list = array_merge($province_list, ORM::factory('district')->get_province_list()->as_array('label', 'name'));
		$this->main->parent_list = array_merge($parent_list, ORM::factory('coach_category')->get_parent_list()->as_array('label', 'name'));
        $this->main->set(array(
            'city_list' => $city_list,
            'county_list' => $county_list,
            'towns_list' => $towns_list,
            'child_list' => $child_list,
            'item_list' => $item_list,
        ));
	}

	public function action_edit(){
		if($model = parent::action_edit()){
			$province_list = $city_list = $county_list = $towns_list = array(''=>'--请选择--');
			// 获取省列表
			$this->main->province_list = array_merge($province_list, ORM::factory('district')->get_province_list()->as_array('label', 'name'));

			// 获取城市列表
			if($province_label = $model->province){
				$city_list = array_merge($city_list, ORM::factory('district')->get_city_list($province_label)->as_array('label', 'name'));
			}

			$this->main->city_list = $city_list;

			// 获取县列表
			if($city_label = $model->city){
				$county_list = array_merge($county_list, ORM::factory('district')->get_county_list($city_label)->as_array('label', 'name'));
			}
			$this->main->county_list = $county_list;

			// 获取乡镇列表
			if($county_label = $model->county){
				$towns_list = array_merge($towns_list, ORM::factory('district')->get_towns_list($county_label)->as_array('label', 'name'));
			}
			$this->main->towns_list = $towns_list;

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

}
