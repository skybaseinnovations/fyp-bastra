@extends('front.component.layout');

@section('title', 'Contact')

@section('content')
    <link rel="icon" type="image/x-icon" href="/front/images/clothes-hanger.png">

    <div class="super_container">

        <!-- Slider -->

        <div class="main_slider" style="background-image:url(front/images/1st.jpg)">
            <div class="container fill_height">
                <div class="row align-items-center fill_height">
                    <div class="col">
                        <div class="main_slider_content">
                            <h6>Spring / Summer Collection 2023</h6>
                            <h1>Get up to 30% Off New Arrivals</h1>
                            <div class="red_button shop_now_button"><a href="#"
                                    style="	color: ghostwhite !important;
                                ">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider -->
        <div class="banner">
            <div class="container">
                <div class="row mx-auto">
                    <div class="col-md-12">
                        <div class="owl-carousel">
                            @foreach ($items as $item)
                                <div class="mx-auto mt-4">
                                    <div class="banner_item align-items-center"
                                        style="background-image:url({{ asset('uploads/' . $item->img_url) }})">
                                        <div class="banner_category">
                                            <a href="{{ route('category.item', $item->id) }}">{{ $item->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
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
                <div class="row align-items-center">
                    <div class="col text-center">
                        <div class="new_arrivals_sorting">
                            <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked " data-filter="*" data-group="all">
                                    <a href="#" style="color:black;" class="show-images mx-2" data-group="all">Show All</a>
                                </li>

                      @foreach ($items as $item)
                                    <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter="">
                                        <a href="#" style="color:black;" class="show-images mx-2"
                                        data-group="{{ $item->id }}">{{ $item->name }}</a></li>
                                @endforeach

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                    {{-- <div class="image-groups w-100">
                        <div class="row p-5">
                            <a href="#" class="show-images btn btn-primary mx-2" data-group="all">Show All</a>
                            @foreach ($items as $item)
                                <a href="#" class="show-images btn btn-primary mx-2"
                                    data-group="{{ $item->id }}">{{ $item->name }}</a>
                            @endforeach
                        </div>
                    </div> --}}

                <div class="row">
                    <div class="image-container w-100">
                        {{-- Images for each group --}}
                        <div class="col">
                            <div class="product-grid m-3"
                                data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                                @foreach ($items as $item)
                                    <div class="images-group" id="group-{{ $item->id }}">
                                        @foreach ($item->products as $product)
                                            {{-- <img src="{{ asset('uploads/' . $product->img_url) }}" height="100px"
                                                width="100px"> --}}
                                            <div class="product-item men">
                                                <div class="product discount product_filter">
                                                    <div class="product_image">
                                                        <img src="{{ asset('uploads/' . $product->img_url) }}"
                                                            height="250px" width="100%" alt="">
                                                    </div>
                                                    <div class="favorite"></div>
                                                    <div
                                                        class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_name"><a href="">{{ $product->name }}</a>
                                                        </h6>
                                                        <div class="product_price">${{ $product->price }}</div>
                                                    </div>
                                                </div>
                                                <div class="red_button add_to_cart_button"><a
                                                        href="{{ route('details', $product->id) }}">View
                                                        Product</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>




        </div>
    </div>
    </div>

    {{-- <div class="row">
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
                                                    <img src="{{ asset('uploads/' . $product->img_url) }}" alt="">
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div
                                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">{{ $product->name }}</a>
                                                    </h6>
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

                            <!-- Product Design -->

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

                        </div>
                    </div>
                </div> --}}
    </div>
    </div>

    <!-- Add Owl Carousel JavaScript at the end of your body -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                items: 3, // Number of items to show in each slide
                loop: true, // Infinite loop
                nav: true, // Show navigation buttons
                margin: 10, // Space between items
                navText: ['<span class="custom-prev-btn owl-style  "><i class="fa-solid fa-chevron-left text-secondary"></i></span>',
                    '<span class="custom-next-btn owl-style"><i class="fa-solid fa-chevron-right text-secondary"></i></span>'
                ],
            });
        });
    </script>

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
