/**
 * 
 */
window.onload=function(){

layui.use(['form', 'layer'], function(){  // 如果只加载一个组件，可以不填数组。如：layui.use('form')
		  var form = layui.form() // 获取form组件
		  ,layer = layui.layer; // 获取layer组件
		  
		  // 监听注册提交按钮
		  form.on('submit(register)', function(){
			  layer.open({
			      type: 2,
			      title: '注册信息',
			      shadeClose: true,
			      shade: false,
			      maxmin: false, //开启最大化最小化按钮
			      scrollbar: false,
			      resize: false,
			      area: ['450px', '370px'],
			      content:'http://localhost/Login/register'
			    });
		  });
		  
		  //verify 不需要放在按钮点击事件里面，当你去点击按钮的时候会事先去判断这个verify这个中的验证 
		  form.verify({
				//用户时验证
			username : function(value) {
				if (value.length == 0) {
					return '用户名不得为空';
				}
				if (!new RegExp("^[a-zA-Z0-9_\u4e00-\u9fa5\\s·]+$")
						.test(value)) {
					return '用户名不能有特殊字符';
				}
				if (/(^\_)|(\__)|(\_+$)/.test(value)) {
					return '用户名首尾不能出现下划线\'_\'';
				}
				if (/^\d+\d+\d$/.test(value)) {
					return '用户名不能全为数字';
				}
				if (value.length < 2 || value.length > 20) {
					return '用户名不得小于2位或者用户名不得大于20位';
				}
			}
			// 密码时验证
			,
			password : function(value) {
				if (value.length == 0) {
					return '密码不得为空';
				}
				if (!(/^[\S]{6,12}$/.test(value))) {
					return '密码必须6到12位，且不能出现空格';
				}
			}
			// 验证码时验证
			,
			yzm : function(value) {
				if (!(value.length == 4)) {
					return '验证码必须为4位';
				}
			}
		});	  
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
					  			window.location.href="http://localhost/index";
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
