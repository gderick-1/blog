@extends('layout.admin_master')
@section('styles')
    <link rel="stylesheet" href="{{URL::to('css/modal.css')}}">
@endsection
@section('content')
    <div class="container">
        @include('includes.info-box')
        <div class="panel panel-default">
            <div class="panel panel-heading">
                <nav class="navbar">
                    <ul class="nav navbar-btn">
                        <li><a href="{{ route('admin.blog.create_post') }}" class="btn btn-primary">New post</a></li>
                        <li><a href="{{ route('admin.blog.index') }}" class="btn btn-primary">Show all</a></li>
                    </ul>
                </nav>
            </div>
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
                                                <li><a href="{{ route('admin.blog.post',['post_id' => $post->id, 'end' => 'admin']) }}" class="btn btn-success">View</a></li>
                                                <li><a href="{{ route('admin.blog.post.edit', [ 'post_id' => $post->id]) }}" class="btn btn-warning">Edit</a></li>
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
        </div>

        <!-- For Messages -->
        <div class="panel panel-default">
            <div class="panel panel-heading">
                <nav>
                    <ul>
                        <li><a href="#" class="btn btn-primary">Show all messages</a></li>
                    </ul>
                </nav>
            </div>
            <section class="panel panel-body">
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
                                        <li><a href="#" class="btn btn-success">View</a></li>
                                        <li><a href="#" class="btn btn-danger">Delete</a></li>
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