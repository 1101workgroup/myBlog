<?php

namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller {
	// 管理员登录页面
	public function index() {
		$this->display ();
	}
	// 验证管理员用户名密码
	public function login() {
		$json = file_get_contents ( "php://input" ); //获取前台ajax过来的json
 		$json = json_decode ( $json );//将json字符串转成对象，如果带第二个参数true，则转成数组 
		$con ['user'] = $json->user;
		$con ['pwd'] = $json->pwd;
		$m = D ( 'manager' );
		if($m->create($con,4)){
			if($m->login()){
				$this->ajaxReturn(array('code'=>'1'));
			}else{
				$this->ajaxReturn(array('code'=>'0','message'=>'用户名或密码错误'));
			}
		}else{
			$this->ajaxReturn(array('code'=>'0','message'=>$m->getError()));
			
		}
// 		$result = $m->where ( $con )->find ();
// 		if ($result != null) {
// 			$_SESSION['manager'] = $result['id'];
// 			$_SESSION['manager-user'] = $result['name'];
// 			echo 1;
// 		} else {
// 			echo 0;
// 		}
	}
	public function logout(){
		session_destroy();
		header('Location:/admin');
	}
}