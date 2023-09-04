@extends('front.component.layout')
@section('styles')
    <style>
        table tr td, table tr th {
            background-color: rgba(210, 130, 240, 0.3) !important;
            border: 0;
        }

        .table-borderless > tbody > tr > td,
        .table-borderless > tbody > tr > th,
        .table-borderless > tfoot > tr > td,
        .table-borderless > tfoot > tr > th,
        .table-borderless > thead > tr > td,
        .table-borderless > thead > tr > th {
            border: none;
        }
        .form-check-input:checked{
            background-color: #6d4cfe;
            border-color: #6d4cfe;
        }
        .payment-border {
            border: 1px solid #6d4cfe;
        }
    </style>
@endsection
@section('content')
    <div class="super_container">

        <div style="height: 97vh">
            <div class="container fill_height">
                <div class="row align-items-center fill_height">
                    <div class="card rounded elevation-1 border-0 "
                         style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                        <div class="card-body p-0">
                            <div class="row p-0">
                                <div class="col-md-6 bg-light rounded p-0">
                                    <div class="m-5 text-center">
                                        <h4>Yay! Order Confirmed</h4>
                                        <br>

                                        <h5 class="text-secondary">Order Summary</h5>
                                        <table class="table table-borderless table-light center">
                                            <tr>
                                                <td class="text-secondary">Order ID:</td>
                                                <td class="text-secondary">#{{$order->number}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-secondary">Sub Total:</td>
                                                <td class="text-secondary">Rs. {{$order->total}}</td>
                                            </tr>

                                            <tr class="border-top">
                                                <td class="text-secondary text-bold">Total:</td>
                                                <td class="text-secondary text-bold">Rs.{{$order->total}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 m-0 p-0">
                                    <form action="{{route('checkout')}}" method="POST">
                                        @csrf
                                        <div class="m-5">
                                            <h5>Choose Payment Method</h5>
                                            <div class="container-payment row d-flex mt-4">
                                                <div class="card m-1">
                                                    <div class="card-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                   name="payment_method" id="cod" value="cod">
                                                            <label class="form-check-label" for="cod">
                                                                Cash On Delivery
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card m-1">
                                                    <div class="card-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                   name="payment_method" id="skypay" value="skypay" checked>
                                                            <label class="form-check-label" for="skypay">
                                                                SkyPay
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <input type="hidden" name="order_id" value="{{$order->id}}">
                                                    <input type="hidden" name="total" value="{{$order->total}}">
                                                    <button type="submit" class="btn btn-primary float-right mt-3">Checkout</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('input[name="payment_method"]').each(function() {
                if ($(this).is(':checked')) {
                    $(this).closest('.card').addClass('payment-border');
                }
            });

            $('input[name="payment_method"]').change(function() {
                $('.card').removeClass('payment-border');

                if ($(this).is(':checked')) {
                    $(this).closest('.card').addClass('payment-border');
                }
            });
        });

    </script>
@endsection
