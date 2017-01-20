<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
	public function _initialize(){
// 		if (!isset($_SESSION['manager'])){
// 			header('Location:/admin/Login/index');
// 		}
	}
    public function index(){
    	$m = M('mb_article');
    	$list = $m->field('mb_article.id,title,name,create_time')->join('LEFT JOIN mb_column on mb_article.cid=mb_column.id')->select();
    	$this->assign('list',$list);
    	$this->display();
    }
    public function art_add(){
    	$m = M('mb_column');
    	$resutl = $m->select();
    	$this->assign('list',$resutl);
    	$this->display();
    }
    public function do_add(){
    	$json = file_get_contents ( "php://input" ); //获取前台ajax过来的json
    	$json = json_decode ( $json );//将json字符串转成对象，如果带第二个参数true，则转成数组
    	$m = M('mb_article');
    	$data['title'] = $json->title;
    	$data['cid'] = $json->column;
    	$data['create_time'] = date('y-m-d H:i:s', time());
    	$data['context'] = $json->context;
    	$result = $m->add($data);
    	if($result !== false){
    		echo 1;
    	}else{
    		echo 0;
    	}
    }
    
    public function art_edit(){
    	$col = M('mb_column');
    	$colresult = $col->select();
    	$this->assign('list',$colresult);
    	$id = I('get.id','');
    	$con['id'] = $id;
    	$m = M('mb_article');
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
    	$m = M('mb_article');
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
    	$m = M('mb_article');
    	$result = $m->where($con)->delete();
    	if($result){
    		echo 1;
    	}else{
    		echo 0;
    	}
    }
}