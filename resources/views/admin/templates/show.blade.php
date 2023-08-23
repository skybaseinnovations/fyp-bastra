@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Show</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Show Product
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="" enctype="multipart/form-data">
                        @csrf
                        @yield('show_form')

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
