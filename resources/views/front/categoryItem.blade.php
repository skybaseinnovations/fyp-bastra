@extends('front.component.layout');

@section('title', 'CategoryItem')
@section('content')


    <div class="super_container">
        <div class="container product_section_container">
            <div class="row">
                <div class="col product_section clearfix">

                    <!-- Breadcrumbs -->


                    <!-- Sidebar -->

                    <div class="sidebar">
                        <div class="sidebar_section">
                            <div class="sidebar_title">
                                <h5>Product Category</h5>
                            </div>
                            <ul class="sidebar_categories">
                                @foreach ($productCategories as $product_category)
                                    <li><a style="{{ request()->id == $product_category->id ? 'color:red' : '' }}"
                                            href="{{ route('category.item', $product_category->id) }}">{{ $product_category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Main Content -->

                    <div class="main_content">
                        <!-- Products -->

                        <div class="bastra-product products_iso">
                            <div class="row">
                                <div class="col">
                                    <!-- Product Grid -->
                                    <div class="product-grid">
                                        <div id="accessories ">
                                            <!-- Product 1 -->

                                            @foreach ($products as $item)
                                                <div class="product-item women">
                                                    <div class="card " style="width: 100%;">
                                                        <img
                                                            src="{{ isset($item->img_url) ?asset('uploads/' . $item->img_url):asset('uploads/'.'placeholder.png') }}"
                                                            height="200px" width="" style="object-fit:cover;">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center float-right">
                                                                @if(auth()->user())
                                                                    <form action="{{route('favorite.store')}}" method="GET">
                                                                        <input type="hidden" id="favHidden" name="favorite">
                                                                    </form>
                                                                        <?php
                                                                        $favourite = \App\Models\Favorite::where(['user_id' => auth()->user()->id, 'product_id' => $item->id])->first();
                                                                        ?>
                                                                    <i class="{{$favourite?'fa-solid fa-heart fa-xl' : 'fa-regular fa-heart fa-xl'}} favourite "
                                                                       data-value="{{$item->id}}"
                                                                       style="color: #fa0000;"></i>
                                                                @endif
                                                            </div>
                                                            <h5 class="card-title">{{$item->name}}</h5>
                                                            <p class="card-text"> Rs {{$item->price}}</p>
                                                            <a  href="{{ route('details', $item->id) }}" class="btn btn-outline-primary">View Product</a>
                                                        </div>
                                                    </div>
                                                </div>
{{--                                                <div class="product-item women">--}}
{{--                                                    <div class="product product_filter">--}}
{{--                                                        <div class="product_image">--}}
{{--                                                            <img src="{{ isset($item->img_url)?asset('uploads/' . $item->img_url):asset('uploads/'.'placeholder.png') }}"--}}
{{--                                                                height="200px" style="object-fit: cover" alt="">--}}
{{--                                                        </div>--}}
{{--                                                        <div--}}
{{--                                                            class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_info">--}}

{{--                                                            <div class="d-flex align-items-center float-right">--}}
{{--                                                                @if(auth()->user())--}}
{{--                                                                    <form action="{{route('favorite.store')}}" method="POST">--}}
{{--                                                                        @csrf--}}
{{--                                                                        <input type="hidden" id="favHidden" name="favorite">--}}
{{--                                                                    </form>--}}
{{--                                                                        <?php--}}
{{--                                                                        $favourite = \App\Models\Favorite::where(['user_id' => auth()->user()->id, 'product_id' => $products->id])->first();--}}
{{--                                                                        ?>--}}
{{--                                                                    <i class="{{$favourite?'fa-solid fa-heart fa-xl' : 'fa-regular fa-heart fa-xl'}} favourite "--}}
{{--                                                                       data-value="{{$products->id}}"--}}
{{--                                                                       style="color: #fa0000;"></i>--}}
{{--                                                                @endif--}}
{{--                                                            </div>--}}
{{--                                                            <h6 class="product_name"><a href="#">{{ $item->name }}--}}

{{--                                                                </a></h6>--}}
{{--                                                            <div class="product_price">Rs. {{ $item->price }}</div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="red_button add_to_cart_button"><a--}}
{{--                                                            href="{{ route('details', $item->id) }}">View Product</a></div>--}}
{{--                                                </div>--}}
                                            @endforeach
                                            <!-- Product 2 -->




                                        </div>

                                        <!-- Product Sorting -->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>



    </div>

    <script src="{{ asset('front/js/jquery-3.2.1.min.js') }}"></script>

    <script src="{{ asset('front/plugins/Isotope/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('front/js/categories_custom.js') }}"></script>


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

@endsection
