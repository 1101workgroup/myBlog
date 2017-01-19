<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/Public/css/login.css" />
<link rel="stylesheet" type="text/css" href="/Public/plu/layui/css/layui.css" />
<!-- 引入layui.js -->
<script type="text/javascript" src='/Public/plu/layui/layui.js'></script>
<style type="text/css">
	.register-wrap{
		width:500px;
		border:1px solid black;
		margin:auto;
	}
</style>
</head>
<!-- 以做一个用户登录的框为例子 -->

<!-- 首先最外面有一个div，作为整个注册页的框,这个框不需要用layui的样式，自己写一个class,控制这个div的高度、宽度、和所在的位置等等 -->
<div class='register-wrap layui-form'><!-- 这个layui-form 用来表明这个div包着的都是表单元素，比如单选框、复选框等样式，一定要有这个class包着，才能正常显示 -->

 <dl>
	<dd>
		<div class="layui-form-item"><!--layui-form-item代表一个input组的样式，input组包括一个名称，一个input类型  -->
	    		<label class="layui-form-label">用户名</label><!-- input组中的名称，用label包起来，样式为layui-form-laberl -->
		    <div class="layui-input-block"><!-- input组中的input，用div包起来，样式为layui-input-block -->
		    <!-- 第一个是用户名填写，用到layui中的输入框样式
				type为input类型，text为文本输入框
				name为这个input的键，提交到后台通过这个键获取vlaue中的值，因为是用户名，所以设为user
				required为注册浏览器所规定的必填字段，layui框架中必须的字段，照着写就行了
				lay-verify注册form组件需要验证的类型，layui框架中必须的字段，照着写就行了，参数的选择可以看文档
				placeholder就是再用户输入前，先有一个灰色的提示语，用来提高界面的友好度，低版本IE浏览器不认这个属性
				autocomplete 还不知道干嘛的，先不管他
				class中的layui-input就是layui中给input提供的样式，可以在界面中按f12查看他定义的样式是什么的，也可以去源文件中看
			 -->
		   		<input type="text" name="user" required lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
		    </div>
	  	</div>
	</dd> 
	<dd>
		<div class="layui-form-item">
	    		<label class="layui-form-label">密码</label>
		    <div class="layui-input-block">
		   		<input type="text" name="pwd" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
		    </div>
	  	</div>
	</dd> 
	<dd>
	<!-- 单选框写好input之后，除了上面div中 提到的 layui-form 这个class 之外 还需要模块驱动，才能在网页上正常显示，js模块驱动在下面js的部分会说明 -->
		<div class="layui-form-item">
	    		<label class="layui-form-label">性别</label>
				<div class="layui-input-block">
				     <input type="radio" name="sex" value="男" title="男">
				     <input type="radio" name="sex" value="女" title="女" checked>
		   		</div>
	  	</div>
	</dd>
	<dd>
		<div class="layui-form-item">
		    <div class="layui-input-block">
		      <button class="layui-btn" lay-submit lay-filter="*">立即提交</button>
		      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
	    </div>
	</dd>
 </dl>

 

</div>

<script>
//这个js控制所有的form操作，包括样式显示，也必须有这个js
layui.use('form', function(){
  var form = layui.form();
  
  //各种基于事件的操作，下面会有进一步介绍
});
</script>


<body>

	<div id="login">
		<h2>Welcome Myblog</h2>
		<form method="post" name="login" action="login.php?action=login">
			<dl>
				<dt> </dt>
				<dd>用户名：<input type="text" name="username" class="text" /></dd>
				<dd>密&emsp;码：<input type="password" name="password" class="text" /></dd>
				<dd>验证码：<input type="text" name="yzm" class="text yzm" /><img src="code.php" id="code"/></dd>
				<dd><input type="button" class="reset"  value="注册?" id="zhuce"/>&nbsp;<input type="submit" class="submit" name="submit" value="登录" /></dd>
			</dl>
		</form>
	</div>
</body>
</html>