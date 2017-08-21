@extends('layout.master')
@section('title') {{ $post->title }} @endsection
@section('content')
    <div class="container">
        <div class="row">
            <section class="col-sm-7 col-sm-offset-1" id="top">
                <div class=""></div>
                <article>
                    <h3>{{ $post->title }}</h3>
                    <span class="nv-subtitle">Posted by&nbsp;{{ $post->author }} | {{ $post->created_at->format('y-m-d') }}</span><hr>
                    <p>{{ $post->body }}</p>
                </article>
            </section>
            @include('includes.section.section')
        </div>
    </div>
@endsection
