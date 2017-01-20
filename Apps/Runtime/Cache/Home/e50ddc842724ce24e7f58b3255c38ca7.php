<?php if (!defined('THINK_PATH')) exit();?><html>
<body>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/Public/home/css/login.css" />
<link rel="stylesheet" type="text/css" href="/Public/plu/layui/css/layui.css" />
<!-- 引入layui.js -->
<script src="/Public/admin/js/jquery-1.11.1.js"></script>
<script type="text/javascript" src='/Public/plu/layui/layui.js'></script>
<script type="text/javascript" src='/Public/home/js/login.js'></script>

</head>
<div class='login layui-form layui-form-pane'><!-- 这个layui-form 用来表明这个div包着的都是表单元素，比如单选框、复选框等样式，一定要有这个class包着，才能正常显示 -->
<h2>Welcome to myBlog</h2>
 <dl>
	<dd>
		<div class="layui-form-item">
    		<label class="layui-form-label">用户名</label>
   			 <div class="layui-input-inline">
    		  <input type="text" name="user" lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
    		</div>
  		</div>
	</dd> 
	<dd>
		<div class="layui-form-item">
    		<label class="layui-form-label">密码</label>
   			 <div class="layui-input-inline">
    		  <input type="text" name="pwd" lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
    		</div>
  		</div>
	</dd> 
	<dd>
	<!-- 单选框写好input之后，除了上面div中 提到的 layui-form 这个class 之外 还需要模块驱动，才能在网页上正常显示，js模块驱动在下面js的部分会说明 -->
		<div class="layui-form-item">
   			 <label class="layui-form-label">验证码</label>
   			 <div class="layui-input-inline">
     		 <input type="text" name="yzm" lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input">
    		 </div>
  		</div>
	</dd>
	<dd>
		<div class="layui-form-item">
		    <div class="layui-input-block">
		      <div>
		      <span id="reg" style="padding-left:20px;cursor:pointer;" lay-submit lay-filter="register">马上注册？</span>
		      <button class="layui-btn" lay-submit lay-filter="index">立即登录</button>
		    </div>
	    </div>
	</dd>
 </dl>

 

</div>

</body>
</html>