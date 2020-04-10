<?php 
	require_once 'include.php';
	$rows=getAllPros();
	$news=getProFoods();
	if (!($rows && is_array($rows))) {
		alertMes('不好意思，网站维护中!!!',"http://baidu.com");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>主页</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Main css -->
<link href="assets/css/main-style.css" rel="stylesheet">
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
						<li class="menu-child-list"><a href="../yueba/3d/index.php">首页</a></li>
						
						<li><a href="shop.php">商城</a></li>
						<li><a href="shop-cart.php">购物车</a></li>
						<li class="menu-child-list"><a href="contact-us.php">联系我们</a></li>
					</ul>
				</div>
				
				<div class="pull-right nav-right-section">
					<ul class=" navbar-mini-cart-wrapper">
						<li>
							<i class="fa fa-phone" aria-hidden="true"></i> 010-58625819
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
</header>
<div id="page_wrapper"></div>

<!-- Slider Area
===================================== -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-10">
				<div class="main-slider owl-carousel owl-theme mt-30">
					<div class="item">
						<img class="img-responsive" src="assets/images/slider/slider-1.jpg" alt="">
					</div>
					
					<div class="item">
						<img class="img-responsive" src="assets/images/slider/slider-1.jpg" alt="">
					</div>
					
					<div class="item">
						<img class="img-responsive" src="assets/images/slider/slider-1.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Navigation Area
===================================== -->


<!-- Navigation Area
===================================== -->

<section id="featured-product" class="ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="organix-header text-center">
					<h1>主要有机产品</h1>
					<div class="heading-border"></div>
					<p>
						下面为您展示的是我们奥莱弗公司的有机产品
					</p>
				</div>
			</div>
		</div>
		
		<div class="row">
			<?php foreach($rows as $row):
				$proImg=getProImgById($row['id']);?>
			<div class="col-md-3 col-sm-6 col-xs-6" >
				<div class="product-style-1 text-center">
					<img class="img-responsive" src="image_350/<?php echo $proImg['albumPath'];?>" alt="">
					
					<div class="product-detail-content">
						<h6><?php echo $row['pName']?></h6>
						<div class="product-rating-with-border">
							<div class="background-border"></div>
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							</ul>
						</div>
						<h5><?php echo $row['mPrice']; ?></h5>
						<a class="btn cart-button" href="shop.php"> 购买 </a>
					</div>
				</div>
			</div>	
			<?php endforeach;?>					
		</div>
		
	</div>
</section>

<!-- End Section Image Content  -->





<!-- Latest News Area
===================================== -->
<section class="background-grey ptb-80">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="small-header">
					<h2>为什么选择我们</h2>
				</div>
				<div class="organix-accordion pt-40">
					<div class="panel-group" id="accordion1">
						<!-- Tab One -->
						<div class="panel panel-default">
							<div class="panel-heading panel-active">
								<a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
									<h4 class="panel-title">
										<span> <i class="fa fa-minus"></i> </span>
										Why choose us                       
									</h4>
								</a>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<P>
										Duis autem vel eum irure dolor n hendrer it in  vul uputate velt <br>
										esse molestie conseq uat Duis suautemvel eupm irure dolorin he <br>
										ndrerit in vulputate velit esse molestie..Duis  aute. Duis autem vel <br>
										eum irure dolor n hendrer it in  vul uputate . <br>
									</P>
								</div>
								
							</div>
						</div>
						
						<!-- Tab Two -->
						<div class="panel panel-default">
							<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo">
								<h4 class="panel-title">
										<span> <i class="fa fa-plus"></i> </span>
										OUR MISSION  
								</h4>
									</a>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<P>
										Duis autem vel eum irure dolor n hendrer it in  vul uputate velt <br>
										esse molestie conseq uat Duis suautemvel eupm irure dolorin he <br>
										ndrerit in vulputate velit esse molestie..Duis  aute. Duis autem vel <br>
										eum irure dolor n hendrer it in  vul uputate . <br>
									</P>
								</div>
								
							</div>
						</div>
						
						
						<!-- Tab Three -->
						<div class="panel panel-default">
							<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree">
								<h4 class="panel-title">
										<span> <i class="fa fa-plus indicator"></i> </span>
										OUR VISION    
								</h4>
									</a>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
									<P>
										Duis autem vel eum irure dolor n hendrer it in  vul uputate velt <br>
										esse molestie conseq uat Duis suautemvel eupm irure dolorin he <br>
										ndrerit in vulputate velit esse molestie..Duis  aute. Duis autem vel <br>
										eum irure dolor n hendrer it in  vul uputate . <br>
									</P>
								</div>
								
							</div>
						</div>
						
						<!-- Tab Four -->
						<div class="panel panel-default">
							<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion1" href="#collapseFour">
								<h4 class="panel-title">
										<span> <i class="fa fa-plus indicator"></i> </span>
										OUR GOAL  
								</h4>
									</a>
							</div>
							<div id="collapseFour" class="panel-collapse collapse">
								<div class="panel-body">
									<P>
										Duis autem vel eum irure dolor n hendrer it in  vul uputate velt <br>
										esse molestie conseq uat Duis suautemvel eupm irure dolorin he <br>
										ndrerit in vulputate velit esse molestie..Duis  aute. Duis autem vel <br>
										eum irure dolor n hendrer it in  vul uputate . <br>
									</P>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="choose-us">
					<img class="img-responsive pt-70" src="assets/images/choose-right.jpg" alt="">
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
<script src="assets/js/jquery.dcjqaccordion.min.js"></script>	
<!--<script src="assets/js/instagram.js"></script>-->	
<script src="assets/js/appear.js"></script>	

<!-- Google Map -->
<script type="text/javascript" src="http://ditu.google.cn/maps/api/js?key=AIzaSyAvpnlHRidMIU374bKM5-sx8ruc01OvDjI"></script>
<script src="assets/js/gmap3.min.js"></script>

<!-- Custom Script -->		
<script src="assets/js/main.js"></script>	

<script>
	
</script>
</body>
</html>