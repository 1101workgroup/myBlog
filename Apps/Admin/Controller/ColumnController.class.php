<?php

namespace Admin\Controller;

use Think\Controller;

class ColumnController extends Controller {
	public function _initialize() {
		if (! isset ( $_SESSION ['manager'] )) {
			header ( 'Location:/admin/Login/index' );
		}
	}
	public function index() {
		$name = I('get.name','');
		if($name != ''){
			$con['name'] = $name;
			$this->assign('name',$name);
		}
		$m = M ( 'column' );
		$count = $m->where($con)->count ();
		$Page = new \Think\Page ( $count, 5 );
		$show = $Page->show ();
		$list = $m->where($con)->limit($Page->firstRow.','.$Page->listRows)->select ();
		$this->assign ( 'list', $list );
		$this->assign ( 'page', $show );
		$this->display ();
	}
	public function col_add() {
		$this->display ();
	}
	public function do_add() {
		$json = file_get_contents ( 'php://input' );
		$json = json_decode ( $json );
		$data ['name'] = $json->name;
		$m = D ( 'column' );
		if($m->create($data)){
			if($m->add()){
				$this->ajaxReturn(array('code'=>1,'message'=>'栏目添加成功')) ;
			}else{
				$this->ajaxReturn(array('code'=>0,'message'=>'栏目添加失败')) ;
			}
		}else{
			$this->ajaxReturn(array('code'=>2,'message'=>$m->getError())) ;
		}
	}
	public function col_edit() {
		$m = M ( 'column' );
		$result = $m->find (I ( 'get.id', '' ));
		$this->assign ( 'result', $result );
		$this->display ();
	}
	public function do_edit() {
		if(IS_POST){
			$json = file_get_contents ( 'php://input' );
			$json = json_decode ( $json );
			$data ['name'] = $json->name;
			$data ['id'] = $json->id;
			$m = D ( 'column' );
			if($m->create($data)){
				if($m->save() !== false){
					$this->ajaxReturn(array('code'=>1,'message'=>'栏目修改成功')) ;
				}else{
					$this->ajaxReturn(array('code'=>0,'message'=>'栏目修改失败')) ;
				}
			}else{
				$this->ajaxReturn(array('code'=>2,'message'=>$m->getError())) ;
			}
		}
		
	}
	public function col_delete() {
		if ( M ( 'column' )->delete (I ( 'post.id', '' ))) {
			echo 1;
		} else {
			echo 0;
		}
	}
}