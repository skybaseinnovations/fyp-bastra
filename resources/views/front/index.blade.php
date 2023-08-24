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
                                    <li><a href="{{ route('index') }}">home</a></li>
                                    <li class="account">
                                        <a href="{{ route('category') }}">Category
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">
                                            @foreach ($items as $item)
                                                <li><a href="{{ route('category') }}">{{ $item->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact') }}">contact</a></li>
                                    <li class="account">
                                        <a href="#">
                                            My Account
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">
                                            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign
                                                    In</a></li>
                                            <li><a href="#"><i class="fa fa-user-plus"
                                                        aria-hidden="true"></i>Register</a></li>
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
                    <li class="menu_item"><a href="{{ route('index') }}">home</a></li>
                    <li class="menu_item"><a href="{{ route('category') }}">Category</a></li>

                    <li class="menu_item"><a href="{{ route('contact') }}">contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Slider -->

        <div class="main_slider" style="background-image:url(front/images/1st.jpg)">
            <div class="container fill_height">
                <div class="row align-items-center fill_height">
                    <div class="col">
                        <div class="main_slider_content">
                            <h6>Spring / Summer Collection 2023</h6>
                            <h1>Get up to 30% Off New Arrivals</h1>
                            <div class="red_button shop_now_button"><a href="{{ route('category') }}">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner -->

        <div class="banner ">
            <div class="container ">
                <div class="row ">

                    @foreach ($items as $item)
                        <div class="col-md-4 mx-auto mt-4">
                            <div class="banner_item align-items-center"
                                style="background-image:url({{ asset('uploads/' . $item->img_url) }})">
                                <div class="banner_category">
                                    <a href="{{ route('category') }}">{{ $item->name }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- New Arrivals -->

        <div class="new_arrivals">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title new_arrivals_title">
                            <h2>Product Category</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="image-groups w-100">
                        <div class="row p-5">
                            <a href="#" class="show-images btn btn-primary mx-2" data-group="all">Show All</a>
                            @foreach ($items as $item)
                                <a href="#" class="show-images btn btn-primary mx-2"
                                    data-group="{{ $item->id }}">{{ $item->name }}</a>
                            @endforeach
                        </div>
                    </div>



                    <div class="image-container w-100">
                        {{-- Images for each group --}}
                        @foreach ($items as $item)
                            <div class="images-group" id="group-{{ $item->id }}">
                                @foreach ($item->products as $product)
                                    <img src="{{ asset('uploads/' . $product->img_url) }}" height="100px"
                                        width="100px">
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="row">
                <div id="imageContainer" style="display:none;">
                    <img src="front/images/product_2.png" alt="Image 1">
                    <img src="front/images/product_2.png" alt="Image 2">
                    <img src="front/images/product_2.png" alt="Image 3">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid"
                        data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                        <!-- Product 1 -->
                        @foreach ($items as $item)
                            @foreach ($item->products as $product)
                                @if ($item->id == $product->product_category_id)
                                    <div class="product-item men">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="{{ asset('uploads/' . $product->img_url) }}"
                                                    alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div
                                                class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a
                                                        href="single.html">{{ $product->name }}</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#">add to
                                                cart</a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach



                        <!-- Product 2 -->

                        <div class="product-item women">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="front/images/product_2.png" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div
                                    class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved
                                            27-Inch FHD Monitor</a></h6>
                                    <div class="product_price">$610.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 3 -->

                        <div class="product-item women">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="front/images/product_3.png" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone
                                            Blackout Edition</a></h6>
                                    <div class="product_price">$120.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 4 -->

                        <div class="product-item accessories">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="front/images/product_4.png" alt="">
                                </div>
                                <div
                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                </div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo
                                            Thermal Label Printer</a></h6>
                                    <div class="product_price">$410.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 5 -->

                        <div class="product-item women men">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="front/images/product_5.png" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold
                                            &
                                            Grey</a></h6>
                                    <div class="product_price">$180.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 6 -->

                        <div class="product-item accessories">
                            <div class="product discount product_filter">
                                <div class="product_image">
                                    <img src="front/images/product_6.png" alt="">
                                </div>
                                <div class="favorite favorite_left"></div>
                                <div
                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="#single.html">Fujifilm X100T 16 MP
                                            Digital
                                            Camera (Silver)</a></h6>
                                    <div class="product_price">$520.00<span>$590.00</span></div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 7 -->

                        <div class="product-item women">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="front/images/product_7.png" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved
                                            27-Inch FHD Monitor</a></h6>
                                    <div class="product_price">$610.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 8 -->

                        <div class="product-item accessories">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="front/images/product_8.png" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone
                                            Blackout Edition</a></h6>
                                    <div class="product_price">$120.00</div>
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
                                <div
                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                </div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo
                                            Thermal Label Printer</a></h6>
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
                                    <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold
                                            &
                                            Grey</a></h6>
                                    <div class="product_price">$180.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br>

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div
                        class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                        <ul class="footer_nav">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
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
                        <div class="cr">©2018 All Rights Reserverd. Made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp; distributed by <a
                                href="https://themewagon.com">ThemeWagon</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>

    <script src="{{ asset('front/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('front/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('front/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('front/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const showImagesLinks = document.querySelectorAll(".show-images");
            const imageGroups = document.querySelectorAll(".images-group");

            showImagesLinks.forEach(link => {
                link.addEventListener("click", function(event) {
                    event.preventDefault();
                    const groupId = this.getAttribute("data-group");

                    // Hide all image groups
                    imageGroups.forEach(group => {
                        group.style.display = "none";
                    });

                    if (groupId === "all") {
                        // Show all image groups
                        imageGroups.forEach(group => {
                            group.style.display = "block";
                        });
                    } else {
                        // Display the selected image group
                        const selectedGroup = document.getElementById("group-" + groupId);
                        selectedGroup.style.display = "block";
                    }
                });
            });
        });
    </script>



</body>

</html>
