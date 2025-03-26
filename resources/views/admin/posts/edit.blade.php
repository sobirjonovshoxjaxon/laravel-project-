@extends('admin.master')
@section('content')


                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Form</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('post.table')}}" class="btn" style="background-color: black; color: white;">Back</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">

                                    <form action="{{ route('post.update')}}" role="form" method="POST" enctype="multipart/form-data">
                                        @csrf 

                                        <div class="form-group">
                                            <label>Title Uz</label>
                                            <input class="form-control" name="title_uz" value="{{ $post->title_uz }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Title Ru</label>
                                            <input class="form-control" name="title_ru" value="{{ $post->title_ru }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Title En</label>
                                            <input class="form-control" name="title_en" value="{{ $post->title_en }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input class="form-control" type="file" name="image">
                                            <img style="width: 100px" src="{{ asset('assets/img/'.$post->image)}}" alt="">
                                        </div>

                                        <div class="form-group">
                                            <label>Description Uz</label>
                                            <textarea class="form-control" name="description_uz">{{ $post->description_uz }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Description Ru</label>
                                            <textarea class="form-control" name="description_ru">{{ $post->description_ru }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Description En</label>
                                            <textarea class="form-control" name="description_en">{{ $post->description_en }}</textarea>
                                        </div>

                                        <input type="hidden" value="{{ $post->id }}" name="postId">
                                       
                                        <button type="submit" class="btn btn-warning">Edit</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>


@endsection