/**
 * 
 */
window.onload=function(){

layui.use(['form', 'layer'], function(){  // 如果只加载一个组件，可以不填数组。如：layui.use('form')
		  var form = layui.form() // 获取form组件
		  ,layer = layui.layer; // 获取layer组件
		  
		  // 监听提交按钮
		  form.on('submit(register)', function(){
			  layer.open({
			      type: 2,
			      title: '注册信息。',
			      shadeClose: true,
			      shade: false,
			      maxmin: true, //开启最大化最小化按钮
			      area: ['450px', '550px'],
			      content:'http://localhost/Login/register'
			    });
		  });
	
});
}