@extends('layout.admin_master')
@section('style')
    <link rel="stylesheet" href="{{URL::to('css/form.css')}}">
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-1" style="padding-top: 60px;">
                @include('includes.info-box')
                <section id="post_admin" >
                    <a href="{{ route('admin.blog.create_post') }}" class="btn btn-primary">New post</a>
                </section><br>

                <section class="well">
                        @if(count($posts) == 0)
                            {{-- If no posts --}}
                            <li>No post</li>
                        @else
                            @foreach($posts as $post)
                                {{-- If there is posts --}}

                                    <article>
                                        <div class="post_info">
                                            <h3>{{ $post->title }}</h3>
                                            <span class="panel-info">
                                                <img src="{{ URL::to('img/man.jpeg') }}" class="img-circle" height="50" width="50" alt="avatar" title="{{ $post->author }}">
                                                {{ $post->author }} | {{ $post->created_at->format('y-m-d')}}</span>
                                            <p>{{ $post->body }}</p>
                                        </div>
                                        <div class="edit">
                                            <nav>
                                                <ul>
                                                    <a href="{{ route('admin.blog.post',['post_id' => $post->id, 'end' => 'admin']) }}" class="btn btn-success">View</a>
                                                    <a href="{{ route('admin.blog.post.edit', [ 'post_id' => $post->id]) }}" class="btn btn-warning">Edit</a>
                                                    <a href="{{ route('admin.blog.post.delete', ['post_id'=>$post->id]) }}" class="btn btn-danger">Delete</a>
                                                </ul>
                                            </nav>
                                        </div>
                                    </article><hr>
                            @endforeach
                        @endif

                </section>

                @if($posts->lastPage()> 1)
                    <section class="pagination">
                        @if($posts->currentPageurl() !== 1)
                            <a href="{{ $posts->previousPageUrl() }}"><i class="fa fa-caret-left fa-fw"></i></a>
                        @endif
                        @if($posts->currentPageurl() !== $posts->lastPageUrl())
                            <a href="{{ $posts->nextPageUrl() }}"><i class="fa fa-caret-right fa-fw"></i></a>
                        @endif
                    </section>
                @endif
            </div>
        </div>
    </div>
@endsection