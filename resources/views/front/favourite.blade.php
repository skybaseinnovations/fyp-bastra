@extends('front.component.layout');

@section('title', 'Favourites')

@section('content')
<br>
    <br>

<div class="container my-5">

    <h4 style="color:#5f09a9">Favourite Lists</h4>
    <div class="bastra-product row mt-5 mb-5">
        @foreach ($products as $product)
            <div class=" col-3 images-group mx-auto" id="group-">
                    <div>
                        <div class="card " style="width: 100%;">
                            <img
                                src="{{ isset($product->img_url) ?asset('uploads/' . $product->img_url):asset('uploads/'.'placeholder.png') }}"
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

            </div>
        @endforeach
    </div>

    {{ $products->links() }}

</div>







@endsection
