@extends('layout.admin_master')
@section('styles')
    <link type="text/css" href="{{ URL::to('css/form.css') }}">
@endsection

@section('content')
    @include('includes.info-box')
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-1" style="padding-top: 60px;">
                <form class="form-horizontal" action=" {{ route('admin.blog.post.update') }}" method="post" >
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="title">Title</label>
                        <div class="col-md-6">

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-header fa-fw"></i></span>
                                <input id="title" name="title" {{ $errors->has('title') ? 'class=has-error' : '' }}
                                value="{{ Request::old('title')? Request::old('title') : isset($post)? $post->title : '' }}"
                                       class="form-control"  type="text" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="author">Author</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input id="author" name="author" {{ $errors->has('author') ? 'class=has-error' : '' }}
                                value="{{ Request::old('author')? Request::old('author') : isset($post)? $post->author : ''}}"class="form-control"  type="text" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="category_option">Category</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                {{--<span class="input-group-addon"><i class="fa fa-header fa-fw"></i></span>--}}
                                <select id="category_option" name="category_option" class="form-control">
                                    {{-- foreach loop to fetch category --}}
                                    <option value="category">Category</option>
                                    <option value="sports">sports</option>
                                    <option value="gambling">Betting</option>
                                    <option value="sure">Sure Bets</option>
                                </select><!--&nbsp;-->
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary">Add category</button>
                                    <input type="hidden" id="categories" name="categories">
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="body">Body</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <textarea name="body" id="body" {{ $errors->has('body') ? 'class=has-error' : '' }} rows="10" cols="50">
                                    {{ Request::old('body')? Request::old('body') : isset($post)? $post->body : '' }}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-5">
                            <button type="submit" class="btn btn-success">Save post</button>
                            <input name="_token" type="hidden" value="{{Session::token()}}">
                            <input name="post_id" type="hidden" value="{{ $post->id }}">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::to('js/js/post.js') }}"></script>
@endsection