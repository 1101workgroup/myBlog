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
		  // 监听登录提交按钮
		  form.on('submit(index)', function(){
			  form.verify({
					//注册用户时验证
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
				// 注册密码时验证
				,
				password : function(value) {
					if (value.length == 0) {
						return '密码不得为空';
					}
					if (!(/^[\S]{6,12}$/.test(value))) {
						return '密码必须6到12位，且不能出现空格';
					}
				}
				// 注册邮箱时验证
				,
				yzm : function(value) {
					if (!(value.length == 4)) {
						return '验证码必须为4位';
					}
				}
			});
		  });
		  
	
});
     
}