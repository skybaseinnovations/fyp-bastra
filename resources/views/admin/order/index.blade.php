@extends('admin.templates.index')


@section('index_table')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col"> Order no.</th>
                <th scope="col"> Number of Items</th>
                <th scope="col">Payment Reference Id</th>
                <th scope="col" class="">Payment Method</th>
                <th scope="col">Payment Status </th>
                <th scope="col"> Order Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $key => $item)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->number }}</td>
                    <td>{{ isset($item->payment_reference_id)?$item->payment_reference_id:'N/A' }}</td>
                    <td>{{ $item->payment_method }}</td>
                    <td>{{ $item->payment_status}}</td>
                    <td>{{ $item->order_status }}</td>
                    <td>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route($view, $item->id) }}" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-eye"></i>
                                View</a>
                            <a href="{{ route($edit, $item->id) }}" class="btn btn-sm btn-success"> <i
                                    class="fa fa-edit"></i>
                                Edit</a>
                        </div>


                    </td>

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
