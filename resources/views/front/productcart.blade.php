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
            flex: 6;
        }

        .cart2 {
            flex-wrap: wrap;
            flex: 2;
        }

        .info1 {
            /* height: 500px; */
            /* flex: 1; */
            padding: 1rem;
        }

        @media (max-width: 600px) {
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

        .cart1 {
            overflow-y: scroll;
            height: 400px;
        }

        .cart1::-webkit-scrollbar {
            display: none;
        }
    </style>



    <div class="container pt-5">
        <form action="{{ route('orders.store') }}" method="POST" id="form">
            @csrf
            <section>
                <div class="section">
                    <div class="cart1 info1">
                        <div class="container1 cart-page">
                            <table>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                                @foreach ($carts as $key => $cart)
                                    <tr>
                                        {{--                                        <td>--}}
                                        {{--                                            <input name="selected[]" type="checkbox"--}}
                                        {{--                                                class="btn-check item-checkbox cartSelector" autocomplete="off"--}}
                                        {{--                                                data-index="{{ $key }}">--}}
                                        <input type="hidden" name="product_ids[]" value="{{ $cart->product->id }}">
                                        <input type="hidden" name="cart_ids[]" value="{{ $cart->id }}">
                                        {{--                                        </td>--}}
                                        {{-- <td>{{ ++$key }}</td> --}}
                                        <td>
                                            <div class="cart-info">
                                                <img src="{{ asset('uploads/' . $cart->product->img_url) }}" alt="">
                                                <div class="d-block" style="justify-content: center">
                                                    <h5>{{ $cart->product->name }}</h5>
                                                    <input type="hidden" value="{{ $cart->product->name }}"
                                                           name="product_titles[]">
                                                    <p>Price: Rs. {{$cart->product->price}}</p>
                                                    <input type="hidden" value="{{ $cart->product->price }}"
                                                           name="product_prices[]">
                                                </div>
                                        </td>
                                        <td>
                                            <div class="increment d-flex" style="justify-content: center">
                                                <button class="decrease"
                                                        style="background-color:#ab4cfe;color:white;width:30px;height:30px;font-size:1.5rem;border:1px solid white;"
                                                        type="button" onclick="decrement({{$cart->product->id}})">-
                                                </button>&nbsp;&nbsp;
                                                <input type="text" style="width:30px;text-align:center;"
                                                       name="quantities[]" value="{{ $cart->quantity }}"
                                                       class="quantity" id="quantity" data-id="{{$cart->product->id}}">&nbsp;&nbsp;
                                                <button class="increase"
                                                        style="background-color:#ab4cfe;color:white;width:30px;font-size:1.5rem;height:30px;border:1px solid white;"
                                                        type="button" value="" onclick="increment({{$cart->product->id}})">+
                                                </button>
                                            </div>
                                        </td>
                                        <td class="subtotal-cell d-flex align-items-center py-2-">
                                            <span>Rs. </span> <p class="product_total m-0 p-0" data-id="{{$cart->product->id}}">{{$cart->total }}</p>
                                            <input type="hidden" name="subtotals[]" value="{{ $cart->total }}" class="product_total" data-id="{{$cart->product->id}}">
                                        </td>
                                        <td>
                                            <a href="{{ route('cartItem.delete', $cart->id) }}"
                                               class="btn btn-outline-danger p-2"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                    <div class="cart2 info1">
                        <div class="border text-center">
                            <table>
                                <tr style="width: 100%;">
                                    <th colspan="2">Order Summary</th>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td id="totalCell">
                                        <div class="d-flex">
                                            Rs. <p class="totalp">0.00</p> <input type="hidden" name="total" value="0.00" id="total">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <button type="submit" class="btn btn-success btn-sm mx-auto m-3 submitBtn" id="submitBtn"
                                    style="background-color:#ab4cfe;">
                                Proceed
                                To
                                Checkout
                            </button>
                        </div>
                        <div class="total-price">

                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function () {
            getGrandTotal();
        });


    </script>

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const decreaseButtons = document.querySelectorAll(".decrease");
            const increaseButtons = document.querySelectorAll(".increase");
            const quantityInputs = document.querySelectorAll(".quantity");
            const priceElements = document.querySelectorAll(".price"); // Elements containing price
            const subtotalCells = document.querySelectorAll(".subtotal-cell"); // Subtotal cells

            function updateSubtotals() {
                priceElements.forEach((priceElement, index) => {
                    const priceText = priceElement.textContent;
                    const price = parseFloat(priceText.replace(/[^0-9.]/g,
                        "")); // Remove non-numeric characters
                    const quantity = parseInt(quantityInputs[index].value);

                    if (!isNaN(price) && !isNaN(quantity)) {
                        const subtotal = price * quantity;
                        subtotalCells[index].textContent = "$" + subtotal.toFixed(2);
                    } else {
                        console.log("Invalid price or quantity:", priceText, quantityInputs[index].value);
                    }
                });
            }

            decreaseButtons.forEach((decreaseButton, index) => {
                decreaseButton.addEventListener("click", () => {
                    let currentValue = parseInt(quantityInputs[index].value);
                    if (currentValue > 1) {
                        quantityInputs[index].value = currentValue - 1;
                        updateSubtotals();
                    }
                });
            });

            increaseButtons.forEach((increaseButton, index) => {
                increaseButton.addEventListener("click", () => {
                    let currentValue = parseInt(quantityInputs[index].value);
                    quantityInputs[index].value = currentValue + 1;
                    updateSubtotals();
                });
            });

            // Initial calculation
            updateSubtotals();
        });
    </script> --}}
    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     const decreaseButtons = document.querySelectorAll(".decrease");
        //     const increaseButtons = document.querySelectorAll(".increase");
        //     const quantityInputs = document.querySelectorAll(".quantity");
        //     const priceElements = document.querySelectorAll(".price");
        //     const subtotalCells = document.querySelectorAll(".subtotal-cell");
        //     const itemCheckboxes = document.querySelectorAll(".item-checkbox");
        //     const totalCell = document.getElementById("totalCell");
        //
        //     function updateSubtotals() {
        //         let selectedTotal = 0;
        //
        //         priceElements.forEach((priceElement, index) => {
        //             const priceText = priceElement.textContent;
        //             const price = parseFloat(priceText.replace(/[^0-9.]/g, ""));
        //             const quantity = parseInt(quantityInputs[index].value);
        //
        //             if (!isNaN(price) && !isNaN(quantity)) {
        //                 const subtotal = price * quantity;
        //                 subtotalCells[index].textContent = "$" + subtotal.toFixed(2);
        //
        //                 if (itemCheckboxes[index].checked) {
        //                     selectedTotal += subtotal;
        //                 }
        //             } else {
        //                 console.log("Invalid price or quantity:", priceText, quantityInputs[index].value);
        //             }
        //         });
        //
        //         totalCell.textContent = "$" + selectedTotal.toFixed(2);
        //     }
        //
        //     itemCheckboxes.forEach((checkbox, index) => {
        //         checkbox.addEventListener("change", () => {
        //             updateSubtotals();
        //         });
        //     });
        //
        //     decreaseButtons.forEach((decreaseButton, index) => {
        //         decreaseButton.addEventListener("click", () => {
        //             let currentValue = parseInt(quantityInputs[index].value);
        //             if (currentValue > 1) {
        //                 quantityInputs[index].value = currentValue - 1;
        //                 updateSubtotals();
        //             }
        //         });
        //     });
        //
        //     increaseButtons.forEach((increaseButton, index) => {
        //         increaseButton.addEventListener("click", () => {
        //             let currentValue = parseInt(quantityInputs[index].value);
        //             quantityInputs[index].value = currentValue + 1;
        //             updateSubtotals();
        //         });
        //     });
        //
        //     // Initial calculation
        //     updateSubtotals();
        // });


        {{--const count = "{{ $count }}";--}}
        {{--let selectedValue = [];--}}
        {{--for (let i = 0; i < count; i++) {--}}
        {{--    selectedValue.push('off')--}}
        {{--};--}}
        {{--const checkedBoxes = document.querySelectorAll('.item-checkbox');--}}
        {{--for (let i = 0; i < checkedBoxes.length; i++) {--}}
        {{--    checkedBoxes[i].addEventListener('change', function() {--}}
        {{--        if (this.checked) {--}}
        {{--            selectedValue[i] = 'on';--}}
        {{--        } else {--}}
        {{--            selectedValue[i] = 'off';--}}
        {{--        }--}}
        {{--        console.log(selectedValue);--}}
        {{--    });--}}
        {{--}--}}

        // document.getElementById('submitBtn').click((e) => {
        //     e.preventDefault();
        //     const formData = Json.stringfy(selectedValues);

        //     let form = document.getElementById('form');

        //     form.append(<input type="hidden" name="" value=${formData}/>);
        //     // form.submit();
        // })

    </script>
