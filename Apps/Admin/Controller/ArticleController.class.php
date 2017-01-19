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
    	$this->display();
    }
}