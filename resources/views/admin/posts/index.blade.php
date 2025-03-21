@extends('admin.master')
@section('content')


    <h1 class="page-header">Posts Table</h1>


                <div class="col-lg-12 col-md-12 col-sm-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('post.create')}}" class="btn btn-success">Create</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>T/R</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>
                                                <img width="100px" src="{{ asset ('assets/img/'.$post->image )}}" alt="">
                                            </td>
                                            <td>{{ $post->description }}</td>
                                            <td>
                                                <a href="" class="btn btn-primary">Show</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('post.edit',['id' => $post->id ])}}" class="btn btn-warning">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('post.delete',['id' => $post->id ])}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>

@endsection