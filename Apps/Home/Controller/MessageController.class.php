<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller{
	public function add_msg(){
		$json = file_get_contents('php://input');
		$json = json_decode($json);
		$data['aid'] = $json->aid;
		$data['uid'] = $_SESSION['user'];
		$data['message'] = $json->context;
		$data['create_time'] = date('y-m-d H:i:s',time());
		$m = D('message');
		if($m->create($data)){
			if($m->add()){
				$this->ajaxReturn(array('code'=>'1','message'=>'评论成功'));
			}else{
				$this->ajaxReturn(array('code'=>'0','message'=>'评论失败'));
			}
		}else{
			$this->ajaxReturn(array('code'=>'0','message'=>$m->getError()));
		}
	}
}