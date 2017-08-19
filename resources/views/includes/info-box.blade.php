@section('styles')
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/common.css')}}">
    @append

@if(Session::has('fail'))
    <section class="info-box alert alert-warning">
        {{Session::get('fail')}}
    </section>
@endif

@if(Session::has('success'))
    <section class="info-box alert alert-success">
        {{Session::get('success')}}
    </section>
@endif

@if(count($errors)>0 )
    <section class="info-box alert alert-danger">
       <ul>
           @foreach($errors->all() as $error )
               <li>{{$error}}</li>
           @endforeach
       </ul>
    </section>
@endif