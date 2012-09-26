<?php
/**
 * 站点导航类（面包屑）
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: breadcrumb.php 45 2012-07-13 10:20:20Z Jie.Liu $
 */
class Breadcrumb{
	private $breadcrumb = array();

	public function __construct($uri = '', $title = '', array $attributes = NULL){
		if($uri) {
			$this->breadcrumb[] = array('uri' => $uri, 'title' => $title, 'attributes' => $attributes);
		} else {
			$this->breadcrumb[] = array('uri' => '/', 'title' => '首页', 'attributes' => array('title' => '回到首页'));
		}
	}

	public function append($uri, $title = '', array $attributes = NULL){
		$this->breadcrumb[] = array('uri' => $uri, 'title' => $title, 'attributes' => $attributes);
	}

    /**
     * 导航栏渲染
     * @return null|string
     */
    public function render(){
        if(count($this->breadcrumb) > 1){
            $current_item = array_pop($this->breadcrumb);
            return View::factory('breadcrumb/layout')->bind('breadcrumb', $this->breadcrumb)
                ->bind('current_item', $current_item)
                ->render();
        }

        return NULL;
	}
}
