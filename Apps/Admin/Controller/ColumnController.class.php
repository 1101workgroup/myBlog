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
		$m = M ( 'mb_column' );
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
		$m = M ( 'mb_column' );
		$resutl = $m->add ( $data );
		if ($resutl) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function col_edit() {
		$id = I ( 'get.id', '' );
		$m = M ( 'mb_column' );
		$con ['id'] = $id;
		$result = $m->where ( $con )->find ();
		$this->assign ( 'result', $result );
		$this->display ();
	}
	public function do_edit() {
		$json = file_get_contents ( 'php://input' );
		$json = json_decode ( $json );
		$data ['name'] = $json->name;
		$con ['id'] = $json->id;
		$m = M ( 'mb_column' );
		$result = $m->where ( $con )->save ( $data );
		if ($result !== false) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function col_delete() {
		$id = I ( 'post.id', '' );
		$con ['id'] = $id;
		$m = M ( 'mb_column' );
		$result = $m->where ( $con )->delete ();
		if ($result) {
			echo 1;
		} else {
			echo 0;
		}
	}
}