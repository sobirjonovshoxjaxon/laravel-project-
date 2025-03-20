@extends('admin.master')
@section('content')

    <h1 class="page-header">Services Table</h1>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('service.create')}}" class="btn btn-success">Create</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>T/R</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($services as $service)
                                        <tr>
                                            <td>{{ $service->id }}</td>
                                            <td>{{ $service->name }}</td>
                                            <td>
                                                <img width="100px" src="{{ asset('assets/img/'.$service->image)}}" alt="">
                                            </td>
                                            <td>{{ $service->description }}</td>
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
                                    @endforeach 

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>

@endsection