{{--@extends('adminlte::page')

@section('title', '.: HOME - Manager :.')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
@stop--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | Dashboard 3</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div id="app"></div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/dist/js/adminlte.min.js')}}"></script>
{{--<script src="{{asset('vendor/chart/js/chart.min.js')}}"></script>--}}
<script src="{{asset('vendor/adminlte/dist/js/demo.js')}}"></script>
<script src="{{asset('vendor/adminlte/dist/js/pages/dashboard3.js')}}"></script>
</body>
</html>
