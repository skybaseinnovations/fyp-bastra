@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Show</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Add Product
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @yield('show_form')
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
