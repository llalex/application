<?php
/**
 * 地区信息Model
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: district.php 68 2012-08-28 10:16:13Z Jie.Liu $
 */
class Model_District extends ORM {

	const LEVEL_PROVINCE = 1; // 省级
	const LEVEL_CITY = 2; // 市级
	const LEVEL_COUNTY = 3; // 县级
	const LEVEL_TOWNS = 4; // 乡镇

	public function filters(){
		return array(
			'label' => array(
				array(array($this, 'filter_label')),
			),
		);
	}

	/**
	 * 过滤label属性，如果label不存在，则获取名称的拼音作为值
	 * @param $label
	 * @return string
	 */
	public function filter_label($label){
		if( ! $label ){
			$label = Pinyin::instance()->str2pinyin($this->name);
		}

		return $label;
	}

	/**
	 * 返回省级地区列表
	 * @return Database_Result
	 */
	public function get_province_list(){
		return $this->where('level', '=', self::LEVEL_PROVINCE)->where('upid', '=', 0)->find_all();
	}

	/**
	 * 获取某个省级的所有城市
	 * @param string $label
	 * @return Database_Result
	 */
	public function get_city_list($label){
		$province = ORM::factory('district', array('label'=>$label, 'level'=>Model_District::LEVEL_PROVINCE));
		return $this->where('level', '=', self::LEVEL_CITY)->where('upid', '=', $province->pk())->find_all();
	}

	/**
	 * 获取某个城市下的所有县
	 * @param string $province
	 * @return Database_Result
	 */
	public function get_county_list($label){
		$city = ORM::factory('district', array('label'=>$label, 'level'=>Model_District::LEVEL_CITY));
		return $this->where('level', '=', self::LEVEL_COUNTY)->where('upid', '=', $city->pk())->find_all();
	}

	/**
	 * 获取某个县下的所有乡镇
	 * @param string $province
	 * @return Database_Result
	 */
	public function get_towns_list($label){
		$county = ORM::factory('district', array('label'=>$label, 'level'=>Model_District::LEVEL_COUNTY));
		return $this->where('level', '=', self::LEVEL_TOWNS)->where('upid', '=', $county->pk())->find_all();
	}

	/**
	 * 根据标识获取对象
	 * @param  [string] $label [标识]
	 * @param  [int] $level [等级]
	 * @param  [int] $upid  [上级ID]
	 * @return [Model_District]        [地区对象]
	 */
	public function get_by_label($label, $level, $upid){
		return new self(array(
			'label' => $label,
			'level' => $level,
			'upid'	=> $upid,
		));
	}

	/**
	 * 获取子分类地区
	 * @param Model_District $district
	 */
	public function get_child(Model_District $district){
		return ORM::factory('district')->where('upid', '=', $district->pk())
									   ->where('level', '=', $district->level+1)
									   ->find_all();
	}

}