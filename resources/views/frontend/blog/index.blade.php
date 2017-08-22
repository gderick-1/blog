@extends('layout.master')
@section('title') {{--{{ $post->title }}--}}Article @endsection
@section('content')
    <div class="container">
        <div class="row">
            <section class="col-sm-7 col-sm-offset-1" id="top">
                {{--<div class="panel panel-default">

                </div>--}}
                @foreach($posts as $post)
                <article>
                    <h3>{{$post -> title}}</h3>
                    <span class="nv-subtitle">
                        <img src="{{ URL::to('img/man.jpeg') }}" class="img-circle" height="50" width="50" alt="avatar" title="{{ $post->author }}">
                        {{ $post->author }} | {{ $post->created_at->format('y-m-d') }}</span><hr>
                    <p>{{ $post -> body }}</p>
                    <a style="text-decoration: none; color: #000;" href="{{ route('blog.single',['post_id' => $post->id, 'end' => 'frontend']) }}">Read more<i class="fa fa-caret-right fa-fw"></i></a>
                </article>
                @endforeach
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
            </section>

            @include('includes.section.section')
    </div>

    @endsection