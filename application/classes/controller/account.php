<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 账户控制器
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: account.php 48 2012-07-16 06:53:18Z Jie.Liu $
 */
class Controller_Account extends Controller_Frame {

	public function before(){
		parent::before();
		$this->breadcrumb->append('/account', __('Account'));
	}

    /**
     * 进行账户登录
     */
    public function action_index(){
		$this->action_register();
	}

	/**
	 * 用户登录
	 */
	public function action_login(){
        // 如果用户已经登录，则直接返回
        if($this->user){
            $this->request->redirect('/');
        }
		$this->breadcrumb->append('/account/login', __('Login'));
		// 加载验证JS
        $this->load_validate_js();
        $this->appendTitle("用户登录");

		if(HTTP_Request::POST == $this->request->method()){
			$user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $this->request->post('remember') == 'true');

			if($user){
                $referrer = $this->request->post('referrer');
				$this->request->redirect($referrer);
			} else {
				$this->content = View::factory('account/login')->set('message', __('Login failed'));
			}

		} else {
			$this->content = View::factory('account/login');
		}
	}

	/**
	 * 用户注册
	 */
	public function action_register(){
        // 如果用户已经登录，则直接返回
        if($this->user){
            $this->request->redirect('/');
        }

        $this->breadcrumb->append('/account/register', __('Register'));
        // 加载验证JS
        $this->load_validate_js();
        $this->appendTitle('用户注册');

		if(HTTP_Request::POST == $this->request->method()){
			$message = '';
			try{

				$user = ORM::factory('user')->create_user($this->request->post(), array('username', 'password', 'email'))->save();
				// 如果用户注册成功则直接登录
				if($user->loaded()){

					$login = Auth::instance()->login($this->request->post('username'), $this->request->post('password'));
					if($login){
						$this->request->redirect($this->request->post('referrer'));
					}else {
						$this->content =View::factory('account/login')->set('message', __('Login failed'));
					}

				} else {
					$message = __('Register failed');
				}

			}catch (ORM_Validation_Exception $e){
				$message = $e->errors('validate');
			}

			$this->content = View::factory('account/register')->bind('message', $message);

		} else {
			$this->content = View::factory('account/register');
		}
	}

	/**
	 * 用户退出
	 */
	public function action_logout(){
		Auth::instance()->logout();
		$this->request->redirect($this->request->referrer());
	}

	/**
	 * 验证email是否存在
	 */
	public function action_unique_email(){
		echo $this->bool_str( ! ORM::factory('user')->unique_key_exists($this->request->query('email'), 'email') );
		die();
	}

	/**
	 * 验证用户名是否存在
	 */
	public function action_unique_username(){
		echo $this->bool_str( ! ORM::factory('user')->unique_key_exists($this->request->query('username'), 'username') );
		die();
	}

	/**
	 * 将布尔类型转换为字符串
	 * @param bool $bValue
	 * @return string
	 */
	private function bool_str($bValue = false){
		return $bValue ? 'true' : 'false';
	}

} // End Account