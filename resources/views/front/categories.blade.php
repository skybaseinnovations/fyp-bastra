<!DOCTYPE html>
<html lang="en">
<head>
<title> Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bastra">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('front/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/categories_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/categories_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="icon" type="image/x-icon" href="/front/images/clothes-hanger.png">

<link href="{{asset('front/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans:ital,wght@0,400;1,300&family=Roboto:wght@500&family=Source+Code+Pro:ital@1&display=swap" rel="stylesheet">
</head>



<body>

	<div class="super_container">
	
		<!-- Header -->
	
		<header class="header trans_300">
	
			<!-- Top Navigation -->
	
			
	
			<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">Bas<span>tra</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="{{route('index')}}">home</a></li>
								<li class="account">
									<a href="{{route('category')}}">Category
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="{{route('category')}}">Men</a></li>
										<li><a href="{{route('category')}}">Women</a></li>
										<li><a href="{{route('category')}}">Accessories</a></li>
									</ul>
								</li>
								<li><a href="{{route('contact')}}">contact</a></li>
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
									</ul>
								</li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	
		</header>
	
	
		<div class="fs_menu_overlay"></div>
		<div class="hamburger_menu">
			<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="hamburger_menu_content text-right">
				<ul class="menu_top_nav">
					<li class="menu_item has-children">
						<a href="#">
							usd
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#">cad</a></li>
							<li><a href="#">aud</a></li>
							<li><a href="#">eur</a></li>
							<li><a href="#">gbp</a></li>
						</ul>
					</li>
					<li class="menu_item has-children">
						<a href="#">
							English
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#">French</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">German</a></li>
							<li><a href="#">Spanish</a></li>
						</ul>
					</li>
					<li class="menu_item has-children">
						<a href="#">
							My Account
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
							<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
						</ul>
					</li>
					<li class="menu_item"><a href="{{route('index')}}">home</a></li>
					<li class="menu_item"><a href="{{route('category')}}">Category</a></li>
					
					<li class="menu_item"><a href="{{route('contact')}}">contact</a></li>
				</ul>
			</div>
		</div>
	
	
		<div class="container product_section_container">
			<div class="row">
				<div class="col product_section clearfix">
	
					<!-- Breadcrumbs -->
	
					<div class="breadcrumbs d-flex flex-row align-items-center">	
					</div>
					<!-- Sidebar -->
	
					<div class="sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">
								<h5>Product Category</h5>
							</div>
							<ul class="sidebar_categories">
								<li><a href="#men">Men</a></li>
								<li><a href="#women">Women</a></li>
								<li><a href="#accessories">Accessories</a></li>
								{{-- <li><a href="#">New Arrivals</a></li>
								<li><a href="#">Collection</a></li>
								<li><a href="#">Shop</a></li> --}}
							</ul>
						</div>
					</div>
	
					<!-- Main Content -->
	
					<div class="main_content">
	
						<!-- Products -->
	
						<div class="products_iso">
							<div class="row">
								<div class="col" >
	<!-- Product Grid -->
	
			<div class="product-grid">

				<div id="modal">
					<p id="desc" class="modalClassBefore"></p>
				</div>
	                                <div id="accessories">
											<!-- Product 1 -->
											
											<div class="product-item women">
												<div class="product product_filter">
													<div class="product_image">
														<img src="front/images/product_2.png" alt="">
													</div>
													<div class="favorite"></div>
													<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="{{route('description')}}">Coach, accessible luxury and signature logo bag.</a></h6>
														<div class="product_price">$610.00</div>
													</div>
												</div>
												<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
											</div>
											<!-- Product 2 -->
		
		
		
											<!-- Product 3 -->
											<div class="product-item accessories">
												<div class="product discount product_filter">
													<div class="product_image">
														<img src="front/images/product_6.png" alt="">
													</div>
													<div class="favorite favorite_left"></div>
													<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="{{route('description')}}">Carrera, sporty and aviator-style sunglasses with a retro touch.</a></h6>
														<div class="product_price">$520.00</div>
													</div>
												</div>
												<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
											</div>
											
		
											<!-- Product 4 -->
		
											<div class="product-item accessories">
												<div class="product product_filter">
													<div class="product_image">
														<img src="front/images/product_8.png" alt="">
													</div>
													<div class="favorite"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="{{route('description')}}">Longchamp, Functional and stylish Le Pliage bags.</a></h6>
														<div class="product_price">$120.00</div>
													</div>
												</div>
												<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
											</div>
		
											{{-- Product 5 --}}
											<div class="product-item accessories" >
												<div class="product product_filter">
													<div class="product_image">
														<img src="front/images/product_4.png" alt="">
													</div>
													<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"></div>
													<div class="favorite favorite_left"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="{{route('description')}}">Givenchy,blend of modern and edgy designs in handbags.</a></h6>
														<div class="product_price">$410.00</div>
													</div>
												</div>
												<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
											</div>

										</div>
	
										<div id="women">
												<!-- Product 6 -->
												<div class="product-item women" data-name="one">
													<div class="product product_filter">
														<div class="product_image">
															<img src="front/images/product_3.png" alt="">
														</div>
														<div class="favorite"></div>
														<div class="product_info">
															<h6 class="product_name"><a href="{{route('description')}}">Givenchy,luxury and contemporary sweater designs</a></h6>
															<div class="product_price">$120.00</div>
														</div>
													</div>
													<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
												</div>
													<!-- Product 7 -->

												<div class="product-item women" >
													<div class="product product_filter">
														<div class="product_image">
															<img src="front/images/product_7.png" alt="">
														</div>
														<div class="favorite"></div>
														<div class="product_info">
															<h6 class="product_name"><a href="{{route('description')}}">Vince,luxury and contemporary sweater designs</a></h6>
															<div class="product_price">$610.00</div>
														</div>
													</div>
													<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
												</div>
												<!-- Product 8 -->

												

												<div class="product-item women men" >
													<div class="product product_filter">
														<div class="product_image">
															<img src="front/images/product_5.png" alt="">
														</div>
														<div class="favorite"></div>
														<div class="product_info">
															<h6 class="product_name"><a href="{{route('description')}}">Columbus Shoes, wide range of footwear options, from sports shoes to formal shoes</a></h6>
															<div class="product_price">$180.00</div>
														</div>
													</div>
													<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
												</div>
												<!-- Product 9 -->
													<div class="product-item men">
														<div class="product product_filter">
															<div class="product_image">
																<img src="front/images/product_9.png" alt="">
															</div>
															<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"></div>
															<div class="favorite favorite_left"></div>
															<div class="product_info">
																<h6 class="product_name"><a href="{{route('description')}}"></a>Woolrich, mix of classic and contemporary coats with a focus on warmth.</h6>
																<div class="product_price">$410.00</div>
															</div>
														</div>
														<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
													</div>
				
													<!-- Product 10 -->
				
													<div class="product-item men">
														<div class="product product_filter">
															<div class="product_image">
																<img src="front/images/product_10.png" alt="">
															</div>
															<div class="favorite"></div>
															<div class="product_info">
																<h6 class="product_name"><a href="{{route('description')}}">Pryma Headphones, Rose Gold & Grey</a></h6>
																<div class="product_price">$180.00</div>
															</div>
														</div>
														<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
													</div>										
										</div>
											  <div id="men">
												<!-- Product 11 -->
			
												<div class="product-item women men">
													<div class="product product_filter">
														<div class="product_image">
															<img src="front/images/product_5.png" alt="">
														</div>
														<div class="favorite"></div>
														<div class="product_info">
															<h6 class="product_name"><a href="{{route('description')}}">Madewell, Cozy and stylish sweater selections.</a></h6>
															<div class="product_price">$180.00</div>
														</div>
													</div>
													<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
												</div>
			
												<!-- Product 12 -->
												<div class="product-item men" >
													<div class="product discount product_filter">
														<div class="product_image">
															<img src="front/images/product_1.png" alt="">
														</div>
														<div class="favorite favorite_left"></div>
														<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"></div>
														<div class="product_info">
															<h6 class="product_name"><a href="{{route('description')}}">Hollister, casual and laid-back hoodie</a></h6>
															<div class="product_price">$520.00</div>
														</div>
													</div>
													<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
												</div>
												
											<div class="product-item accessories">
												<div class="product discount product_filter">
													<div class="product_image">
														<img src="front/images/product_6.png" alt="">
													</div>
													<div class="favorite favorite_left"></div>
													<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="{{route('description')}}">Tom Ford, bold and elegant sunglasses designs.</a></h6>
														<div class="product_price">$520.00</div>
													</div>
												</div>
												<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
											</div>
											<div class="product-item men" >
												<div class="product discount product_filter">
													<div class="product_image">
														<img src="front/images/product_1.png" alt="">
													</div>
													<div class="favorite favorite_left"></div>
													<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="">Hollister, casual and laid-back hoodie</a></h6>
														<div class="product_price">$520.00</div>
													</div>
												</div>
												<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
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
	
	
			
	
		<!-- Footer -->
	
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
							<ul class="footer_nav">
								<li><a href="#">Blog</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="conta">Contact us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="footer_nav_container">
							<div class="cr">©2018 All Rights Reserverd. Template by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	</div>

<script src="{{asset('front/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('front/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('front/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('front/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('front/plugins/easing/easing.js')}}"></script>
<script src="{{asset('front/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
<script src="{{asset('front/js/categories_custom.js')}}"></script>
<script src="{{asset('front/js/showProductDescription.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
