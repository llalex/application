<?php
/**
 * 教练信息Model
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: coach.php 71 2012-08-29 13:44:39Z liujie $
 */
class Model_Coach extends ORM{

	protected $_belongs_to = array(
		'user' => array(), // 一个教练信息属于一个用户
	);

	protected $_created_column = array(
		'column' => 'dateline',
		'format' => TRUE,
	);

	protected $_updated_column = array(
		'column' => 'update',
		'format' => TRUE,
	);

	protected $_list_row = array('id', 'user_id', 'realname', 'title', 'meta_title', 'province', 'city', 'county', 'towns', 'parent', 'child', 'item');

    /**
     * 培训时间
     * @var array
     */
    public static $train_time = array(
        1 => '不限',
        2 => '上午',
        3 => '下午',
    );

    /**
     * 培训时间
     * @var array
     */
    public static $train_place = array(
        1 => '学员指定地点',
        2 => '老师指定地点',
        3 => '另行商议场所',
    );

    /**
     * 培训时间
     * @var array
     */
    public static $class_num = array(
        1 => '一对一',
        2 => '6人内班',
        3 => '6至20人班',
    );

    public function filters(){
        return array(
            'train_price' => array(
                array('intval'),
            ),
            'teach_year' => array(
                array('intval'),
            ),
        );
    }

    /**
     * 重载保存方法，在保存数据的同时需要先处理好loaction和type_name字段
     * @param  [type] $validation [description]
     * @return [type]             [description]
     */
    public function save(Validation $validation = NULL)
    {
        $this->location = $this->init_location(new Model_District());
        $this->type_name = $this->init_type_name(new Model_Coach_Category());
        
        return parent::save($validation);
    }

    private function init_type_name(Model_Coach_Category $category){
        $type_name = '';
        if ($this->parent) {
            $parent = $category->get_by_label($this->parent, Model_Coach_Category::LEVEL_PARENT, 0);
            if ($parent->loaded()) {
                $type_name = $parent->name;
                if ($this->child) {
                    $child = $category->get_by_label($this->child, Model_Coach_Category::LEVEL_CHILD, $parent->pk());
                    if ($child->loaded()) {
                        $type_name = $child->name;
                        if ($this->item) {
                            $item = $category->get_by_label($this->item, Model_Coach_Category::LEVEL_ITEM, $child->pk());
                            if ($item->loaded()) {
                                $type_name = $item->name;
                            }
                        }
                    }
                }
            }
        }

        return $type_name;    
    }

    /**
     * 根据对象的地区数据生成地区名称
     * @param  Model_District $district [description]
     * @return [type]                   [description]
     */
    private function init_location(Model_District $district){
        $location = '';
        if ($this->province) {
            $province = $district->get_by_label($this->province, Model_District::LEVEL_PROVINCE, 0);
            if ($province->loaded()) {
                $location .= $province->name;
                if ($this->city) {
                    $city = $district->get_by_label($this->city, Model_District::LEVEL_CITY, $province->pk());
                    if ($city->loaded()) {
                        $location .= $city->name;
                        if ($this->county) {
                            $county = $district->get_by_label($this->county, Model_District::LEVEL_COUNTY, $city->pk());
                            if ($county->loaded()) {
                                $location .= $county->name;
                                if ($this->towns) {
                                    $towns = $district->get_by_label($this->towns, Model_District::LEVEL_TOWNS, $county->pk());
                                    if ($towns->loaded()) {
                                        $location .= $towns->name;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        return $location;
    }

    /**
     * 将标识二进制位数的值生成十进制值
     * @param array $bin_bits
     * @return int|number
     */
    public function make_bin_value(array $bin_bits){
        $attr = 0;
        for ($i = 0; $i < 8; $i++){
            if (!empty($bin_bits[$i+1])){
                $attr += pow(2, $i);
            }
        }
        return $attr;
    }

    /**
     * 解析成为二进制熟悉值
     * @param int $bin_value
     * @param string $name
     * @return array
     */
    public function parse_bin_value($name){
        $attr = intval($this->$name);
        $attrs = array();
        for($i=1; $i<=8; $i++) {
            $k = pow(2, $i-1);
            $attrs[$i] = ($attr & $k) ? 1 : 0;
        }
        return $attrs;
    }
}