@extends('front.component.layout');

@section('content-header')
    Product Cart
@stop
@section('content')
    <style>
        .section {
            display: flex;
            padding: 3em;
        }

        .cart1 {
            flex-wrap: wrap;

        }

        .cart2 {
            flex-wrap: wrap;

        }

        .info1 {
            /* height: 500px; */
            flex: 1;
            padding: 1rem;
        }

        @media(max-width:600px) {
            .section {
                flex-direction: column;
            }
        }

        .cart-page {
            /* margin:80px auto; */
        }

        table {
            text-align: center;
            width: 100%;
            border-collapse: collapse;
        }

        .cart-info {
            display: flex;
            flex-wrap: wrap;
        }

        th {
            text-align: center;
            padding: 5px;
            color: #ffff;
            background: #ab4cfe;
            font-weight: normal;
        }

        td {
            padding: 10px 5px;
        }

        td input {
            width: 40px;
            height: 30px;
            padding: 5px;
        }

        td img {
            width: 80px;
            height: 80px;
            margin-right: 10px;
        }
    </style>
    <div class="container pt-5">
        <section>
            <div class="section">
                <div class="cart1 info1">
                    <div class="container cart-page">
                        <table>
                            <tr>
                                <th>S.N</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                            @foreach ($carts as $key => $cart)
                                <tr>
<<<<<<< HEAD
                                    <td>
                                        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                       
                                    </td>
=======
                                    <td>{{ ++$key }}</td>
>>>>>>> af6da711ee882a5669799b8c2a94b6d3d84e80c2
                                    <td>
                                        <div class="cart-info">
                                            <img src="{{ asset('uploads/' . $cart->product->img_url) }}" alt="">
                                            <div style="justify-content: center">
                                                <h5>{{ $cart->product->name }}</h5>
                                                <p>Price: ${{ $cart->product->price }}</p>
                                                <a style="color: red">Remove</a>
                                            </div>
                                        </div>
                                    </td>
<<<<<<< HEAD
                                    <td>
                                        <div class="increment d-flex">
                                            <button class="b1 decrease"
                                                style="background-color:#ab4cfe;color:white;width:30px;height:30px;font-size:1.5rem;border:1px solid white;"
                                                type="button" class="">-</button>&nbsp;&nbsp;
                                                <input type="text" value="{{ $cart->quantity }}" style="width:30px;text-align:center;">&nbsp;&nbsp;
                                            <button class="increase"
                                                style="background-color:#ab4cfe;color:white;width:30px;font-size:1.5rem;height:30px;border:1px solid white;"
                                                type="button" class="">+</button>
                                        </div>
                                       
                                    </td>
                                    </div>
=======
                                    <td><input type="text" value="{{ $cart->quantity }}"></td>
>>>>>>> af6da711ee882a5669799b8c2a94b6d3d84e80c2
                                    <td>${{ $cart->total }}</td>
                                </tr>
                            @endforeach

                        </table>
                    </div>

                </div>
                <div class="cart2 info1">
<<<<<<< HEAD

                    <div class="card" >
                      <div class="card-body">
                        <div class="total-price">
                            <table>
                                <tr>
                                    <td style="font-size:1.2em;">Order Summary</td>
                                </tr>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>$200.00</td>
                                </tr>
                                <tr><button type="button" class="btn btn-primary">Proceed to Checkout</button></tr>
                              </table>
                        </div>
                    
                      </div>
                    </div>
                   
=======
                    <div class="total-price">
                        <table>
                            <tr>
                                <td style="font-size:1.2em;">Order Summary</td>
                            </tr>
                            <tr>
                                <td>Subtotal</td>
                                <td>$200.00</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>$200.00</td>
                            </tr>
                        </table>
                    </div>
>>>>>>> af6da711ee882a5669799b8c2a94b6d3d84e80c2
                </div>
        </section>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    </body>

    </html>
