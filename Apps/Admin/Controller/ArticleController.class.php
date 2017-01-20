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
    public function art_list(){
    	$this->display();
    }
    public function art_add(){
    	$this->display();
    }
    public function art_edit(){
    	$this->display();
    }
    public function art_delete(){
    	$this->display();
    }
}