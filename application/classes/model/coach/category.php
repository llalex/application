<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * 评论Model
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: category.php 45 2012-07-13 10:20:20Z Jie.Liu $
 */
class Model_Coach_Category extends ORM{

	const LEVEL_PARENT = 1; // 父级栏目
	const LEVEL_CHILD = 2; // 子级栏目
	const LEVEL_ITEM = 3;	// 节点

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
	 * 获取所有的父级栏目
	 * @return Database_Result
	 */
	public function get_parent_list(){
		return $this->where('level', '=', self::LEVEL_PARENT)->where('upid', '=', 0)->find_all();
	}

	/**
	 * 获取所有的某个父栏目下的所有子栏目
	 * @param string $label
	 * @return Database_Result
	 */
	public function get_child_list($label){
		$parent = ORM::factory('coach_category', array('label'=>$label, 'level'=>Model_Coach_Category::LEVEL_PARENT));
		return $this->where('level', '=', self::LEVEL_CHILD)->where('upid', '=', $parent->pk())->find_all();
	}

	/**
	 * 获取某个子栏目下的所有节点
	 * @param string $label
	 * @return Database_Result
	 */
	public function get_item_list($label){
		$child = ORM::factory('coach_category', array('label'=>$label, 'level'=>Model_Coach_Category::LEVEL_CHILD));
		return $this->where('level', '=', self::LEVEL_ITEM)->where('upid', '=', $child->pk())->find_all();
	}

	/**
	 * 根据父类获取所有的节点
	 * @param $label
	 * @return Database_Result|null
	 */
	public function get_item_byparent($label){
		$child_ids = $this->get_child_list($label)->as_array(NULL, 'id');
		if(count($child_ids) > 0 ){
			return $this->where('level', '=', self::LEVEL_ITEM)->where('upid', 'in', $child_ids)->find_all();
		}

		return NULL;
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
}