<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	//用户登录首页
    public function index(){
    	$this -> display();
    }
    //验证用户名密码
    public function login(){
    	$this->display();
    }
    public function do_login(){
    	$json = file_get_contents('php://input');
    	$json = json_decode($json);
    	$data['user'] = $json->user;
    	$data['pwd'] = $json->pwd;
    	$data['yzm'] = $json->yzm;
    	echo $json->user.$json->pwd.$json->yzm;
    }
    public function register(){
    	$this->display();
    	
    }
    public function do_register(){
    	$json = file_get_contents('php://input');
    	$json = json_decode($json);
    	$data['user'] = $json->user;
    	$data['pwd'] = $json->pwd;
		$m = M('user');
		$result = $m->add($data);
		if($result){
			$this->ajaxReturn(array('code'=>1,'message'=>'注册成功'));
		}else{
			$this->assign(array('code'=>0,'message'=>'注册失败'));
		}
    }
}