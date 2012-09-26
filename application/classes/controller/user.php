<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 账户控制器
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: account.php 48 2012-07-16 06:53:18Z Jie.Liu $
 */
class Controller_User extends Controller_Frame {

    /**
     * 私有模版
     * @var
     */
    private $main;

	public function before(){
		parent::before();
        // 判断用户是否登录
        if( ! $this->user){
            $this->request->redirect(URL::site('/account/login'));
        }
		$this->breadcrumb->append('/user', '个人中心');
        $this->main = View::factory('user/user');
	}

    /**
     * 基本信息
     */
    public function action_index(){
		$this->main->content = View::factory('user/index');
	}

    /**
     * 个人信息
     */
    public function action_profile(){
        $this->breadcrumb->append('/user/profile', '个人资料');
        $this->appendTitle('个人资料');
        $this->main->content = View::factory('user/profile');
        if(HTTP_Request::POST === $this->request->method()){
            $post_data = $this->request->post();
            $post_data['birthday'] = strtotime(sprintf("%d-%d-%d", $post_data['birthday']['year'],
                $post_data['birthday']['month'], $post_data['birthday']['day']));
            try{
                $this->user->values($post_data)->save();
                $this->showmessage('修改个人信息成功', 'success');
            } catch (ORM_Validation_Exception $e){
                $message = $e->errors('validation');
                return $this->content->message = $message;
            }
        }
    }

    /**
     * 更改用户头像
     */
    public function action_avatar(){
        $this->breadcrumb->append('/user/avatar', '修改头像');
        $this->appendTitle('修改头像');
        $this->main->content = View::factory('user/avatar');
        if(HTTP_Request::POST === $this->request->method()){
           if($this->user->upload_avatar('avatar')){
               $this->showmessage('上传头像成功', 'success');
           }
           $this->main->content->message = '头像上传失败';
        }
    }

    /**
     * 用户修改密码
     */
    public function action_password(){
        $this->breadcrumb->append('/user/password', '修改密码');
        $this->appendTitle('修改密码');
        $this->load_validate_js();
        $this->main->content = View::factory('user/password');
        $message = array();
        if(HTTP_Request::POST === $this->request->method()){
            $password = Auth::instance()->hash_password($this->request->post('password'));
            if($password === $this->user->password){
                $newpassword = $this->request->post('password');
                if($newpassword AND ($newpassword === $this->request->post('confirm'))){
                    $this->user->password = $newpassword;
                    $this->user->save();
                    $this->showmessage('修改密码成功');

                } else {
                    $message['newpassword'] = '新密码格式不正确';
                }

            } else {
                $message['password'] = '旧密码输入错误';
            }
        }

        $this->main->content->message = $message;
    }

    /**
     * 邮箱认证
     */
    public function action_email(){
        $this->main->content = View::factory('/user/email');
    }

    public function after(){
        $this->content = $this->main;
        return parent::after();
    }

} // End Account