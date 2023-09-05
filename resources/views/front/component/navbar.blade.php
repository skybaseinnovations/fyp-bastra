<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bastra</title>
    <link rel="icon" type="image/x-icon" href="/front/images/clothes-hanger.png">

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
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/categories_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/categories_responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/contact_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/contact_responsive.css') }}">


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans:ital,wght@0,400;1,300&family=Roboto:wght@500&family=Source+Code+Pro:ital@1&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
        @yield('styles')
    </style>
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
                                <ul class="navbar_menu" style="">
                                    <li><a href="{{ route('index') }}">home</a></li>
                                    <li class="account">
                                        <a>Category
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection " style="width:150px !important;height:150px !important;" >
                                            @foreach ($items as $item)
                                                <li><a href="{{ route('category.item',$item->id) }}">{{ $item->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact') }}">contact</a></li>

                                    <div class="button" style="">
                                        @auth
                                            <li class="checkout">
                                                <a href="{{ route('cartshow') }}">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </a>
                                            </li>

                                            <li class="ml-3">
                                            <li class="account">
                                                <a style="text-transform:lowercase;background-color:grey;border-radius:3rem;width:auto;">
                                                    <i
                                                        class="fa fa-user"></i>&nbsp;&nbsp;{{auth()->user()->name}}
                                                    <i class="fa fa-angle-down"></i>

                                                </a>
                                                <ul class="account_selection " style="padding:0.7rem;min-width:200px !important;line-height:50px !important;" >
                                                    <li><a href="#">Manage
                                                            Account</a>
                                                    </li>

                                                    <li><a href="#">My Order</a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('logout') }}" method="POST" >
                                                            @csrf
                                                            <button type="submit"
                                                                    style="width:auto;margin-top:1rem;border-radius: 2rem;border:1px solid white;padding:0.5rem;background-color:#e92556;color:white;"><i class="fa-solid fa-power-off"></i></a>&nbsp;&nbsp;Logout</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @else
                                                <a href="{{ route('login') }}" class="btn btn-success"
                                                    style="border-radius: 2rem;border:1px solid white;padding:0.9rem;color:ghostwhite;"><i
                                                        class="fa fa-user"></i>&nbsp;&nbsp;Login</a>
                                                <a href="{{ route('register') }}" class="btn"
                                                    style="border-radius: 2rem;border:1px solid white;padding:0.9rem;background-color:#0096c7;color:white;"><i
                                                        class="fa fa-user-plus"></i>&nbsp;&nbsp;Register</a>


                                        </div>
                                    @endauth
                                </div>
                            </ul>
                            <div class="hamburger_container" style="">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>
                        </nav>
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
                <li class="menu_item"><a href="">Category</a></li>

                <li class="menu_item"><a href="{{ route('contact') }}">contact</a></li>
            </ul>
        </div>
    </div>
@yield('scripts')

</body>
