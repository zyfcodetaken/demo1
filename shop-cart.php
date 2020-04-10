<?php 
require_once 'include.php';
$id=$_SESSION['loginFlag'];
if(!$id){
	alertMes("请先登录","login.php");
}
$rows=getAllCartById($id);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>购物车</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta name="description" content="">
		<meta name="author" content="">
				
		
		<!-- Main css -->
		<link href="assets/css/main-style.css" rel="stylesheet" >
		
	</head>

	<body> 

		
		<!-- Navigation Area
			===================================== -->
			<div class="logo-section">
				<div class="container">
					<div class="logo-wrap">
						<div class="logo">
							<a href="index.html"><img class="" src="assets/images/logo.png" alt=""></a>
						</div>
						
						<div class="widget_product_search">
				<span>欢迎您</span><?php echo $_SESSION['username'];?>
				<a href="doAction.php?act=userOut">[退出]</a>
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
							<li class="menu-child-list"><a href="index.php">主页</a></li>
						
						<li><a href="shop.php">商城</a></li>
						<li><a href="shop-cart.php">购物车</a></li>
						<li class="menu-child-list"><a href="contact-us.php">联系我们</a></li>
						</ul>
					</div>
					
					<div class="pull-right nav-right-section">
						<ul class=" navbar-mini-cart-wrapper">
							<li>
								<i class="fa fa-phone" aria-hidden="true"></i>010-58625819
							</li>
							<li>
								<a href="#" class="navbar-mini-cart-btn">
									<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
									<span class="item-count">21</span>
								</a>
								<ul class="navbar-mini-cart">
									<li class="item">
										<div class="product-img">
											<img src="assets/images/products/small-1.jpg" alt="">
										</div>
										<div class="product-details">
											<h6>Name of the product</h6>
											<p>$255.5</p>
											<a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
										</div>
									</li>
									<li class="item">
										<div class="product-img">
											<img src="assets/images/products/small-2.jpg" alt="">
										</div>
										<div class="product-details">
											<h6>Name of the product</h6>
											<p>$155.5</p>
											<a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
										</div>
									</li>
									<li class="minicart-price-total">
										<div class="price-total">
											<span class="label-price-total">Subtotal</span>
											<div class="price-total-w">
												<span>$255.5</span>
											</div>
										</div>

										<div class="checkout-btn">
											<a href="shop.php" class="btn btn-default">商城</a>
											<a href="shop-cart.php" class="btn btn-default ml-5">购物车</a>
										</div>
									</li>
								</ul>
							</li>
						</ul> <!-- end  navbar-mini-cart -->
					</div>
				</div>

			</nav>
		</div>
		
		<div id="page_wrapper"></div>
		
		<!-- Common Header Area
        ===================================== -->
		<section>
			<div class="breadcrumps-back">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="breadcrumps-heading">
								<h1>购物车</h1>
								<div class="breadcrumps-border"></div>
								<ul>
									<li> <a href="index.php"> 主页 </a> /</li>
									<li> <a href="shop.php"> 商城 </a></li>
									<li></li>
								</ul>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Page Content Area
        ===================================== -->
		<section id="shop-col-3" class="ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="cart-list text-center">
							<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>图片</th>
								<th>产品名称</th>
								<th>价格</th>
								<th>结算</th>
								<th>删除</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($rows as $row):?>
							<tr class="cart_item">
							<td class="cart-detail">
							<div class="cart-image">
							<img class="img-responsive" src="image_50/<?php echo $row['albumPath'];?>">
							</div>
							</td>
							<td class="cart-detail">
								<div class="cart-name">
								<h5><?php echo $row['pName'];?></h5>
								</div>
							</td>
							<td class="cart-detail">
								<div class="cart-amount">
								<h6><?php echo $row['mPrice'];?></h6>
								</div>
							</td>
							
							<td class="cart-price" width="15%">
								<div class="cart-amount">
								<input type="button" value="购买" class="buy" onclick="buypro(<?php echo $row['id'];?>)">
								</div>
							</td>
							<td class="product-remove" width="15%">
								<input type="button" value="删除" class="buy" onclick="delcart(<?php echo $row['id'];?>)">
								</td>
							</tr>
								<?php endforeach;?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
			
			</div>
		</section>
		<!-- End Section Image Content  -->
		
		<!-- Footer Area
        ===================================== -->
		<footer class="footer-back">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-12 foot-left">
					</div>
					<div class="foot-right col-md-9">
						<div class="row">
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="footer-widget">
								<img class="footer-logo" src="assets/images/logo.png" alt="">
								
								<p>Duis autem vel eum irure dolor vul uputate velt esse molestie cie suautem vel eupm irure dolo, ulputate velit esse molestie. Dui autem vel eum irure dolorytr ulputate velit.</p>
								
								<address>
									House: 1/a, 23 Gray Street, NY, USA<br>
									+021-3456-789<br>
									<a href="mailto:#">support@organixmail.com</a>
								</address>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="footer-widget">
								<h3>Insta Feed</h3>
								
								<div id="instagram-feed" data-instagram-username="vossen_inc"><ul></ul></div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="footer-widget">
								<h3>Working Hour</h3>
								
								<table class="table table-inverse">
									<tbody>
										<tr>
											<td class="working-day">Monday</td>
											<td class="working-hour">09.00- 18.00</td>
										</tr>
										<tr>
											<td class="working-day">Tuesday</td>
											<td class="working-hour">09.00- 18.00</td>
										</tr>
										<tr>
											<td class="working-day">wednesday</td>
											<td class="working-hour">09.00- 18.00</td>
										</tr>
										<tr>
											<td class="working-day">Thursday</td>
											<td class="working-hour">09.00- 18.00</td>
										</tr>
										<tr>
											<td class="working-day">Friday</td>
											<td class="working-hour">09.00- 18.00</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="footer-copyright-content text-center ptb-60">
							<p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/"></a></p>
								</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Section Image Content  -->
		
		
		<!-- ============ Js Files ============ -->
		    <!-- Placed at the end of the document so the pages load faster -->
			
			<!-- Core js -->
			<script src="assets/js/jquery-3.1.1.min.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>	
			
			<script src="assets/js/menu.js"></script>	
			<script src="assets/js/jquery.sticky.js"></script>	
			<script src="assets/js/owl.carousel.min.js"></script>	
			<script src="assets/js/appear.js"></script>	
			<script src="assets/js/jquery.dcjqaccordion.min.js"></script>	
			<!--<script src="assets/js/instagram.js"></script>-->	
			<!-- Google Map -->
			<script type="text/javascript" src="http://ditu.google.cn/maps/api/js?key=AIzaSyAvpnlHRidMIU374bKM5-sx8ruc01OvDjI"></script>
			<script src="assets/js/gmap3.min.js"></script>	
			
			<!-- Custom Script -->		
			<script src="assets/js/main.js"></script>	
			<script type="text/javascript">
				function buypro(id){
					window.location='money.php?id='+id;
				}
				function delcart(id){
					window.location='delcart.php?id='+id;
				}
			</script>
			
	</body>
</html>

