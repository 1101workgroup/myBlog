<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class ArticleViewModel extends ViewModel {
	
	 public $viewFields  = array(
	 		
			'Article'=>array('id','title','pic','create_time','_type'=>'LEFT'),
	 		'Cate' =>array('name','_on'=>'Article.cid=Cate.id'),
	);
}
