@extends('front.component.layout');

@section('title', 'Contact')

@section('content')

    <div class="super_container">

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
        <!-- Banner -->

        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="banner_item align-items-center" style="background-image:url('front/images/yellow.jpg')">
                            <div class="banner_category">
                                <a href="categories.html">women's</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner_item align-items-center" style="background-image:url(front/images/handbag.jpg)">
                            <div class="banner_category">
                                <a href="categories.html">Accessories's</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner_item align-items-center" style="background-image:url('front/images/man.jpg')">
                            <div class="banner_category">
                                <a href="categories.html">men's</a>
                            </div>
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
                                    <img src="{{ asset('uploads/' . $product->img_url) }}" height="100px" width="100px">
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
                    <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

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
                                                <h6 class="product_name"><a href="single.html">{{ $product->name }}</a></h6>
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

    </div>

@endsection
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

