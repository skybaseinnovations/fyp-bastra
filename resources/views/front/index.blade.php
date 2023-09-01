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
                            <div class="red_button shop_now_button"><a href="#">shop now</a>
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
                                    <a href="{{ route('category.item', $item->id) }}">{{ $item->name }}</a>
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
                        <div class="col">
                            <div class="product-grid"
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
                                                            alt="">
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
                                                        </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach

                            </div>
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
