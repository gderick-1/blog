@extends('layout.admin_master')
@section('styles')
    <link rel="stylesheet" href="{{URL::to('css/modal.css')}}">
@endsection
@section('content')
    <div class="container" style="padding-top: 60px;">
        @include('includes.info-box')
        <div class="well col-sm-7 col-sm-offset-1">
            <div class="">
                <nav class="navbar">
                    <ul {{--class="nav navbar-btn"--}}>
                        <a href="{{ route('admin.blog.create_post') }}" class="btn btn-primary" role="button">New post</a>
                        <a href="{{ route('admin.blog.index') }}" class="btn btn-primary" role="button">Show all</a>
                    </ul>
                </nav>
            </div>
            <section class="">
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
                                            {{--Posted by&nbsp;--}}{{ $post->author }} | {{$post->created_at->format('y-m-d')}}</span>
                                        <p class="">{{ $post->body }}</p>
                                    </div>
                                    <div class="edit">
                                        <nav>
                                            <ul>
                                                <a href="{{ route('admin.blog.post',['post_id' => $post->id, 'end' => 'admin']) }}" class="btn btn-success" role="button">View</a>
                                                <a href="{{ route('admin.blog.post.edit', [ 'post_id' => $post->id]) }}" class="btn btn-warning" role="button">Edit</a>
                                                <a href="{{ route('admin.blog.post.delete',['post_id' => $post->id]) }}" class="btn btn-danger" role="button">Delete</a>
                                            </ul>
                                        </nav>
                                    </div>
                                </article><hr>
                        @endforeach
                    @endif
            </section>
        </div>

        <!-- For Messages -->
        <div class="well col-sm-7 col-sm-offset-1">
            <div class="">
                <nav>
                    <ul>
                        <a href="#" class="btn btn-primary">Show all messages</a>
                    </ul>
                </nav>
            </div>
            <section class="">
                <ul>
                    {{-- If no message --}}
                    <li>No Message</li>
                    {{-- If there is posts --}}
                    <li>
                        <article data-message="Body" data-id="ID">
                            <div class="message_info">
                                <h3>Message subject</h3>
                                <span class="panel-info"> Sender:  | Date </span>
                            </div>
                            <div class="edit">
                                <nav>
                                    <ul>
                                        <a href="#" class="btn btn-success" role="button">View</a>
                                        <a href="#" class="btn btn-danger" role="button">Delete</a>
                                    </ul>
                                </nav>
                            </div>
                        </article>
                    </li>
                </ul>
            </section>
        </div>
    </div>
    <div class="modal" id="contact_message_info">
        <button class="btn" id="modal_close">Close</button>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        var token = "{{ Session::token() }}";
    </script>
    <script type="text/javascript" src="{{URL::to('js/js/modal.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/js/contact_message.js')}}"></script>
@endsection