<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 教练信息控制器
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: account.php 48 2012-07-16 06:53:18Z Jie.Liu $
 */
class Controller_Coach extends Controller_Frame {

	public function before(){
		parent::before();
        // 判断用户是否登录
        if( ! $this->user AND in_array($this->request->action(), array('publish', 'edit', 'upload', 'manage'))){
            $this->request->redirect(URL::site('/account/login'));
        }
	}

	/**
	 * 教练信息详情
	 */
	public function action_detail(){
		$coach_id = intval($this->request->param('id'));
		if($coach_id > 0){
			$model = ORM::factory('coach', $coach_id);
			if($model->loaded()){
				$this->breadcrumb->append('coach/detail/'.$model->pk(), '教练详情');
				$this->appendTitle($model->title);
				$model->view_num = DB::expr('view_num+1');
				$model->save();
				$this->content = View::factory('coach/detail')->set('model', $model);
			}else {
				$this->showmessage('教练信息不存在', 'error');
			}
		} else {
			$this->showmessage('参数错误', 'error');
		}
	}

    /**
     * 教练信息发布
     */
    public function action_publish(){
        $this->breadcrumb->append('/coach/publish', '教练信息发布');
        $this->appendTitle('教练信息发布');
        $this->load_kindeditor_js();
        $this->load_validate_js();
        $this->content = View::factory('coach/publish')->set($this->get_select_list());
    }

	public function action_edit(){
		$coach_id = intval($this->request->param('id'));
		if($coach_id > 0) {
			$model = ORM::factory('coach', $coach_id);
			if($model->loaded()){
				if($model->user_id == $this->user->pk()){
					$this->breadcrumb->append('/coach/edit', '教练信息编辑');
					$this->appendTitle('教练信息编辑');
					$this->load_kindeditor_js();
					$this->load_validate_js();
					$this->content = View::factory('coach/edit')->set($this->get_select_list($model));
				} else {
					$this->showmessage('您没有编辑该信息的权限', 'warning', '/coach/detail/'.$model->pk());
				}

			} else {
				$this->showmessage('教练信息不存在', 'error', '/coach/manage');
			}
		} else {
			$this->showmessage('参数错误', 'error', '/coach/manage');
		}

	}

    /**
     * 教学文章更新
     */
    public function action_update(){
        if(HTTP_Request::POST === $this->request->method()){
            $model = ORM::factory('coach', $this->request->post('coach_id'))->values($this->request->post());
            if($this->request->post('content')){ // 详细信息不能为空
                $model->train_time = $model->make_bin_value((array)$model->train_time);
                $model->train_place = $model->make_bin_value((array)$model->train_place);
                try{
                    $model->values(array(
                        'user_id' => $this->user->pk(),
                        'realname' => $this->user->realname,
                    ))->save();
                    $this->showmessage('操作成功', 'success', '/coach/detail/'.$model->pk());
                }catch (ORM_Validation_Exception $e){
                    $message = $e->errors('validation');
                }
            } else {
                $message['content'] = '详细信息不能为空';
            }

            $this->load_kindeditor_js();
            $this->load_validate_js();
            $this->content = View::factory('coach/edit')->set(array(
                'model' => $model,
                'message' => $message,
            ))->set($this->get_select_list());
        }
    }

    /**
     * 教练信息管理
     */
    public function action_manage(){
        $this->breadcrumb->append('/coach/manage', '教练信息管理');
        $this->appendTitle('教练信息管理');
        $coach_list = ORM::factory('coach')->where('user_id', '=', $this->user->pk())->find_all();
        $view = View::factory('coach/manage')->bind('coach_list', $coach_list);
        $this->content = View::factory('user/user')->set('content', $view);
    }

