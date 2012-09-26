<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 首页控制器
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: home.php 52 2012-07-18 02:09:12Z Jie.Liu $
 */
class Controller_Home extends Controller_Frame {
    
	public function action_index(){
		$this->content = View::factory('home/index');

		// 获取最新教练
		$this->content->new_coaches = ORM::factory('coach')->order_by('dateline', 'DESC')->limit(12)->find_all();

		// 获取所有的顶级分类，以及顶级分类下的子项
		$parent_list = ORM::factory('coach_category')->get_parent_list();
		$list = array();
		foreach($parent_list as $item){
			$label = $item->label;
			$list[$label] = $item->object();
			$list[$label]['items'] = ORM::factory('coach_category')->get_item_byparent($label);
		}
		$this->content->coach_types = $list;

		// 友情连接
		$this->content->friend_links = $this->get_link(Model_Link::TYPE_FRIEND);

		// 最新教学文章
		$this->content->new_articles = ORM::factory('article')->order_by('dateline', 'DESC')->limit(10)->find_all();
	}

} // End Home