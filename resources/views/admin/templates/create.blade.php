@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <div class="container">
        <div class="col-6 mx-auto">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger opacity-3" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Add Product
        </div>
        <div class="card-body">
            <form action="{{ route($action) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @yield('create_form')
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script type="text/javascript">
        $("document").ready(function() {
            setTimeout(function() {
                $("div.alert") - > remove();
            }, 3000);
        });
    </script>
@stop
