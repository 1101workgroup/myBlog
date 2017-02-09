<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	protected $_validate = array(
			//array中的参数解释
			/*
			 * 第一个参数为需要验证的字段名，例如$data['name'],需要验证的就是name
			 * 第二个参数为验证的规则， 可以写正则要验证，也可以用tp内置的验证，如require为不为空验证，email验证，url为URL地址验证等。
			 * 第三个参数为提示信息，就是验证不通过是的提示信息，在控制器中可以通过D(模型名)->getError()获得这个提示信息。
			 * 第四个参数为验证条件，可选字段，不填的时候默认为0，0表示有这个字段存在则验证，1表示不管什么情况肯定会验证，2表示输入的值不为空时验证。
			 * 第五个参数为附加规则，可查手册，举例填regex时就是按第二个参数的规则去验证，unique时就是验证唯一性，则第二个参数应该为空。
			 * 
			 * */
			array('user','','该用户名已存在','1','unique',3),
			array('user','require','用户名不能为空',1,'regex',4),
			array('pwd','require','密码不能为空',1,'regex',4),
	);
	public function login(){
		$pwd = $this->pwd;
		$res = $this->where(array('user'=>$this->user))->find();
		if($res['pwd'] == $pwd){
			$_SESSION['user'] = $res['id'];
			$_SESSION['name'] = $res['name'];
			return true;
		}else{
			return false;
		}
	}
}
