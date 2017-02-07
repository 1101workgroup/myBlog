<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->nav();
		$this->news();
	}
	public  function nav(){
		$cateList = M('cate')->select();
		$this->assign('cateList',$cateList);
	}
	public function news(){
		$newList = M('article')->order('create_time desc')->limit(0,10)->select();
		$this->assign('newList',$newList);
	}
}