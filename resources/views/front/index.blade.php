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
                            @foreach ($items as $item)
                                <a href="#" class="show-images btn btn-primary mx-2"
                                    data-group="{{ $item->id }}">{{ $item->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="image-container">
                        {{-- Images for each group --}}
                        @foreach ($items as $item)
                            @foreach ($item->products as $product)
                                <div class="images-group" id="group-{{ $product->product_category_id }}">
                                    @if ($item->id === $product->product_category_id)
                                        <img src="{{ asset('uploads/' . $product->img_url) }}" height="100px"
                                            widht="100px">
                                    @endif
                                </div>
                            @endforeach
                        @endforeach
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
                                                <div class="product_image p-3" >
                                                    <img style="height:200px;width:200px;" src="{{ asset('uploads/' . $product->img_url) }}"
                                                        alt="">
                                                </div>
                                                <div class="favorite"></div>
                                                <div
                                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a
                                                            href="">{{ $product->name }}</a></h6>
                                                    <div class="product_price">{{ $product->price }}</div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to
                                                    cart</a>
                                            </div>
                                        </div> 
                                    @endif
                                @endforeach
                            @endforeach

                            
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

                    // Display the selected image group
                    const selectedGroup = document.getElementById("group-" + groupId);
                    console.log(selectedGroup);
                    selectedGroup.style.display = "block";
                });
            });
        });
    </script>
