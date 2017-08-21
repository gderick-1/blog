{{--<!doctype html>--}}
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Fonts -->
{{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

<!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/common.css')}}">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container">
    @include('includes.admin_header')
</div>

<div class="admin">
    @yield('content')
</div>
{{--@include('includes.footer')--}}
<script type="text/javascript">
    var baseUrl = "{{URL::to('/')}}";
</script>
@yield('scripts')
<script src="{{URL::to('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::to('js/bootstrap.min.js')}}"></script>
</body>
</html>
