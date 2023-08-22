@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Add Product
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route($action, $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @yield('edit_form')
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @yield('scripts')
    <script>
        console.log('Hi!');
    </script>
@stop
