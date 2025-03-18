@extends('admin.master')
@section('content')


                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Create Form</h1>
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
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input class="form-control" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" ></textarea>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-success">Create</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>


@endsection