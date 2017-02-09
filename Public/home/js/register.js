/**
 * 
 */
window.onload=function(){

layui.use('form', function(){  // 如果只加载一个组件，可以不填数组。如：layui.use('form')
		  var form = layui.form(); // 获取form组件
		  
		 
		  form.on('submit(register-btn)', function(data){
			  		$.ajax({
			  			type:'post',//以什么样的类型去传，post或者get
			  			url:'/index.php/Home/Login/do_register',//传值目标地址
			  			data:JSON.stringify(data.field),
			  			success:function(data){
			  				switch(data['code']){
						  	case 1:
						  		layer.alert(data['message'], {icon: 1},function() {
									location.reload();
								});
						  		break;
						  	case 0:
						  		layer.alert(data['message'], {icon: 2},function() {
									location.reload();
								});
						  	case 2:
						  		layer.alert(data['message'], {icon: 2},function() {
									location.reload();
								});
						  }
			  			}
			  		})
			  });
		   
});

}