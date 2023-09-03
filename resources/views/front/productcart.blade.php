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

        .cart1 {
            overflow-y: scroll;
            height: 400px;
        }

        .cart1::-webkit-scrollbar {
            display: none;
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
                                    <<<<<<< HEAD <td>
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
                                                    <form action="{{ route('test') }}" method="POST" id="form">
                                                        @csrf
                                                        <section>
                                                            <div class="section">
                                                                <div class="cart1 info1">
                                                                    <div class="container1 cart-page">
                                                                        <table>
                                                                            <tr>
                                                                                <th>S.N</th>
                                                                                <th>Product</th>
                                                                                <th>Quantity</th>
                                                                                <th>Subtotal</th>
                                                                            </tr>
                                                                            @foreach ($carts as $key => $cart)
                                                                                <tr>
                                                                                    <td>
                                                                                        <input name="selected[]"
                                                                                            type="checkbox"
                                                                                            class="btn-check item-checkbox cartSelector"
                                                                                            autocomplete="off"
                                                                                            data-index="{{ $key }}">
                                                                                        <input type="hidden"
                                                                                            name="product_ids[]"
                                                                                            value="{{ $cart->product->id }}">
                                                                                    </td>
                                                                                    {{-- <td>{{ ++$key }}</td> --}}
                                                                                    <td>
                                                                                        <div class="cart-info "
                                                                                            style="justify-content: center">
                                                                                            <img src="{{ asset('uploads/' . $cart->product->img_url) }}"
                                                                                                alt="">
                                                                                            <div
                                                                                                style="justify-content: center">
                                                                                                <h5>{{ $cart->product->name }}
                                                                                                </h5>
                                                                                                <p class="price">Price:
                                                                                                    ${{ $cart->product->price }}
                                                                                                </p>
                                                                                                <a href="{{ route('cartItem.delete', $cart->id) }}"
                                                                                                    style="color: red">Remove</a>
                                                                                            </div>
                                                                                        </div>
                                                                    </div>
                                        </td>
                                        <<<<<<< HEAD <td>
                                            <div class="increment d-flex">
                                                <button class="b1 decrease"
                                                    style="background-color:#ab4cfe;color:white;width:30px;height:30px;font-size:1.5rem;border:1px solid white;"
                                                    type="button" class="">-</button>&nbsp;&nbsp;
                                                <input type="text" value="{{ $cart->quantity }}"
                                                    style="width:30px;text-align:center;">&nbsp;&nbsp;
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

                <div id="hidden-selected">

                </div>
            </div>
            <div class="cart2 info1">

                <div class="border text-center">
                    <table>
                        <tr style="width: 100%;">
                            <th>Order Summary</th>
                            <th></th>

                        </tr>

                        <tr>

                            <td>Total</td>
                            <td id="totalCell">$00.00</td>
                        </tr>
                    </table>
                    <button type="button" class="btn btn-success btn-sm mx-auto m-3 submitBtn" id="submitBtn"
                        style="background-color:#ab4cfe;">
                        Proceed
                        To
                        Checkout</button>
                </div>
                <div class="total-price">

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
        document.addEventListener("DOMContentLoaded", function() {
            const decreaseButtons = document.querySelectorAll(".decrease");
            const increaseButtons = document.querySelectorAll(".increase");
            const quantityInputs = document.querySelectorAll(".quantity");
            const priceElements = document.querySelectorAll(".price");
            const subtotalCells = document.querySelectorAll(".subtotal-cell");
            const itemCheckboxes = document.querySelectorAll(".item-checkbox");
            const totalCell = document.getElementById("totalCell");

            function updateSubtotals() {
                let selectedTotal = 0;

                priceElements.forEach((priceElement, index) => {
                    const priceText = priceElement.textContent;
                    const price = parseFloat(priceText.replace(/[^0-9.]/g, ""));
                    const quantity = parseInt(quantityInputs[index].value);

                    if (!isNaN(price) && !isNaN(quantity)) {
                        const subtotal = price * quantity;
                        subtotalCells[index].textContent = "$" + subtotal.toFixed(2);

                        if (itemCheckboxes[index].checked) {
                            selectedTotal += subtotal;
                        }
                    } else {
                        console.log("Invalid price or quantity:", priceText, quantityInputs[index].value);
                    }
                });

                totalCell.textContent = "$" + selectedTotal.toFixed(2);
            }

            itemCheckboxes.forEach((checkbox, index) => {
                checkbox.addEventListener("change", () => {
                    updateSubtotals();
                });
            });

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
        const count = "{{ $count }}";
        let selectedValue = [];
        for (let i = 0; i < count; i++) {
            selectedValue.push('off')
        };
        const checkedBoxes = document.querySelectorAll('.item-checkbox');
        for (let i = 0; i < checkedBoxes.length; i++) {
            checkedBoxes[i].addEventListener('change', function() {
                if (this.checked) {
                    selectedValue[i] = 'on';
                } else {
                    selectedValue[i] = 'off';
                }
                console.log(selectedValue);
            });
        }

        // document.getElementById('submitBtn').click((e) => {
        //     e.preventDefault();
        //     const formData = Json.stringfy(selectedValues);

        //     let form = document.getElementById('form');

        //     form.append(`<input type="hidden" name="" value=${formData}/>`);
        //     // form.submit();
        // })

        $(document).on('click', '.submitBtn', function(e) {
            e.preventDefault();
            const formData = JSON.stringify(selectedValue);


            let html = `<input type="hidden" name="selected" value=${formData}>`;
            $('#hidden-selected').html(html);

            $('#form').submit();
        });
    </script>
