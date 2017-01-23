/**
 * 
 */
window.onload=function(){

layui.use('form', function(){  // 如果只加载一个组件，可以不填数组。如：layui.use('form')
		  var form = layui.form(); // 获取form组件
		  
		  form.verify({
			//注册用户时验证
			  username: function(value){
				if(value.length==0){
				  return '用户名不得为空';
				}
			    if(!new RegExp("^[a-zA-Z0-9_\u4e00-\u9fa5\\s·]+$").test(value)){
			      return '用户名不能有特殊字符';
			    }
			    if(/(^\_)|(\__)|(\_+$)/.test(value)){
			      return '用户名首尾不能出现下划线\'_\'';
			    }
			    if(/^\d+\d+\d$/.test(value)){
			      return '用户名不能全为数字';
			    }
			    if(value.length<2||value.length>20){
				  return '用户名不得小于2位或者用户名不得大于20位';
				}
			  }
			  //注册密码时验证
			  ,password:function(value){
				if(value.length==0){
				  return '密码不得为空';
				}
				if(!(/^[\S]{6,12}$/.test(value))){
				  return '密码必须6到12位，且不能出现空格';
				 }
			  }
			//注册邮箱时验证
			  ,email:function(value){
				if(value.length==0){
				  return '邮箱不得为空';
				}
				if(!/^[\w-\.]+@[\w-\.]+(\.\w+)+$/.test(value)){
				  return '邮箱地址格式不正确!';
				 }
			  }
			}); 
		  form.on('submit(register-btn)', function(data){
			  		$.ajax({
			  			type:'post',//以什么样的类型去传，post或者get
			  			url:'/Login/do_register',//传值目标地址
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