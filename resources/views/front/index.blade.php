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
                                    <a href="{{ route('description', $product->id) }}">
                                        <img src="{{ asset('uploads/' . $product->img_url) }}" height="100px"
                                            width="100px">
                                    </a>
                                @endforeach
                            </div>
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
