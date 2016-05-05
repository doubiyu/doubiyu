<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

	//功能类似构造方法 率先执行的方法
	public function _initialize(){
		//用户的登录检测
		$id = $_SESSION['admin']['uid'];
		//判断
		if(empty($id)){
			$this->error('您还有没有登录呢,思密达',U('Admin/Login/index'));
		}
	}
}
   //执行修改
    public function update(){

        $cate = M('category');
       
        $info = $cate->where('id = '.$_POST['pid'])->find();
        $_POST['path'] = $info['path'].$info['id'].',';
        // var_dump($_POST);

        // die;
        $cate->create();
        $res = $cate->save();
          //执行添加
        if($res){
             //添加成功
            $this->success('修改成功',U('Admin/Cate/index'));
        }else{
            //失败
            $this->error('修改失败',U('Admin/Cate/index'));
        }
    }
}