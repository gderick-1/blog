@extends('layout.master')
@section('title') {{--{{ $post->title }}--}}Article @endsection
@section('content')
    <div class="container">
        <div class="row">
            {{--<section class="col-md-3" --}}{{--style="background: #a24;"--}}{{-- id="top">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nulla gravida rhoncus est in sollicitudin.
                    Integer id lobortis diam. Aenean ac consequat neque.
                    In auctor tellus nisl, ac dapibus justo posuere ut.
                    Fusce blandit lacinia felis et fermentum.
                    Quisque sollicitudin interdum molestie.
                    Phasellus eu sem feugiat, tempus arcu id, suscipit velit.
                    Integer cursus fermentum sem quis placerat.
                    Maecenas tristique dui neque, ut lobortis neque porta id.
                    Aenean viverra augue id purus ultrices porta.
                    Vestibulum porttitor ipsum id purus laoreet viverra.
                    Proin vehicula pretium erat.
                    Nam quis elit at eros mollis ultrices eget sed tortor.
                    Sed iaculis nulla a rutrum ultrices.
                    Phasellus laoreet enim et sem venenatis, et gravida eros blandit.
                    Duis sollicitudin elit risus, fringilla dignissim nunc cursus ac.</p>
            </section>--}}
            <section class="col-md-5" id="top">
                {{--<div class="panel panel-default">

                </div>--}}
                @foreach($posts as $post)
                <article>
                    <h3>{{$post -> title}}</h3>
                    <span class="nv-subtitle">{{ $post -> author }} | {{ $post  -> created_at }}</span>
                    <p>{{ $post -> body }}</p>
                    <a href="#">Read more</a>
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

            <section class="col-md-3" id="top">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nulla gravida rhoncus est in sollicitudin.
                    Integer id lobortis diam. Aenean ac consequat neque.
                    In auctor tellus nisl, ac dapibus justo posuere ut.
                    Fusce blandit lacinia felis et fermentum.
                    Quisque sollicitudin interdum molestie.
                    Phasellus eu sem feugiat, tempus arcu id, suscipit velit.
                    Integer cursus fermentum sem quis placerat.
                    Maecenas tristique dui neque, ut lobortis neque porta id.
                    Aenean viverra augue id purus ultrices porta.
                    Vestibulum porttitor ipsum id purus laoreet viverra.
                    Proin vehicula pretium erat.
                    Nam quis elit at eros mollis ultrices eget sed tortor.
                    Sed iaculis nulla a rutrum ultrices.
                    Phasellus laoreet enim et sem venenatis, et gravida eros blandit.
                    Duis sollicitudin elit risus, fringilla dignissim nunc cursus ac.</p>
            </section>
        </div>

    </div>

    @endsection