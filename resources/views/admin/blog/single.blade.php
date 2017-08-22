@extends('layout.admin_master')
@section('title'){{ $post->title }} @endsection
@section('content')
    <div class="container" style="padding-top: 60px;">
        <section id="admin_post" class="col-sm-6 col-sm-offset-3">
            <a href="{{ route('admin.blog.post.edit', [ 'post_id' => $post->id]) }}" class="btn btn-success">Edit</a>
            <a href="{{ route('admin.blog.post.delete',['post_id' => $post->id]) }}" class="btn btn-danger">Delete</a>
        </section>
        <section class="post col-sm-6 col-sm-offset-3">
            <h2>{{ $post->title }}</h2>
            <span class="text-info">Posted by&nbsp;{{ $post->author }} | {{ $post->created_at->format('y-m-d') }}</span><hr>
            <p>{{ $post->body }}</p>
        </section>
    </div>
    @endsection