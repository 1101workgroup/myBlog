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
    	 
//     	for($i=0;$i<4;$i++){
//     		$fontsize=6;
//     		$fontcolor = imagecolorallocate($image, rand(0,120), rand(0,120), rand(0,120));
//     		$fontcontent = rand(0,9);
//     		$x = ($i*100/4)+rand(5,10);
//     		$y = rand(5,10);
//     		imagestring($image, $fontsize, $x, $y, $fontcontent, $fontcolor);
//     	}
		$captch_code = '';
    	for($i=0;$i<4;$i++){
    		$fontsize=10;
    		$fontcolor = imagecolorallocate($image, rand(0,120), rand(0,120), rand(0,120));
    		$data = 'abcdefghijkmnpkrstuvwxyz23456789';
    		$fontcontent = substr($data, rand(0,strlen($data)),1);
    		$captch_code .= $fontcontent;
    		$x = ($i*100/4)+rand(5,10);
    		$y = rand(5,10);
    		imagestring($image, $fontsize, $x, $y, $fontcontent, $fontcolor);
    	}
    	$_SESSION['authcode'] = $captch_code;
    	for($i=0;$i<100;$i++){
    		$pointcolor = imagecolorallocate($image, rand(50,200), rand(50,200), rand(50,200));
    		imagesetpixel($image, rand(1,99), rand(1,29), $pointcolor);
    	}
    	
//     	for ($i=0;$i<3;$i++){
//     		$linecolor = imagecolorallocate($image, rand(80,200), rand(80,220), rand(80,200));
//     		imageline($image, rand(1,99), rand(1,29), rand(1,99), rand(1,29), $linecolor);
//     	}
    	 
    	header("Content-type: image/png");
    	imagepng($image);
    	imagedestroy($image);
    }
    public function do_register(){
    	$json = file_get_contents('php://input');
    	$json = json_decode($json);
    	$data['user'] = $json->user;
    	$data['pwd'] = $json->pwd;
    	$data['name'] = $json->name;
    	$authcode = strtolower($json->authcode);
    	if($authcode == $_SESSION['authcode']){
    		$m = D('user');
    		if($m->create($data)){
    			if($m->add()){
    				$this->ajaxReturn(array('code'=>1,'message'=>'注册成功'));
    			}else{
    				$this->ajaxReturn(array('code'=>0,'message'=>'注册失败'));
    			}
    		}else{
    			$this->ajaxReturn(array('code'=>2,'message'=>$m->getError())) ;
    		}
    	}else{
    		$this->ajaxReturn(array('code'=>2,'message'=>'验证码错误'));
    	
    	}
		
    }
}