@extends('admin.templates.index')


@section('index_table')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col" class="">Description</th>
                <th scope="col">Rate Count</th>
                <th scope="col">Product Category</th>
                <th scope="col"> Image</th>
                <th scope="col" class=""> Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $key => $item)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->rate_count }}</td>
                    <td>{{ $item->productCategory->name }}</td>
                    <td><img src="{{ isset($item->img_url) ? asset('uploads/' . $item->img_url) : asset('uploads/' . 'placeholder.png') }}"
                            alt="" class="rounded" style="width:60px;height:60px;object-fit:cover;"></td>
                    <td>

                        @include('admin.templates.index_action')</td>
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
