@extends('front.component.layout');

@section('title', 'Description')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Section */

        .section {
            display: flex;
            padding: 3em;
            width: 1100px;
        }

        .photo3 {
            /* padding: 2rem; */
            flex: 2;
            flex-wrap: wrap;

        }

        .photo4 {
            /* padding: 1rem; */
            flex: 6;
            flex-wrap: wrap;

        }

        .info1 {
            height: 500px;
            /* flex:1; */
            padding: 1rem;
        }

        @media(max-width:600px) {
            .section {
                flex-direction: column;
            }
        }

        #pic1 {
            width: 100%;
            height: 100%;
        }

        .section .photo4 .button button:hover {}

        .b1:hover {
            background-color: #fa7cfe;

        }
    </style>

    <body>
        <br>
        <br>
        <section>
            <div class="col-6 mx-auto mt-5 mx-auto">
                @if (Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">
                        <button class="close" type="button" data-dismiss="alert">x</button>
                        {{ Session::get('message') }}
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger text-center" role="alert">
                        <button class="close" type="button" data-dismiss="alert">x</button>
                        {{ Session::get('error') }}
                    </div>
                @endif
            </div>
            <div class="section mx-auto">
                <div class="photo3 info1" style="heigh:400px;">
                    <img src="{{ asset('uploads/' . $product->img_url) }}"
                        style="width:400px;height:400px; object-fit:contain;">
                </div>
                <div class="photo4 info1">
                    <p style="font-size:3rem;color:black;">{{ $product->name }}</p>
                    <div class="price d-flex">
                        <i class="fa-solid fa-star"style="color:orange;font-size:1.5rem;"></i>
                        <i class="fa-solid fa-star"style="color:orange;font-size:1.5rem;"></i>
                        <i class="fa-solid fa-star"style="color:orange;font-size:1.5rem;"></i>
                        <i class="fa-solid fa-star"style="color:orange;font-size:1.5rem;"></i>
                        <i class="fa-solid fa-star"style="color:orange;font-size:1.5rem;"></i>
                    </div>
                    <br>
                    <form action="{{ route('productcart.add', $product->id) }}" method="POST">
                        @csrf
                        @method('POST')

                        <div class="increment d-flex">
                            <button class="b1 decrease"
                                style="background-color:#ab4cfe;color:white;width:30px;height:30px;font-size:1.5rem;border:1px solid white;"
                                type="button" class="">-</button>&nbsp;&nbsp;
                            <input type="text" style="width:30px;text-align:center;" name="quantity" value="1"
                                class="quantity">&nbsp;&nbsp;
                            <button class="increase"
                                style="background-color:#ab4cfe;color:white;width:30px;font-size:1.5rem;height:30px;border:1px solid white;"
                                type="button" class="">+</button>
                        </div>
                        <br>
                        <div class="product_price">Unit price:${{ $product->price }}</div>
                        <br>
                        <h3>Product Description</h3>
                        {{-- <p style="font-size:1rem;color:black;text-align:justify;">{{ $item->description }}</p> --}}


                        <button
                            style="background-color:#ab4cfe;color:white;padding:1rem;width:150px;font-size:1.2rem;border:1px solid white;"
                            type="submit" class="">Add to Cart</button>
                    </form>


                </div>
        </section>
    @endsection
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const decreaseButton = document.querySelector(".decrease");
            const increaseButton = document.querySelector(".increase");
            const quantityInput = document.querySelector(".quantity");

            decreaseButton.addEventListener("click", () => {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            increaseButton.addEventListener("click", () => {
                let currentValue = parseInt(quantityInput.value);
                quantityInput.value = currentValue + 1;
            });
        });
    </script>
