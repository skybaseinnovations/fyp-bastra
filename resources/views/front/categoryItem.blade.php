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

                        <div class="products_iso">
                            <div class="row">
                                <div class="col">
                                    <!-- Product Grid -->
                                    <div class="product-grid">
                                        <div id="accessories ">
                                            <!-- Product 1 -->

                                            @foreach ($products as $item)
                                                <div class="product-item women">
                                                    <div class="product product_filter">
                                                        <div class="product_image">
                                                            <img src="{{ asset('uploads/' . $item->img_url) }}"
                                                                height="200px" style="object-fit: cover" alt="">
                                                        </div>
                                                        <div class="favorite"></div>
                                                        <div
                                                            class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_name"><a href="#">{{ $item->name }}

                                                                </a></h6>
                                                            <div class="product_price">${{ $item->price }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="red_button add_to_cart_button"><a
                                                            href="{{ route('details', $item->id) }}">add to cart</a></div>
                                                </div>
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

@endsection
