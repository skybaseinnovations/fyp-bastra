@extends('admin.templates.index')


@section('index_table')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Product Id</th>
                <th scope="col">Order Id</th>
                <th scope="col" class="">Total Amount</th>
                <th scope="col">Quantity</th>
                <th scope="col" class=""> Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $key => $item)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $item->product_id }}</td>
                    <td>{{ $item->order_id }}</td>
                    <td>{{ $item->total_amount }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>@include('admin.templates.index_action')</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="w-100 mt-3 d-flex align-items-center mx-auto">
        <span class="d-inline mx-auto">
            {{ $items->links() }}
        </span>
    </div>
@stop
