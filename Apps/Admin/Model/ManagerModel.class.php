<?php
namespace Admin\Model;
use Think\Model;
class ManagerModel extends Model{
	protected $_validate = array(
		array('user','require','用户名不能为空！',1,'regex',4),
		array('pwd','require','密码不能为空',1,'regex',4),
		array('verify','check_verify','验证码错误',1,'callback',4),
			
	);
	public function check_verify($code, $id = ''){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
	public function login(){
		$pwd = $this->pwd;
		$res = $this->where(array('user'=>$this->user))->find();
		if($res['pwd'] == md5($pwd)){
			$_SESSION['manager'] = $res['id'];
			$_SESSION['manager-user'] = $res['name'];
			return true;
		}else{
			return false;
		}
	}
}