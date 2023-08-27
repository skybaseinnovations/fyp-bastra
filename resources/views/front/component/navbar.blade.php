<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bastra</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bastra">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('front/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/categories_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/categories_responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/contact_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/contact_responsive.css') }}">

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
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans:ital,wght@0,400;1,300&family=Roboto:wght@500&family=Source+Code+Pro:ital@1&display=swap"
        rel="stylesheet">


    <style>
        .button {
            float: right;
        }

        .navbar_menu .button button:hover {
            color: #fdcfde;
        }

        .navbar_menu button:hover {
            background-color: #fdcfde;
        }
    </style>
</head>

<body>

    <div class="super_container">
        <!-- Header -->
        <header class="header trans_300">
            <!-- Main Navigation -->
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
                                    <li><a href="{{ route('index') }}">home</a></li>
                                    <li class="account">
                                        <a href="{{ route('category') }}">Category
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">
                                            <li><a href="{{ route('category') }}">Men</a></li>
                                            <li><a href="{{ route('category') }}">Women</a></li>
                                            <li><a href="{{ route('category') }}">Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact') }}">contact</a></li>
                                    <div class="button">
                                        @auth
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    style="border-radius: 2rem;border:1px solid white;padding:0.9rem;background-color:#e92556;color:white;"><i
                                                        class="fa fa-user-plus"></i></a>&nbsp;&nbsp;Logout</button>
                                            </form>
                                        @else
                                            <button type="button"
                                                style="border-radius: 2rem;border:1px solid white;padding:0.9rem;background-color:#74c69d;color:ghostwhite;;"><i
                                                    class="fa fa-user"></i></a>&nbsp;&nbsp;Login</button>
                                            <button type="button"
                                                style="border-radius: 2rem;border:1px solid white;padding:0.9rem;background-color:#0096c7;color:white;"><i
                                                    class="fa fa-user-plus"></i></a>&nbsp;&nbsp;Register</button>
                                        @endauth
                                    </div>
                                </ul>

                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
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
										@foreach ($items as $item)
											
										<li><a href="{{ route('productshow',$item->id) }}">{{ $item->name }}</a></li>
										@endforeach
										<li><a href="{{ route('category') }}">Women</a></li>
										<li><a href="#">Accessories</a></li>
									</ul>
								</li>
								<li><a href="{{route('contact')}}">contact</a></li>
								<div class="button">

									<button type="button" style="border-radius: 2rem;border:1px solid white;padding:0.9rem;background-color:#74c69d;color:ghostwhite;;"><i class="fa fa-user"></i><a style="color:white;" href="{{route('login')}}">&nbsp;&nbsp;Login</a></button>
									<button type="button" style="border-radius: 2rem;border:1px solid white;padding:0.9rem;background-color:#0096c7;color:white;"><i class="fa fa-user-plus"></i><a style="color:white;" href="{{route('register')}}">&nbsp;&nbsp;Register</a></button>
								</div>
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

                    <li class="menu_item"><a href="{{ route('index') }}">home</a></li>
                    <li class="menu_item"><a href="{{ route('category') }}">Category</a></li>

                    <li class="menu_item"><a href="{{ route('contact') }}">contact</a></li>
                </ul>
            </div>
        </div>

	{{-- Hamburger menu --}}
	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				
				<li class="menu_item"><a href="{{route('index')}}">home</a></li>
				<li class="menu_item"><a href="{{route('category')}}">Category</a></li>
				<li class="menu_item"><a href="{{route('contact')}}">contact</a></li>
			</ul>
		</div>
	</div>
