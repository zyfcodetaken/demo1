<?php 
require_once 'include.php';
$cates=getAllcate();
if(!($cates && is_array($cates))){
	alertMes("不好意思，网站维护中!!!", "http://www.imooc.com");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>登录</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Main css -->
<link href="assets/css/main-style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="styles/reset.css">
<link type="text/css" rel="stylesheet" href="styles/main.css">
</head>

<body>

<header>
<div class="nav-top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
						
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="top-bar-right">
						<ul>
						
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Navigation Area
	===================================== -->
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
	
	<!-- Navigation Area
	===================================== -->
	<div class="navbar-sticky">
		<nav class="navbar navbar-index-top shadow">
			
			
			<div class="container header-container">

				<div id="main-menu-wrap"><a href="#" class="menu-trigger"></a></div>
				
				
				<!-- Main Menu -->
				<div id="main-menu" class="main-nav mega_menu_wrapper ">
				
					<ul id="custom-menu" class="main-menu mega_menu">
						<li class="menu-child-list"><a href="index.php">首页</a></li>
						
						<li><a href="shop.php">商城</a></li>
						<li><a href="shop-cart.php">购物车</a></li>
						<li class="menu-child-list"><a href="contact-us.php">联系我们</a></li>
					</ul>
				</div>
				
				<div class="pull-right nav-right-section">
					<ul class=" navbar-mini-cart-wrapper">
						<li>
							<i class="fa fa-phone" aria-hidden="true"></i> +021-3456-789
						</li>
						<li>
							<a href="#" class="navbar-mini-cart-btn">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
								<span class="item-count">21</span>
							</a>
							</li>
							</ul>
							</div>
	<div class="loginBox">
	<div class="login_cont">
	<form method="post" action="doAction.php?act=login" >
		<ul class="login">
			<li class="l_tit">邮箱/用户名/手机号</li>
			<li class="mb_10"><input type="text"  name="username" value="11111" placeholder="请输入用户名" class="login_input user_icon"></li>
			<li class="l_tit" >密码</li>
			<li class="mb_10"><input type="password" name="password" value="1" class="login_input user_icon"></li>
			<li class="autoLogin"><input type="checkbox" id="a1" class="checked"><label for="a1">自动登陆</label></li>
			<li><input type="submit" value="登录" class="login_btn"></li>
		</ul>
		</form>
		<div class="login_partners">
			<ul class="login_list clearfix">
				<li><a href="shop.php">商城</a></li>
				<li><span>|</span></li>
				<li><a href="reg.php">注册</a></li>
			</ul>
		</div>
	</div>
</div>
</div></nav></div>
<div class="container">

<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="footer-copyright-content text-center ptb-60">
					<p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/"></a></p>
				</div>
			</div>
		</div>
</div>
</header>
</body>
</html>
