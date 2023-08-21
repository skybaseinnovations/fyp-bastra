@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                @if (session()->has('message'))
                    <div id="alert" class="alert alert-success">
                        <button class="close" type="button" data-dismiss="alert">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <form class="d-flex" role="search">
                    <input class="form-control mx-2" name="search" type="search" placeholder="Search By Name"
                        aria-label="Search" @if (isset($search)) value="{{ $search }}" @endif>

                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
            <div class="float-right">

                <a class="btn btn-primary" href="{{ route($action) }}">
                    <i class="fa fa-plus"></i>
                    Add {{ $title }}
                </a>
            </div>
        </div>
        <div class="card-body">
            {{-- <h5 class="card-title">Special title treatment</h5> --}}
            @yield('index_table')
            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
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
