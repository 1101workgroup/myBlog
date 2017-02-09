/**
 * 
 */
window.onload=function(){

layui.use(['form', 'layer'], function(){  // 如果只加载一个组件，可以不填数组。如：layui.use('form')
		  var form = layui.form() // 获取form组件
		  ,layer = layui.layer; // 获取layer组件
		  
		
		  
		 
		  // 监听登录提交按钮
		  //这个按钮点击之后，会事先去判断verify中的验证的，这个监听中，只要写登录的操作就行了。
		  form.on('submit(index)', function(data){
			  $.ajax({
		  			type:'post',//以什么样的类型去传，post或者get
		  			url:'/Login/do_login',//传值目标地址
		  			data:JSON.stringify(data.field),
		  			success:function(data){
		  				switch(data['code']){
					  	case 1:
					  		layer.alert(data['message'], {icon: 1},function() {
					  			parent.location.reload();
							});
					  		break;
					  	case 0:
					  		layer.alert(data['message'], {icon: 2},function() {
								location.reload();
							});
					  }
		  			}
		  		})
			 //这个里面写登录的操作，可参考/apps/admin/view/login/index.html中的js ajax回调。
		  });
		  
	
});
     
}
