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
                <th scope="col"> Image</th>
                <th scope="col" class=""> Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->rate_count }}</td>
                    <td><img src="{{ asset('uploads/' . $item->img_url) }}" alt="" class="rounded"
                            style="width:200px;height:200px;object-fit:cover;"></td>
                    <td>@include('admin.templates.index_action')</td>
                </tr>
            @endforeach


        </tbody>
    </table>
@stop
