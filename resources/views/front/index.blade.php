@extends('front.component.layout');

@section('title', 'Contact')

@section('content')

    <head>

    <link rel="icon" type="image/x-icon" href="/front/images/clothes-hanger.png">
    </head>

    <div class="super_container">



        <!-- Slider -->

        <div class="main_slider" style="background-image:url('front/images/1st.jpg')">
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
                                         style="background-image:url({{ isset($item->img_url)?asset('uploads/' . $item->img_url): asset('uploads/'.'null_img.jpg') }})">
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
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked "
                                    data-filter="*" data-group="all">
                                    <a href="#" style="color:black;" class="show-images mx-2" data-group="all">Show
                                        All</a>
                                </li>

                                @foreach ($items as $item)
                                    <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                        data-filter="">
                                        <a href="#" style="color:black;" class="show-images mx-2"
                                           data-group="{{ $item->id }}">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
{{--                <i class="fa-solid fa-bell"></i>--}}
{{--                @if ($notifications->count() > 0 )--}}
{{--                                    @foreach($notifications as $notification)--}}
{{--                    <div class="alert alert-light" role="alert">--}}
{{--                                                <p class="dropdown-item"><b> {{ $notification->data['order_status'] }}--}}
{{--                        <p class="dropdown-item"><b>--}}
{{--                        </p>--}}

{{--                        <a href="#"><button type="button" rel="tooltip" title="Mark as read" class="btn btn-danger btn-link btn-sm mark-as-read" data-id=" {{$notification->id}} ">--}}
{{--                                <i class="material-icons">close</i>--}}
{{--                            </button>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <hr>--}}
{{--                                    @endforeach--}}
{{--                    <a href="#" class="dropdown-item" id="mark-all">--}}
{{--                        Mark all as read--}}
{{--                    </a>--}}
{{--                @else--}}
{{--                    <p class="dropdown-item">There are no new notifications</p>--}}
{{--                @endif--}}

                    <div class="bastra-product row mt-5 mb-5">
                        @foreach ($items as $item)
                            <div class=" col-3 images-group mx-auto" id="group-{{ $item->id }}">
                                @foreach ($item->products as $product)
                                    <div class="bg-danger">
                                        <div class="card " style="width: 100%;">
                                            <img
                                                src="{{ isset($product->img_url) ?asset('uploads/' . $product->img_url):asset('uploads/'.'null_img.jpg') }}"
                                                height="250px" width="" style="object-fit:cover;">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center float-right">
                                                    @if(auth()->user())
                                                        <form action="{{route('favorite.store')}}" method="GET">
                                                            <input type="hidden" id="favHidden" name="favorite">
                                                        </form>
                                                            <?php
                                                            $favourite = \App\Models\Favorite::where(['user_id' => auth()->user()->id, 'product_id' => $product->id])->first();
                                                            ?>
                                                        <i class="{{$favourite?'fa-solid fa-heart fa-xl' : 'fa-regular fa-heart fa-xl'}} favourite "
                                                           data-value="{{$product->id}}"
                                                           style="color: #fa0000;"></i>
                                                    @endif
                                                </div>
                                                <h5 class="card-title">{{$product->name}}</h5>
                                                <p class="card-text"> Rs {{$product->price}}</p>
                                                <a  href="{{ route('details', $product->id) }}" class="btn btn-outline-primary">View Product</a>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                            @endforeach
                    </div>


            </div>
        </div>



    </div>


    <!-- Add Owl Carousel JavaScript at the end of your body -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function () {
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
        document.addEventListener("DOMContentLoaded", function () {
            const showImagesLinks = document.querySelectorAll(".show-images");
            const imageGroups = document.querySelectorAll(".images-group");

            showImagesLinks.forEach(link => {
                link.addEventListener("click", function (event) {
                    event.preventDefault();
                    const groupId = this.getAttribute("data-group");

                    // Hide all image groups
                    imageGroups.forEach(group => {
                        group.style.display = "none";
                    });

                    if (groupId === "all") {
                        // Show all image groups
                        imageGroups.forEach(group => {
                            group.style.display = "flex";
                        });
                    } else {
                        // Display the selected image group
                        const selectedGroup = document.getElementById("group-" + groupId);
                        selectedGroup.style.display = "flex";
                    }
                });
            });
        });
    </script>

        <script>
            function sendMarkRequest(id = null) {
            return $.ajax("{{ route('markNotification') }}", {
            method: 'POST',

            data: {
            _token: '{{ csrf_token() }}',
            id
        }
        });
        }
            $(function() {
            $('.mark-as-read').click(function() {
                let request = sendMarkRequest($(this).data('id'));
                request.done(() => {
                    $(this).parents('div.alert').remove();
                });
            });
            $('#mark-all').click(function() {
            let request = sendMarkRequest();
            request.done(() => {
                window.location.href ="/"
            // $('div.alert').remove();
        })
        });
        });
    </script>

    <script>
        $('.bastra-product').on('click', '.favourite', function () {
            $.ajax({
                url: "{{route('favorite.store')}}",
                type: 'GET',
                data: {
                    'favorite': $(this).data('value')
                },
                success: function (data) {


                    $(document).find('.favourite').each(function () {
                        if ($(this).data('value') == data.product_id) {
                            if ($(this).hasClass('fa-solid')) {
                                $(this).removeClass('fa-solid').addClass('fa-regular');
                            } else if ($(this).hasClass('fa-regular')) {
                                $(this).addClass('fa-solid').removeClass('fa-regular');
                                $(document).find('.message').each(function () {
                                    console.log($(this).data('id'))
                                    if($(this).data('id') == data.listing_id)
                                    {
                                        $(this).empty();
                                        $(this).css({'border-radius':'10px','padding':'10px' });
                                        $(this).append('Added to Favorites!');
                                        // Hide message after 3 seconds
                                        setTimeout(() => {
                                            $(this).empty();
                                            $(this).css({'border-radius':'','padding':'' });
                                        }, 3000);
                                    }
                                });
                            }
                        }
                    })
                    // $(document).find('.favorite').load(location.href+" .favorite>*","");
                }
            })
            // $(this).prev().submit();
        })
    </script>
