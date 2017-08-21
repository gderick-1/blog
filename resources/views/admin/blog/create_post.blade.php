@extends('layout.admin_master')
@section('styles')
    <link type="text/css" href="{{ URL::to('css/form.css') }}">
    @endsection

@section('content')
    @include('includes.info-box')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class=" well form-horizontal" action=" {{ route('admin.blog.post.create') }}" method="post" >
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="title">Title</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-header fa-fw"></i></span>
                                <input id="title" name="title" {{ $errors->has('title') ? 'class=has-error' : '' }} value="{{ Request::old('title') }}" class="form-control"  type="text" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="author">Author</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input id="author" name="author" {{ $errors->has('author') ? 'class=has-error' : '' }} value="{{ Request::old('author') }}"class="form-control"  type="text" >
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
                                <button type="button" class="btn btn-primary">Add</button>
                                <input type="hidden" id="categories" name="categories">
                                {{--<div class="added_category">
                                    <ul></ul>
                                </div>--}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="body">Body</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                {{--<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>--}}
                                <textarea name="body" id="body" {{ $errors->has('body') ? 'class=has-error' : '' }} rows="12" cols="42">{{ Request::old('body') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-5">
                            <button type="submit" class="btn btn-success">Create Post</button>
                            <input name="_token" type="hidden" value="{{Session::token()}}">
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