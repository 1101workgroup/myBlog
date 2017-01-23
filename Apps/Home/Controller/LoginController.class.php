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
    	
    }
    public function register(){
    	$json = file_get_contents('php://input');
    	$json = json_decode($json);
    	$data['user'] = $json->user;
    	$data['pwd'] = $json->pwd;
    	$data['email'] = $json->email;
    	$data['sex'] = $json->sex;
    	echo $json->user.$json->pwd.$json->email.$json->sex;
    }
}