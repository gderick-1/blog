@extends('layout.master')
@section('title')Contact @endsection

@section('styles')
    <link rel="stylesheet" href="{{URL::to('css/form.css')}}">
@endsection
@section('content')
    @include('includes.info-box')
    <div class="container">
        <div class="row">
            <div class="col-md-9" id="top">
                <form class="form-horizontal" action="" method="post" id="contact_id">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Name</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input id="name" name="name"  class="form-control"  type="text" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Email</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="email" name="email"  class="form-control"  type="text" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Subject</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-header"></i></span>
                                <input id="subject" name="subject"  class="form-control"  type="text" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="message">Your Message</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                {{--<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>--}}
                                <textarea class="form-control" name="message" id="message" rows="10"></textarea>
                                {{--<input name="name"  class="form-control"  type="text" >--}}
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary col-md-offset-3" >Submit message</button>
                    <input type="hidden" value="{{Session::token()}}" name="_token">
                </form>
            </div>
        </div>
    </div>

@endsection