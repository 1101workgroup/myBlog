<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
	//用户访问首页
    public function index(){
	    	$id = I('get.id','');
	    	$this->assign('current',$id);
	    	if($id !=''){
	    		$con['cid'] = $id;
	    	}
	    	$art_m = M('article');
	    	$count      = $art_m->where($con)->count();// 查询满足要求的总记录数
	    	$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	    	$show       = $Page->show();// 分页显示输出
	    	$artList = $art_m->where($con)->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
	    	$this->assign('artList',$artList);
	    	$this->assign('page',$show);// 赋值分页输出
	    	$this->display();
    }
    public function article_detail(){
	    	$id = I('get.id','');
	    	$art_m = M('article');
	    	$con['id'] = $id;
	    	$artInfo = $art_m->where($con)->find();
	    	$front=$art_m->where("id<".$id)->order('id desc')->limit('1')->find();
	    	$after=$art_m->where("id>".$id)->order('id desc')->limit('1')->find();
	    	$this->assign('front',$front);
	    	$this->assign('after',$after);
	    	$this->assign('artInfo',$artInfo);
	    	$msg = d('messageview');
	    	$count      = $msg->count();// 查询满足要求的总记录数
	    	$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	    	$show       = $Page->show();// 分页显示输出
	    	$msgres = $msg->where(array('aid'=>$id))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
	    	$this->assign('page',$show);// 赋值分页输出
	    	$this->assign('msgres',$msgres);
	    	$this->display();
	    	
	    	
    }
}