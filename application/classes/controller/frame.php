<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 前台控制器父类
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: frame.php 74 2012-09-02 08:43:11Z jie $
 */
class Controller_Frame extends Controller_Template {  
    /**
     * 模板文件
     * @var string
     */
    public $template = 'template';

	/**
	 * 当前登录用户
	 * @var
	 */
	protected $user;

    /**
     * 实际内容
     * @var string
     */
    protected $content;
    
    /**
     * 站点标题
     * @var string
     */
    private $title;
    
    /**
     * 站点关键字
     */
    private $keywords;
    
    /**
     * 站点描述信息
     */
    private $description;

    /**
     * 站点配置信息
     * @var array
     */
    protected $siteInfo;
    
    /**
     * 路由规则中的溢出参数
     * @access protected
     * @var array
     */
    protected $params;
      
    // 静态文件对象
    protected $media;

	/**
	 * 站点导航信息
	 * 控制器可以追加导航，所以需要protected
	 * @var Breadcrumb
	 */
	protected $breadcrumb;
      
    public function before(){

        parent::before();
        
        $this->media = Media::get_instance();
        
        $this->initParams();

		//获取站点配置信息
        $this->siteInfo = $this->getSiteInfo();

        $this->title = $this->siteInfo['sitename']?$this->siteInfo['sitename']:'爱教练私教网';
        
        $this->media->css('css/bootstrap.css');
		$this->media->css('css/common.css');

		$this->media->js('js/jquery.js');

		//初始面包屑只有首页
		$this->breadcrumb = new Breadcrumb();

		$this->user = Auth::instance()->get_user();

        // 设置全局视图变量
        View::bind_global('login_user', $this->user);
    }

	/**
	 * 处理溢出的路由参数
	 */
    private function initParams(){
        $params = $this->request->param('params');
        if (!empty($params)){
            $params = explode('/', $params);
            $num = 0;
            $count = count($params);
            $this->params = array();
            while ($num < $count){
                $this->params[$params[$num++]] = isset($params[$num])?$params[$num]:'';
            }
        }
    }
    
    /**
     * 添加页面标题
     * @param string $title
     */
    protected function appendTitle($title){
        if ($this->title){
            $this->title = $title.'-'.$this->title;
        } else {
			$this->title = $title;
		}
    }
    
    /**
     * 添加页面关键字
     * @param string $keyworks
     * @return void
     */
    protected function setKeywords($keyworks){
        if ($keyworks){
            $this->keywords = $keyworks;
        }
    }
    
    /**
     * 添加页面描述信息
     * @param string $keyworks
     * @return void
     */
    protected function setDescription($description){
        if ($description){
            $this->description = $description;
        }
    }
      
    public function after(){  
        if ($this->auto_render == TRUE){

            $this->media->js('js/common.js');

            $this->init_template();
        }
        
        parent::after();  
    }

	/**
	 * 获取站点导航链接
	 * @return Database_Result
	 */
	protected function get_link($type){
		return ORM::factory('link')->where('active', '=', Model_Link::ACTIVE_ENABLE) // 所有可用的链接
								   ->where('type', '=', $type) // 链接类型
								   ->order_by('order')
								   ->find_all();
	}

	/**
	 * 获取后台站点配置信息
	 * @return array|bool
	 */
	private function getSiteInfo(){
        $query = DB::select('config_key', 'config_value')
            ->from('config')
            ->where('group_name', '=', 'site')
            ->execute();
        return count($query) ? array_map('unserialize', $query->as_array('config_key', 'config_value')) : FALSE;
// 		$configModel = new Config_Database();
// 		Kohana::$config->attach($configModel);
// 		$this->siteInfo = kohana::$config->load('site');
        
    }
    
    /**
     * 判断站点状态(是否关闭)
     * @version 2011-11-15 下午12:31:19 Jie.Liu
     */
    private function checkSiteStatus(){
        if (empty($this->siteInfo)){
            $this->getSiteInfo();
        }
        if (isset($this->siteInfo['closed_site']) AND $this->siteInfo['closed_site'] == 'true'){
            
            $closedInfo = isset($this->siteInfo['closed_info'])?$this->siteInfo['closed_info']:'站点已关闭';
            echo View::factory('siteclosed', array( 'title'=>'站点关闭', 'content'=>$closedInfo));
            die();
        }
    }

    /**
     * 加载表单验证js
     */
    protected function load_validate_js(){
        $this->media->js('js/validation/jquery.metadata.js');
        $this->media->js('js/validation/jquery.validate.js');
        if(I18n::$lang == 'zh-cn'){
            $this->media->js('js/validation/local/messages_cn.js');
        }
    }

    protected function load_kindeditor_js(){
        $this->media->js('js/kindeditor/kindeditor-min.js');
    }

    protected function showmessage($message, $type='success', $url = NULL){
        if($url === NULL){
            $url = $this->request->referrer();
        }
        $this->content = View::factory('showmessage')->set(array(
            'message' => $message,
            'url' => $url,
            'type' => $type,
        ));
        echo $this->response->body($this->init_template()->render());
        exit;
    }

    private function init_template(){
        //Add media
        $this->template->media = $this->media;

        // 站点名称、搜索关键字、描述信息
        $this->template->title = $this->title;
        $this->template->sitename = $this->siteInfo['sitename'];
        $this->template->keywords = $this->keywords?$this->keywords:$this->siteInfo['meta_keywords'];
        $this->template->description = $this->description?$this->description:$this->siteInfo['meta_description'];

        // 获取导航信息
        $this->template->nav_links = $this->get_link(Model_Link::TYPE_MAIN);
        // 顶部链接
        $this->template->top_links = $this->get_link(Model_Link::TYPE_TOP);
		// 底部链接
		$this->template->bottom_links = $this->get_link(Model_Link::TYPE_BOTTOM);

        // 面包屑
        $this->template->breadcrumb = $this->breadcrumb;

        // 实际站点内容
        $this->template->content = $this->content;

        //第三方统计代码
        $this->template->statcode = Arr::get($this->siteInfo, 'statcode', "");
        return $this->template;
    }
    
} // End Welcome  
