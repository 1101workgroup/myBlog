<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	//用户访问首页
    public function index(){
    	$cateList = M('cate')->select();
    	$this->assign('cateList',$cateList);
    	$artList = M('article')->select();
    	$this->assign('artList',$artList);
    	$newList = M('article')->order('create_time desc')->select();
    	$this->assign('newList',$newList);
    	$this->display();
    }
}