<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    //显示
    public function index(){
    	
        //解析模板
        $this->display();
    }
    //验证用户信息
    public function login(){
        // var_dump($_POST);
        $user = M('user');

        $username = I('post.username');
        $password = I('post.password');

    	$mpassword=md5($password);
    	//var_dump($mpassword);
		//查询
        $info = $user->where('username = "'.$username.'" and password = "'.$mpassword.'"')->find();
       // var_dump($info);die;
        if(empty($info)){
            $this->error('账号或者密码错误','',3);
        }
        // echo $user->_sql();
        // var_dump($info);
        //检测 如果用户存在
        if( ($info[type] == 0 )||( $info[type] == 1) ){
        	$this->error('你没有权限登录','',3);
        }
        if(!empty($info)){
            session_start();
            $_SESSION['admin']['uid'] = $info['id'];
            $_SESSION['admin']['username'] = $info['username'];
           // session('username',$info['username']);
           // var_dump($_SESSION);
           $this->success('登录成功',U('Admin/index/index'),3);
        }else{
            $this->error('登录失败','',3);
        }
    }
    public function outlogin(){
        // echo '11';
        // session_start();
        unset($_SESSION['admin']);
        // var_dump($_SESSION);
           $this->success('退出成功',U('Admin/index/index'),0);
       

    }
}
