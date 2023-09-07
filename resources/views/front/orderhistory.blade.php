@extends('front.component.layout');

@section('title', 'Orderhistory')

@section('content')
    <br><br>

    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            /* border-radius:10px !important; */
        }
    </style>

    <section>
        @if (Session::has('message'))
            <div class="alert alert-success text-center position-relative top-50 w-50 mx-auto mt-5" role="alert">
                <button class="close" type="button" data-dismiss="alert">x</button>
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="order p-5 mx-auto" style="width:1200px;">
            <h4>
                Order history
            </h4>
            <p>Check the status of recent orders and shipment.</p>
            <table class="table p-3 text-center table-sm table-responsive-sm " style="border-radius:2rem;">

            </table>
        </div>

        @foreach($orders as $order)
            <div class="image-des p-5">
                <table class="text-center mx-auto " style="width:80%;">
                    <p class="text-center">Order - ID : {{$order->id}}</p>

                @foreach($order->orderItems as $orderItem)
                        <tr class="gap-3">

                            <td class="text-left" width="auto">
                                <div class="card m-4" style="width: 15rem;">
                                    <img class="card-img-top" src="{{isset($orderItem->product->img_url)? asset('uploads/'.$orderItem->product->img_url):asset('uploads/'.'null_img.jpg')}}" alt="Card image cap" style="height: 150px;width: 150px;object-fit: contain;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$orderItem->product->name}}</h5>
                                        <p class="card-text">{{$orderItem->product->description}}</p>
                                        <p class="card-text">Payment Status: {{$order->payment_method}}</p>
                                        <p class="card-text">Payment Status: {{$order->payment_reference_id != null?$order->payment_reference_id:'N/A'}}</p>
                                        <p class="card-text">Payment Status: {{$order->payment_status}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-left">
                                <p>Order Status: {{$order->order_status}}</p>
                                <p>Payment Status: {{$order->payment_status}}</p>
                                <p>Payment Status: {{$order->payment_method}}</p>
                                <p>Payment Status: {{$order->payment_reference_id != null?$order->payment_reference_id:'N/A'}}</p>
                                <p>Payment Status: {{$order->payment_status}}</p>
                            </td>
                            <td class="" width="auto">Delivered on August 24, 2023</td>
                            <td class="" width="auto"><a href="{{route('cancel.product',$order->id)}}" style="  {{( $order->order_status=="Delivered" || $order->order_status=="Cancelled" )? 'display:none;': ''  }}">Cancel Product</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @endforeach

    </section>
@endsection
{{-- Order Table: --}}
{{--<table class="table p-3 text-center table-sm table-responsive-sm " style="border-radius:2rem;">--}}
{{--                <thead>--}}
{{--                    <tr class="p-3" style="background-color:#ab4cfe;color:white;">--}}
{{--                        <th scope="col">Order Number</th>--}}
{{--                        <th scope="col">Date Placed </th>--}}
{{--                        <th scope="col">Total Amount</th>--}}
{{--                        <th>--}}
{{--                            <button type="button" class="btn">View Order</button> &nbsp;--}}
{{--                            <button type="button" class="btn">View Invoice</button>--}}
{{--                        </th>--}}
{{--            </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                    <tr>--}}
{{--                        <th>1</th>--}}
{{--                        <td>1</td>--}}
{{--                        <td>111</td>--}}
{{--                    </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}

{{-- Image section --}}

{{--            <div class="">--}}
{{--                <table class="text-center" style="width:100%;padding:31rem;">--}}
{{--                    @foreach($orders as $order)--}}

{{--                        <tr >--}}

{{--                            <div>--}}
{{--                                <td class="d-flex">--}}
{{--                                    <p>Order - ID : {{$order->id}}</p>--}}

{{--                                @foreach($order->orderItems as $orderItem)--}}
{{--                                        <img src="{{isset($orderItem->product->img_url)? asset('uploads/'.$orderItem->product->img_url):asset('uploads/'.'null_img.jpg')}}" alt="">--}}
{{--                                        <div style="justify-content:center" class="my-5">--}}
{{--                                            <p>{{$orderItem->product->name}}</p>--}}
{{--                                            <p>Qty: {{$orderItem->quantity}}</p>--}}
{{--                                        </div>--}}
{{--                                        --}}{{--                            {{dd($orderItem->product->img_url)}}--}}
{{--                                    @endforeach--}}

{{--                                <td>--}}
{{--                                </td>--}}


{{--                                <td>--}}
{{--                                    $120.00--}}
{{--                                </td>--}}
{{--                            </div>--}}

{{--                        </tr>--}}
{{--                    @endforeach--}}

{{--                </table>--}}


{{--            --}}{{-- Image section --}}

{{--
