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
    public function Verification(){
    	$image = imagecreatetruecolor(100, 30);
    	$bgcolor = imagecolorallocate($image, 255, 255, 255);
    	imagefill($image, 0, 0, $bgcolor);
    	 
    	for($i=0;$i<4;$i++){
    		$fontsize=6;
    		$fontcolor = imagecolorallocate($image, rand(0,120), rand(0,120), rand(0,120));
    		$fontcontent = rand(0,9);
    		$x = ($i*100/4)+rand(5,10);
    		$y = rand(5,10);
    		imagestring($image, $fontsize, $x, $y, $fontcontent, $fontcolor);
    	}
    	 
    	for($i=0;$i<200;$i++){
    		$pointcolor = imagecolorallocate($image, rand(50,200), rand(50,200), rand(50,200));
    		imagesetpixel($image, rand(1,99), rand(1,29), $pointcolor);
    	}
    	 
    	header("Content-type: image/png");
    	imagepng($image);
    	imagedestroy($image);
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