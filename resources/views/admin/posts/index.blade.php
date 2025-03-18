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
                                        <tr>
                                            <td>1</td>
                                            <td>Title</td>
                                            <td>Image</td>
                                            <td>Description</td>
                                            <td>
                                                <a href="" class="btn btn-primary">Show</a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-warning">Edit</a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>

@endsection