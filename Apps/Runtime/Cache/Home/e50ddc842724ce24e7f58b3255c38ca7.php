<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/Public/css/login.css" />

</head>

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