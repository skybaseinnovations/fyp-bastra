@extends('front.component.layout');

@section('title', 'Productshow')

@section('content')
<br>
<br>
<br>
<div class="container pt-5 ">
    
<h3 style="color:#ab4cfe">Product As Category</h3>

<div class="row">
    <div class="col">
        <div class="product-grid"
            data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

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
                                        href="single.html">{{ $product->name }}</a></h6>
                                <div class="product_price">{{ $product->price }}</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="{{route('productcart')}}">add to
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


@endsection
