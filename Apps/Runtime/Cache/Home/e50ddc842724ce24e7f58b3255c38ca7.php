<?php if (!defined('THINK_PATH')) exit();?><html>
<body>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/Public/home/css/login.css" />
<link rel="stylesheet" type="text/css" href="/Public/plu/layui/css/layui.css" />
<!-- 引入layui.js -->
<script src="/Public/admin/js/jquery-1.11.1.js"></script>
<script type="text/javascript" src='/Public/plu/layui/layui.js'></script>


</head>
<div class='login layui-form layui-form-pane'><!-- 这个layui-form 用来表明这个div包着的都是表单元素，比如单选框、复选框等样式，一定要有这个class包着，才能正常显示 -->
<h2>Welcome to myBlog</h2>
 <dl>
	<dd>
		<div class="layui-form-item">
    		<label class="layui-form-label">用户名</label>
   			 <div class="layui-input-inline">
    		  <input type="text" name="user" lay-verify="username" placeholder="请输入用户名" autocomplete="off" class="layui-input">
    		</div>
  		</div>
	</dd> 
	<dd>
		<div class="layui-form-item">
    		<label class="layui-form-label">密码</label>
   			 <div class="layui-input-inline">
    		  <input type="password" name="pwd" lay-verify="password" placeholder="请输入密码" autocomplete="off" class="layui-input">
    		</div>
  		</div>
	</dd> 
	<dd>
	<!-- 单选框写好input之后，除了上面div中 提到的 layui-form 这个class 之外 还需要模块驱动，才能在网页上正常显示，js模块驱动在下面js的部分会说明 -->
		<!-- <div class="layui-form-item">
   			 <label class="layui-form-label">验证码</label>
   			 <div class="layui-input-inline">
     		 <input type="text" name="yzm" lay-verify="yzm" placeholder="请输入验证码" autocomplete="off" class="layui-input">
    		 </div>
  		</div> -->
	</dd>
	<dd>
		<div class="layui-form-item">
		    <div class="layui-input-block">
		      <div>
		      <span id="reg" style="padding-left:20px;cursor:pointer;" onclick='register()'>马上注册？</span>
		      <span class="layui-btn" lay-submit lay-filter="index">立即登录</span>
		    </div>
	    </div>
	</dd>
 </dl>

 

</div>
<script type="text/javascript">
layui.use(['form'], function(){  // 如果只加载一个组件，可以不填数组。如：layui.use('form')
	  var form = layui.form(); // 获取form组件
	  form.on('submit(index)', function(data){
		  $.ajax({
	  			type:'post',//以什么样的类型去传，post或者get
	  			url:'/index.php/Home/Login/do_login',//传值目标地址
	  			data:JSON.stringify(data.field),
	  			success:function(data){
	  				switch(data['code']){
				  	case '1':
				  		layer.alert(data['message'], {icon: 1},function() {
				  			parent.location.reload();
						});
				  		break;
				  	case '0':
				  		layer.alert(data['message'], {icon: 2},function() {
							location.reload();
						});
				  }
	  			}
	  		})
		 //这个里面写登录的操作，可参考/apps/admin/view/login/index.html中的js ajax回调。
	  });
});
function register(){
	location.href='/index.php/Login/register';
}
</script>
</body>
</html>