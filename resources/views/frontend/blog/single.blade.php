@extends('layout.master')
@section('title') {{ $post->title }} @endsection
@section('content')
    <div class="container">
        <div class="row">
            <section class="col-sm-7 col-sm-offset-1" id="top">
                <div class=""></div>
                <article>
                    <h3>{{ $post->title }}</h3>
                    <span class="nv-subtitle">
                        <img src="{{ URL::to('img/man.jpeg') }}" class="img-circle" height="50" width="50" alt="avatar" title="{{ $post->author }}">
                        {{ $post->author }} | {{ $post->created_at->format('y-m-d') }}</span><hr>
                    <p>{{ $post->body }}</p>
                </article>
            </section>
            @include('includes.section.section')
        </div>
    </div>
@endsection
