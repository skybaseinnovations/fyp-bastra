@extends('front.component.layout');

@section('title', 'Orderhistory')

@section('content')
    <br><br>
    <br>

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
                    
                    @foreach($order->orderItems as $orderItem)
                    <p class="text-center">Order - ID : {{$order->id}}</p>
                        <tr class="gap-3">

                            <td class="text-left" width="auto">
                                <div class="card m-4" style="width: 15rem;">
                                    <img class="card-img-top" src="{{isset($orderItem->product->img_url)? asset('uploads/'.$orderItem->product->img_url):asset('uploads/'.'placeholder.png')}}" alt="Card image cap" style="height: 150px;width: 150px;object-fit: contain;">
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
                            {{-- <td>

                                <form  onsubmit="" class="d-inline" action="{{route('orderitem.delete',$order->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td> --}}

                            <td class="" width="auto">
                                <a href="{{route('cancel.product',$order->id)}}" style="{{( $order->order_status=="Delivered" || $order->order_status=="Cancelled" )? 'display:none;': ''  }}" class="btn btn-danger p-2">Cancel Product</a></td>              
                            </tr>
                    @endforeach
                </table>
            </div>
        @endforeach

    </section>


