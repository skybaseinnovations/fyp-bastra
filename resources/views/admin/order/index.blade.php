@extends('admin.templates.index')


@section('index_table')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Order Number</th>
                <th scope="col">User Id</th>
                <th scope="col" class="">Location</th>
                <th scope="col">Payment Reference Id</th>
                <th scope="col"> Payment Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $key => $item)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $item->number }}</td>
                    <td>{{ $item->user_id }}</td>
                    <td>{{ $item->location }}</td>
                    <td>{{ $item->payment_reference_id }}</td>
                    <td>{{ $item->payment_status }}</td>
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
