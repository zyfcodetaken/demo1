<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆</title>
<link type="text/css" rel="stylesheet" href="styles/reset.css">
<link type="text/css" rel="stylesheet" href="styles/main.css">
<link href="assets/css/main-style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="styles/reset.css">
<link type="text/css" rel="stylesheet" href="styles/main.css">
<!--[if IE 6]>
<script type="text/javascript" src="../js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="../js/ie6Fixpng.js"></script>
<![endif]-->
</head>

<body>
	<div class="logo-section">
		<div class="container">
			<div class="logo-wrap">
				<div class="logo">
					<a href="index.php"><img class="" src="assets/images/logo.png" alt=""></a>
				</div>	
			<div class="widget_product_search">
					<?php if($_SESSION['loginFlag']):?>
				<span>欢迎您</span><?php echo $_SESSION['username'];?>
				<a href="doAction.php?act=userOut">[退出]</a>
				<?php else:?>
				<a href="login.php">[登录]</a><a href="reg.php">[免费注册]</a>
				<?php endif;?>
				</div>
			</div>
		</div>
	</div>
	

<div class="loginBox">
	<div class="login_cont">
	<form action="doLogin.php" method="post">
			<ul class="login">
				<li class="l_tit">管理员帐号</li>
				<li class="mb_10"><input type="text"  name="username" placeholder="请输入管理员帐号"class="login_input user_icon"></li>
				<li class="l_tit">密码</li>
				<li class="mb_10"><input type="password"  name="password" class="login_input password_icon"></li>
				<li class="l_tit">验证码</li>
				<li class="mb_10"><input type="text"  name="verify" class="login_input password_icon"></li>
				<img src="getVerify.php" alt="" />
				<li class="autoLogin"><input type="checkbox" id="a1" class="checked" name="autoFlag" value="1"><label for="a1">自动登陆(一周内自动登陆)</label></li>
				<li><input type="submit" value="登&nbsp;录" class="login_btn"></li>
			</ul>
		</form>
	</div>
</div>

<div class="hr_25"></div>
<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="footer-copyright-content text-center ptb-60">
					<p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/"></a></p>
				</div>
			</div>
		</div>
</div>
</body>
</html>
