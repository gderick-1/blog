{{--<!doctype html>--}}
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
<!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/common.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/form.css')}}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container">
    @include('includes.header')
</div>

<div class="main">
    @yield('content')
</div>
@include('includes.footer')
<script src="{{URL::to('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::to('js/bootstrap.min.js')}}"></script>
</body>
</html>
