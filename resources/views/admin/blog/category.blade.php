@extends('layout.admin_master')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/category.css') }}">
@endsection
@section('content')
    <div class="container-fluid" style="padding-top: 60px;">
        <div class="row">
            <section class="well col-sm-7 col-sm-offset-2" id="category_admin">
                <form class="form-inline" method="post" action="">
                    {{--<legend><h3>Add new category</h3></legend>--}}
                    <div class="form-group">
                        <label class="col-sm-3" for="name">Category Name</label>
                        <span class="input-group-btn">
                            <input name="name" type="text" id="name" class="form-control">
                            <button class="btn btn-success" type="submit">Create category</button>
                            <input name="_token" type="hidden" value="{{Session::token()}}">
                        </span>
                    </div>
                </form>
            </section>

            <section class="list-group well col-sm-7 col-sm-offset-2">
                @foreach($categories as $category)
                    <div class="edit">
                        <article>
                            <div class="" data-id="{{ $category->id }}">
                                    <h3>{{ $category->name }}</h3>
                            </div>

                            <div class="edit">
                                <nav>
                                    {{--<li class="category-edit"><input type="text" ></li><br>--}}
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control col-sm-4">
                                    </div>
                                    <span class="input-group">
                                        <a href="#" class="btn btn-warning">Edit</a>&nbsp;
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </span>
                                </nav>
                            </div>
                        </article><hr>
                    </div>
                  @endforeach
            </section>

            @if($categories->lastPage()> 1)
                <section class="pagination">
                    @if($categories->currentPageurl() !== 1)
                        <a href="{{ $categories->previousPageUrl() }}"><i class="fa fa-caret-left fa-fw"></i></a>
                    @endif
                    @if($categories->currentPageurl() !== $categories->lastPageUrl())
                        <a href="{{ $categories->nextPageUrl() }}"><i class="fa fa-caret-right fa-fw"></i></a>
                    @endif
                </section>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        var token = "{{ Session::token() }}";
    </script>
    <script type="text/javascript" src="{{ URL::to('js/js/category.js') }}"></script>
@endsection