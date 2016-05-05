<?php 
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller{
    //显示
    public function index(){
        $this->display();
    } 

    //验证用户信息
    public function register(){
        var_dump($_POST);
        // die;
        $user=M('user');

        // $username=I('post.username');
        $fpassword=I('post.password');
        $srepassword=I('post.repassword');
        // $email=I('post.email');

        if($password == $repassword){
    	    $_POST['password'] = md5($fpassword);
    
 		};
        // var_dump($password);
        // die;
        var_dump($_POST);

        $user->create();
        $res = $user->add();
        // echo $user->_sql();die;
        //var_dump($res);
  
      	if($res){
    		//添加成功
    		$this->success('添加成功',U('Admin/User/index'),1000);
    	}else{
    		//失败
    		$this->error('添加失败',U('Admin/User/index'),1000);
    	}

        
    }
    

}







 ?>
