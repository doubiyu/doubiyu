<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {
    //用户的列表
    public function index(){
    	//创建对象
    	$user = M('user');
        // var_dump($_GET);
        // dump($_GET);
        //获取关键字
        if(!empty($_GET['keyword'])){
            //建议使用数组形式来创建where条件
            // $where['username'] = array('like','%'.$_GET['keyword'].'%');
            $where = "username like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }

        //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 10;
        
    	//统计总数
    	$count = $user->where($where)->count();
    	// 实例化分页类
    	$Page = new \Think\Page($count,$num);

    	//获取limit
    	$limit = $Page->firstRow.','.$Page->listRows;
    	// 分页显示输出
    	$pages = $Page->show();
    	// var_dump($pages);
    	//查询
    	$users = $user->limit($limit)->where($where)->select();
        //查看sql语句
        // echo $user->_sql();


    	//分配变量
    	$this->assign('users',$users);
    	$this->assign('pages',$pages);

    	//解析模板
    	$this->display(); 	
    }
    //用户的添加
    public function add(){
   		//解析模板
    	$this->display();

    }
    //执行插入
    public function insert(){
    	
    	//创建表对象
    	$user = M('user');

    	//处理图片上传
    	if($_FILES['pic']['error'] == 0){
    		$upload = new \Think\Upload();// 实例化上传类    
	    	$upload->maxSize   =   3145728 ;// 设置附件上传大小   
	    	$upload->exts      =   array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
	    	$upload->rootPath = './Public';//手动设置网站根目录
	    	$upload->savePath  =   '/Uploads/'; // 设置附件上传目录    
	    	$info   =   $upload->upload();    // 上传文件     
	    	if(!$info) {// 上传错误提示错误信息        
	    		$this->error($upload->getError());    
	    	}else{// 上传成功       
	    		// $this->success('上传成功！'); 
	    		$str = $info['pic']['savepath']. $info['pic']['savename'];
	    		// var_dump($str);
	    		$_POST['pic'] = $str;
	    	}
    	}
    	//var_dump($_POST);
 		//存入数据库的密码要MD5加密
    	if($_POST['password']){
    		$_POST['password']=md5($_POST['password']);
    		//var_dump($_POST['password']);
    	}
    	//处理hobby字段
    	if(!empty($_POST['hobby'])){
    		$_POST['hobby'] = implode(',', $_POST['hobby']);
    	}
    	// var_dump($_POST);
    	//创建数据
    	$user->create();
    	//执行插入
    	$res = $user->add();
    	// var_dump($res);
    	if($res){
    		//添加成功
    		$this->success('添加成功',U('Admin/User/index'));
    	}else{
    		//失败
    		$this->error('添加失败',U('Admin/User/index'));
    	}
    }
    //执行删除
    public function delete(){
    	// var_dump($_GET);
    	// die;
    	//var_dump(I('get.id'));
        $id=I('get.id');
        $type=I('get.type');
    	//创建对象模型
    	$m=new \Think\Model();
    
    	//开启事务
    	//$m->startTrans();
    	// $one=$m->table(__USER__)->delete($id); 
    	// if($one){
    	// 	echo 22;
    	// 	$m->commit();
    	// }else{
    	// 	echo 33;
    	// 	$m->rollback();
    	// }
   }
   //用户修改
   public function edit(){
 		$user=M('user');
 		//获取id
 		$id=I('get.id');
 		//读取数据
 		$info=$user->find($id);
 		// var_dump($info);
 		$hobby=explode(',',$info['hobby']);
 		// var_dump($hobby);

 		//分配变量
        $this->assign('info',$info);
        $this->assign('hobby',$hobby);
        //解析模板
        $this->display();
   }
   //执行修改
   public function update(){
   		var_dump($_POST);
   		$id=$_POST['id'];
   		//更新表
   		$user=M('user');
   		//处理图片上传
        if($_FILES['pic']['error'] == 0){
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =   3145728 ;// 设置附件上传大小   
            $upload->exts      =   array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->rootPath = './Public';//手动设置网站根目录
            $upload->savePath  =   '/Uploads/'; // 设置附件上传目录    
            $info   =   $upload->upload();    // 上传文件     
            if(!$info) {// 上传错误提示错误信息        
                $this->error($upload->getError());    
            }else{// 上传成功       
                // $this->success('上传成功！'); 
                $str = $info['pic']['savepath']. $info['pic']['savename'];
                // var_dump($str);
                $_POST['pic'] = $str;
            }
            //获取原图的路径
            $res = $user->find($_POST['id']);
            $pic = $res['pic'];
            //删除图片
            unlink('./Public'.$pic);
        }
        if($_POST['password']){
    		$_POST['password']=md5($_POST['password']);
    		//var_dump($_POST['password']);
    	}
        if(!empty($_POST['hobby'])){
            $_POST['hobby'] = implode(',', $_POST['hobby']);
        }
        //创建数据
        $user->create();
        //执行更新
        $res=$user->save();

        if($res){
        	$this->success('修改成功',U('Admin/User/index'),1000);
        }else{
        	$this->error('修改失败',U('Admin/User/index'),1000);
        }

   }


 
}
