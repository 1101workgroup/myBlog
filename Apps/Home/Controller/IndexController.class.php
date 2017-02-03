<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	//用户访问首页
    public function index(){
    	$cateList = M('cate')->select();
    	$this->assign('cateList',$cateList);
    	$this->display();
    }
}