	/**
	 *教练信息列表
	 */
	public function action_list(){
		$coach_model = ORM::factory('coach');

		$breadcrumb_uri = '/coach/list/'; // 面包屑地址
		$breadcrumb_name = ''; // 面包屑名称
		$type_name = ''; // 教练信息筛选条件名称

		// 处理类型信息
		$type = $this->request->param('type');
		if ($type) {
			$type_arr = explode('/', $type);
			$parent = $type_arr[0];
			$item = Arr::get($type_arr, 1);
			$parent = ORM::factory('coach_category', array(
				'label' => $parent,
				'level' => Model_Coach_Category::LEVEL_PARENT,
			));
			if ($parent->loaded()) {
				$breadcrumb_uri .= $parent->label.'/'; //面包屑地址
				$type_name = $parent->name.$parent->suffix;
				$this->breadcrumb->append($breadcrumb_uri.'in/', $type_name);
				$this->appendTitle($type_name);
				$coach_model->where('parent', '=', $parent->label);
				if ($item) {
					$item = ORM::factory('coach_category', array(
						'label' => $item,
						'level' => Model_Coach_Category::LEVEL_ITEM,
					));
					if ($item->loaded()) {
						$breadcrumb_uri .= $item->label.'/'; //面包屑地址
						$breadcrumb_name = $item->name.$item->suffix.$breadcrumb_name; //面包屑名称
						$type_name = $breadcrumb_name;
						$this->breadcrumb->append($breadcrumb_uri.'in/', $breadcrumb_name);
						$this->appendTitle($breadcrumb_name);
						$coach_model->where('item', '=', $item->label);
					}
				}
			}
		}

		// 处理地区信息
		$location = $this->request->param('location');
		if ($location) {
			$district = new Model_District();
			$location_arr = explode('/', $location);
			$province = $location_arr[0];
			$city = Arr::get($location_arr, 1);
			$county = Arr::get($location_arr, 2);
			$towns = Arr::get($location_arr, 3);
			$province = $district->get_by_label($province, Model_District::LEVEL_PROVINCE, 0);
			if($province->loaded()){
				$breadcrumb_uri .= 'in/'.$province->label.'/'; //面包屑地址
				$location_name = $province->name; //地区名称
				$type_name = $location_name.$breadcrumb_name;
				$this->breadcrumb->append($breadcrumb_uri, $type_name);
				$this->appendTitle($type_name);
				$coach_model->where('province', '=', $province->label);
				if($city){
					$city = $district->get_by_label($city, Model_District::LEVEL_CITY, $province->pk());
					if($city->loaded()){
						$breadcrumb_uri .= $city->label.'/';
						$location_name .= $city->name;
						$type_name = $location_name.$breadcrumb_name;
						$this->breadcrumb->append($breadcrumb_uri, $type_name);
						$this->appendTitle($type_name);
						$coach_model->where('city', '=', $city->label);
						if($county){
							$county = $district->get_by_label($county, Model_District::LEVEL_COUNTY, $city->pk());
							if($county->loaded()){
								$breadcrumb_uri .= $county->label.'/';
								$location_name .= $county->name;
								$$type_name = $location_name.$breadcrumb_name;
								$this->breadcrumb->append($breadcrumb_uri, $type_name);
								$this->appendTitle($type_name);
								$coach_model->where('county', '=', $county->label);
								if($towns){
									$towns = $district->get_by_label($towns, Model_District::LEVEL_TOWNS, $county->pk());
									if($towns->loaded()){
										$breadcrumb_uri .= $towns->label.'/';
										$location_name .= $towns->name;
										$type_name = $location_name.$breadcrumb_name;
										$this->breadcrumb->append($breadcrumb_uri, $type_name);
										$this->appendTitle($type_name);
										$coach_model->where('towns', '=', $towns->label);
									}
								}
							}
						}
					}
				}
			}
		}

		$pagination = new Pagination(array(
            'total_items' => $coach_model->reset(FALSE)->count_all(),
        ));
		$this->content =View::factory('coach/list')->set(array(
			'type_name' => $type_name,
			'pagination' => $pagination,
			'recommend' => $coach_model->reset(FALSE)->order_by('view_num', 'DESC')->limit(12)->find_all(),
			'new_coaches' => $coach_model->reset(FALSE)->order_by('dateline', 'DESC')->limit(6)->find_all(),
			'coach_list' => $coach_model->limit($pagination->items_per_page)->offset($pagination->offset)->find_all(),
		));
	}

    private function get_select_list($model = NULL){
        $province_list = $city_list = $county_list = $towns_list = $parent_list = $child_list = $item_list = array(''=>'--请选择--');
        // 获取省列表
        $province_list = array_merge($province_list, ORM::factory('district')->get_province_list()->as_array('label', 'name'));
        $parent_list = array_merge($parent_list, ORM::factory('coach_category')->get_parent_list()->as_array('label', 'name'));

		if($model !== NULL){
			// 获取城市列表
			if($province_label = $model->province){
				$city_list = array_merge($city_list, ORM::factory('district')->get_city_list($province_label)->as_array('label', 'name'));
			}

			// 获取县列表
			if($city_label = $model->city){
				$county_list = array_merge($county_list, ORM::factory('district')->get_county_list($city_label)->as_array('label', 'name'));
			}

			// 获取乡镇列表
			if($county_label = $model->county){
				$towns_list = array_merge($towns_list, ORM::factory('district')->get_towns_list($county_label)->as_array('label', 'name'));
			}

			// 获取子分类列表
			if($parent_label = $model->parent){
				$child_list = array_merge($child_list, ORM::factory('coach_category')->get_child_list($parent_label)->as_array('label', 'name'));
			}

			// 获取节点列表
			if($child_label = $model->child){
				$item_list = array_merge($item_list, ORM::factory('coach_category')->get_item_list($child_label)->as_array('label', 'name'));
			}
		}

        return array(
			'model' => $model,
            'province_list' => $province_list,
            'city_list' => $city_list,
            'county_list' => $county_list,
            'towns_list' => $towns_list,
            'parent_list' => $parent_list,
            'child_list' => $child_list,
            'item_list' => $item_list,
        );
    }

} // End Coach