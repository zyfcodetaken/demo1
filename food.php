﻿<?php
require_once 'include.php';
$id=$_POST['id'];
$news=getOneFoods();
if(!$news){
	alertMes("不好意思，网站维护中!!!", "http://www.imooc.com");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>美食制作</title>
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
								<i class="fa fa-phone" aria-hidden="true"></i> +021-3456-789
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
											<a href="shop-cart.html" class="btn btn-default">View Cart</a>
											<a href="shop-checkout.html" class="btn btn-default ml-5">checkout</a>
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
								<h1>美食制作</h1>
								<div class="breadcrumps-border"></div>
								<ul>
									<li> <a href="index.php"> 主页 </a> /</li>
									<li> <a href="shop.php"> 商城</a></li>
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
		<section id="shop-single-product" class="ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="product-single-content">
							<div class="row">
								<div class="col-md-5 col-sm-5">
									<div class="product-image">
										<img class="img-responsive" src="assets/images/products/product-single-1.jpg" alt="">
									</div>
								</div>
								<div class="col-md-7 col-sm-7">
									<div class="product-content-right">
										<h3>烧烤玉米</h3>
										
										
										<h5>主要食材</h5>
										
										<p>
											玉米，玉米，玉米										</p>
									</div>
									
									<div class="product-quantity">
										<ul>
											<li>
												<a href="shop.php" class="btn cart-button">购买食材</a>
											</li>
											
											
										</ul>
									</div>
								</div>
							</div>
							
							
							
						</div>
						
						<!-- Product Row Two -->
						<div class="row pt-50">
							<div class="col-md-12">
								<div class="tab-horizontal">
									

									<!-- Tab panes -->
									<div class="tab-content product-tab-content">
										<div class="tab-pane fade in active" id="eightteen">	
											<P>
												烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤烤
											</P>
										</div>
										
												
												
						
										
										<div class="tab-pane fade" id="nineteen">
											<div class="">
												
												<div class="comment-holder">
													<ul class="media-list comment-list">
														<li class="media single-authors-content pt-40 pb-30"> 
															<div class="media-left"> 
																<a href="#"> 
																	<img class="media-object" src="assets/images/blog/author-1.jpg" alt=""> 
																</a> 
																<h5 class="media-heading">Jona Doe</h5> 
																<p>Customer</p>
															</div> 
															<div class="media-body"> 
																<i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
																<p>
																	Duis autem vel eum irure dolor n hendrer it invul uputate velt esse molestie <br>
																	conseq uat. Duis suautem vel eupm irure dolor in hendrerit.vel eum irure d <br>
																	olor n hendrer it invul uputate velt esse 
																</p>
																<a href="#leave-comment"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a>
															</div> 
														</li>
														
														<li class="media single-authors-content pt-25 pb-30"> 
															<div class="media-left"> 
																<a href="#"> 
																	<img class="media-object" src="assets/images/blog/author-2.jpg" alt=""> 
																</a> 
																<h5 class="media-heading">John Doe</h5> 
																<p>Customer</p>
															</div> 
															<div class="media-body"> 
																<i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
																<p>
																	Duis autem vel eum irure dolor n hendrer it invul uputate velt esse molestie <br>
																	conseq uat. Duis suautem vel eupm irure dolor in hendrerit.vel eum irure d <br>
																	olor n hendrer it invul uputate velt esse 
																</p>
																<a href="#leave-comment"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a>
															</div> 
														</li>
													</ul>
												</div>
												
												<div id="leave-comment" class="page-left-header pt-60">
													<h5>Your review</h5>
													
													<div class="form-group">
														<label class="pt-40">Your Rating :</label>
														<i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
													</div>
												</div>
												
												<div class="">
																
													<!-- Post Form -->                            
													<form class="form reply-form pt-25">
														<div class="clearfix">
															<div id="contact_message"></div>
															
															
															<div class="col-xs-12">
																<!-- Message -->
																<div class="form-group">
																	<textarea rows="8" class="form-control organix-reply-form" placeholder="Message"></textarea>
																</div>
																
															</div>
															
															<div class="col-xs-6">
																<!-- Name -->
																<div class="form-group">
																	<input type="text" class="form-control organix-reply-form" placeholder="Name*" pattern=".{2,100}" required>
																</div>
															</div>
															<div class="col-xs-6">
																<!-- Email -->
																<div class="form-group">
																	<input type="email" class="form-control organix-reply-form" placeholder="Email*"  required>
																</div>
															</div>
															
															
														</div>
														
														<div class="col-xs-12">
															<!-- Send Button -->
															<button class="btn btn-default">Submit</button>
														</div>
														
														
													</form>
												</div>
										</div>
										</div>
									</div>
								</div>
							</div>
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
							<p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
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
			
			
	</body>
</html>

