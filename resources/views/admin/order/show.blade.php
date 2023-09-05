@extends('admin.templates.show')

@section('show_form')

    <div class="form-group">
        <div class="row">

            <div class="col-md-8">
                <div class="border shadow p-3 rounded-3 w-50 my-3">
                    <label for="">Order Number : {{ $item->number}}</label><br>
                    <label for="">User Id : {{ $item->user_id}}</label><br>
                    <label for="">Order Location : {{ $item->location}}</label><br>
                    <label for="">Payment Reference Id : {{ $item->payment_referenceid}}</label><br>
                    <label for="">Payment Status : {{ $item->payment_status}}</label><br>
                    <label for="">Order Status : {{ $item->order_status}}</label><br>
                    <label for="">Total Cost : {{ $item->total}}</label><br>
                </div>
                <label class="mt-4"> Order Details</label>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Order Quantity</th>
                            <th scope="col">Total Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($item->orderItems as $key => $orderItem)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $orderItem->product_title ?? 'N/a' }}</td>
                                <td>{{ $orderItem->quantity ?? 'N/a' }}</td>
                                <td>{{ $orderItem->total_amount ?? 'N/a' }}</td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>


            <div class="col-md-12 ">
                <a onclick="history.back()" class="btn btn-warning float-right">
                    Back</a>
            </div>
        </div>

    </div>
@stop
