<!DOCTYPE html>
<html lang="en">
<head>
<title>Bastra</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bastra">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('front/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/responsive.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('front/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/categories_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/categories_responsive.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('front/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/contact_responsive.css')}}">

<link rel="icon" type="image/x-icon" href="/front/images/clothes-hanger.png">

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

	{{-- Hamburger menu --}}
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