<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	//用户访问首页
    public function index(){
    	$d=D('Index');
    	$d->echo1();
    	$this->display();
    }
}