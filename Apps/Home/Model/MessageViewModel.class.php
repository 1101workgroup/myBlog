<?php
namespace Home\Model;
use Think\Model\ViewModel;
class MessageViewModel extends ViewModel{
	public $viewFields = array(
			'message'=>array('id','uid','aid','create_time','message','_type'=>'left'),
			'user'=>array('name', '_on'=>'message.uid=user.id'),
	);
}