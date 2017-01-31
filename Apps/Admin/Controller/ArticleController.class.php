<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
	public function _initialize(){
 		if (!isset($_SESSION['manager'])){
 			header('Location:/admin/Login/index');
 		}
	}
    public function index(){
    	$m = D('ArticleView');
    	$list = $m->select();
    	$this->assign('list',$list);
    	$this->display();
    }
    public function art_add(){
    	$m = M('column');
    	$resutl = $m->select();
    	$this->assign('list',$resutl);
    	$this->display();
    }
    public function do_add(){
    	$json = file_get_contents ( "php://input" ); //获取前台ajax过来的json
    	$json = json_decode ( $json );//将json字符串转成对象，如果带第二个参数true，则转成数组
    	$m = M('article');
    	$data['title'] = $json->title;
    	$data['cid'] = $json->column;
    	$data['pic'] = $json->pic;
    	$data['memo'] =$json->desc; 
    	$data['create_time'] = date('y-m-d H:i:s', time());
    	$data['context'] = $json->context;
    	$result = $m->add($data);
    	if($result !== false){
    		echo 1;
    	}else{
    		echo 0;
    	}
    }
    
    public function upload_pic(){
    	if($_FILES['pic']['tmp_name'] != ''){
    		$upload = new \Think\Upload();// 实例化上传类
    		$upload->maxSize   =     3145728 ;// 设置附件上传大小
    		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->rootPath  =      './'; // 设置附件上传根目录
    		$upload->savePath  =      './Public/Uploads/'; // 设置附件上传（子）目录
    		// 上传单个文件
    		$info   =   $upload->uploadOne($_FILES['pic']);
    		if(!$info) {// 上传错误提示错误信息
    			$this->ajaxReturn(array('code'=>'0','message'=>$this->error($upload->getError())));
    		}else{// 上传成功 获取上传文件信息
    			$this->ajaxReturn(array('code'=>'1','message'=>$info['savepath'].$info['savename']));
    		}
    	}else{
    		$this->ajaxReturn(array('code'=>'0'));
    	}
    	
    	
    }
    
    public function art_edit(){
    	$col = M('column');
    	$colresult = $col->select();
    	$this->assign('list',$colresult);
    	$id = I('get.id','');
    	$con['id'] = $id;
    	$m = M('article');
    	$result = $m->where($con)->find();
    	$this->assign('result',$result);
    	$this->display();
    }
    public function do_edit(){
    	$json = file_get_contents ( "php://input" ); //获取前台ajax过来的json
    	$json = json_decode ( $json );//将json字符串转成对象，如果带第二个参数true，则转成数组
    	$con['id'] =  $json->id;
    	$data['title'] = $json->title;
    	$data['cid'] = $json->column;
    	$data['context'] = $json->context;
    	$m = M('article');
    	$result = $m->where($con)->save($data);
    	if($result !== false){
    		echo 1;
    	}else{
    		echo 0;
    	}
    }
    public function art_delete(){
    	$id = I('post.id','');
    	$con['id'] = $id;
    	$m = M('article');
    	$result = $m->where($con)->delete();
    	if($result){
    		echo 1;
    	}else{
    		echo 0;
    	}
    }
}