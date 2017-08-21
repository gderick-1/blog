@extends('layout.master')
@section('title') {{ $post->title }} @endsection
@section('content')
    <div class="container">
        <div class="row">
            <section class="col-sm-7 col-sm-offset-1">
                <article>
                    <h3>{{ $post->title }}</h3>
                    <span class="nv-subtitle">Posted by&nbsp;{{ $post->author }} | {{ $post->created_at }}</span>
                    <p>{{ $post->body }}</p>
                </article>
            </section>

            <section class="col-sm-4" style="padding-top: 15px; background-color: #3e4f5c">
                <div class="well">
                    <h3 class="text-uppercase">ads</h3>
                </div>

                <div class="well">
                    <h3 class="text-uppercase">ads</h3>
                </div>

                <div class="well">
                    <h3 class="text-uppercase">ads</h3>
                </div>

                <div class="well">
                    <h3 class="text-uppercase">ads</h3>
                </div>
                <div class="well">
                    <h3 class="text-uppercase">ads</h3>
                </div>
                <div class="well">
                    <h3 class="text-uppercase">ads</h3>
                </div>
                <div class="well">
                    <h3 class="text-uppercase">ads</h3>
                </div>
            </section>
            {{--<div class="col-sm-4" style="padding-top: 15px; background-color: #3e4f5c">

            </div>--}}

           {{-- <div class="col-sm-4" style="padding-top: 15px; background-color: #3e4f5c">
                <div class="well">
                    <h3 class="text-uppercase">ads</h3>
                </div>
            </div>

            <div class="col-sm-4" style="padding-top: 15px; background-color: #3e4f5c">
                <div class="well">
                    <h3 class="text-uppercase">ads</h3>
                </div>
            </div>

            <div class="col-sm-4" style="padding-top: 15px; background-color: #3e4f5c">
                <div class="well">
                    <h3 class="text-uppercase">ads</h3>
                </div>
            </div>--}}

        </div>
    </div>
@endsection
