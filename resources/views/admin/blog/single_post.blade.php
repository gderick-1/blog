@extends('layout.admin_master')
@section('content')
    <div class="container">
        <section id="admin_post">
            <a href="">Edit</a>
            <a href="">Delete</a>
        </section>
        <section class="post">
            <h2>{{ $post->title }}</h2>
            <span class="text-info">{{ $post->author }} | {{ $post->created_at }}</span>
            <p>{{ $post->body }}</p>
        </section>
    </div>
    @endsection