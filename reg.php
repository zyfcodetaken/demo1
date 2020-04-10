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
<title>注册</title>
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
	<div class="regBox">
	<div class="login_cont">
	<form method="post" enctype="multipart/form-data" action="doAction.php?act=reg" >
		<ul class="login">
			<li><span class="reg_item"><i>*</i>用户名：</span><div class="input_item"><input type="text"  name="username"  placeholder="请输入用户名" class="login_input user_icon" required="required"></div></li>
			<li><span class="reg_item"><i>*</i>密码：</span><div class="input_item"><input type="password"  name="password"   class="login_input user_icon" required="required"></div></li>
			<li><span class="reg_item"><i>*</i>邮箱：</span><div class="input_item"><input type="email" name="email" placeholder="请输入合法邮箱" class="login_input user_icon"required="required"></div></li>
			<li><span class="reg_item"><i>*</i>性别：</span><div class="input_item">
			<input type="radio"  name="sex" value="1"> 男
			<input type="radio"  checked="checked" name="sex" value="2" > 女
			<input type="radio"  name="sex" value="3" > 保密
			</div></li>
			<li><span class="reg_item"><i>*</i>头像：</span><div class="input_item"><input type="file"  name="myFace" ></div></li>
			<li class="autoLogin"><input type="checkbox" id="t1" class="checked"><label for="t1">我同意什么什么条款</label></li>
			<li class=" register"><button style="border:none;width:266px;height:35px;outline:none;background-color:white"><img src="images/reg.jpg" value="注册" alt="" /></button></li>
		</ul>
		</form>
	</div>
</div>
</div></nav></div>
<div class="hr_25"></div>
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
