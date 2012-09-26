<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * 评论Model
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: link.php 45 2012-07-13 10:20:20Z Jie.Liu $
 */
class Model_Link extends ORM{
	const ACTIVE_ENABLE = 1;  // 连接可用
	const ACTIVE_DISABLE = 0;  // 连接不可用

    // 链接类型
    const TYPE_MAIN = 0; //导航链接
    const TYPE_TOP = 1; // 顶部链接
    const TYPE_BOTTOM = 2; // 底部链接
    const TYPE_FRIEND = 3; // 友情连接

    protected $_created_column = array(
        'column' => 'dateline',
        'format' => TRUE,
    );

    protected $_search_row = array('id', 'name', 'type', 'active');

	public function rules(){
		return array(
			'order' => array(
				array('not_empty'),
			),
		);
	}

    /**
     * 获取链接类型的名称
     * @static
     * @param null $type
     * @return array
     */
    public static function get_type_name($type = NULL){
        $type_name = array(
            self::TYPE_MAIN => '导航链接',
            self::TYPE_TOP => '顶部链接',
            self::TYPE_BOTTOM => '底部链接',
            self::TYPE_FRIEND => '友情链接',
        );

        if($type === NULL){
            return $type_name;
        } else {
            return $type_name[$type];
        }
    }

    /**
     * 获取type，用于列表页
     * @return array
     */
    public function get_type(){
        return self::get_type_name($this->type);
    }

    /**
     * 获取链接状态，用于列表页
     * @return string
     */
    public function get_active(){

        if($this->active == self::ACTIVE_ENABLE){
            $action_url = Route::url('admin/global', array(
                'controller' => 'link',
                'action' => 'single',
                'operation' => 'disable',
                'id' => $this->pk(),
            ), TRUE);
            return '<a href="'.$action_url.'" class="ajax"><span class="label label-success"><i class="icon-check icon-large"></i>可用</span></a>';
        } else {
            $action_url = Route::url('admin/global', array(
                'controller' => 'link',
                'action' => 'single',
                'operation' => 'enable',
                'id' => $this->pk(),
            ), TRUE);
            return '<a href="'.$action_url.'" class="ajax"><span class="label label-warning"><i class="icon-check-empty icon-large"></i>不可用</span></a>';
        }
    }

    /**
     * 生成链接类型的选择菜单
     * @return string
     */
    public function type_showselect(){
        return Form::select('type', self::get_type_name(), $this->type, array('class="input-small"'));
    }

    /**
     * 生成链接状态的选择菜单
     * @return string
     */
    public function active_showselect(){
        return Form::select('active', array(
            self::ACTIVE_ENABLE => '可用',
            self::ACTIVE_DISABLE => '不可用',
        ), $this->active, array('class="input-mini"'));
    }

    /**
     * 将链接变为可用
     */
    public function enable(){
        $this->active = self::ACTIVE_ENABLE;
        $this->save();
    }

    /**
     * 将链接变为不可用
     */
    public function disable(){
        $this->active = self::ACTIVE_DISABLE;
        $this->save();
    }
}