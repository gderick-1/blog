@extends('layout.admin_master')
@section('style')
    <link rel="stylesheet" href="{{URL::to('css/form.css')}}">
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @include('includes.info-box')
                <section id="post_admin" >
                    <a href="{{ route('admin.blog.create_post') }}" class="btn btn-primary">New post</a>
                </section>

                <section class="panel panel-body">
                    <ul>
                        @if(count($posts) == 0)
                            {{-- If no posts --}}
                            <li>No post</li>
                        @else
                            @foreach($posts as $post)
                                {{-- If there is posts --}}
                                <li>
                                    <article>
                                        <div class="post_info">
                                            <h3>{{ $post->title }}</h3>
                                            <span class="panel-info">{{ $post->author }} | {{$post->created_at}}</span>
                                        </div>
                                        <div class="edit">
                                            <nav>
                                                <ul>
                                                    <li><a href="#" class="btn btn-success">View</a></li>
                                                    <li><a href="#" class="btn btn-warning">Edit</a></li>
                                                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </article>
                                </li>
                            @endforeach
                        @endif
                    </ul>
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