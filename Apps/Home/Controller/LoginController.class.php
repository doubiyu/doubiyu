<?php 
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
	//显示
	public function index(){
		//解析模板
		$this->display();
	}

	//验证用户信息
	public function login(){
		//var_dump($_POST);
        //die;
		$user=M('user');

		$username = I('post.credentials_username');
        $password = I('post.credentials_password');
        $mpassword=md5($password);
        // $kpassword=md5(123456);
        // var_dump($mpassword);
        // var_dump($kpassword);
         // die;

       $info = $user->where('username = "'.$username.'" and password = "'.$mpassword.'"')->find();
       // var_dump($info);die;
        if(empty($info)){
            $this->error('账号或者密码错误','',3);
        }
        // echo $user->_sql();
        // var_dump($info);
        //检测 如果用户存
        if(!empty($info)){
            session_start();
            $_SESSION['admin']['uid'] = $info['id'];
            $_SESSION['admin']['username'] = $info['username'];
           // session('username',$info['username']);
           // var_dump($_SESSION);
           $this->success('登录成功',U('Admin/index/index'),1);
        }else{
            $this->error('登录失败','',3);
        }
    }

}






 ?>
