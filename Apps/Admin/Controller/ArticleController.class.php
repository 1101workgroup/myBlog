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
    	$m = M('article');
    	$list = $m->select();
    	$this->assign('list',$list);
    	$this->display();
    }
    public function art_add(){
    	$this->display();
    }
    public function do_add(){
    	$json = file_get_contents ( "php://input" ); //获取前台ajax过来的json
    	$json = json_decode ( $json );//将json字符串转成对象，如果带第二个参数true，则转成数组
    	$m = M('article');
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
    	$this->display();
    }
    public function art_delete(){
    	$this->display();
    }
}