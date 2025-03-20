@extends('admin.master')
@section('content')


    <h1 class="page-header">Services Create Form</h1>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <div class="panel panel-info">
                                        <div class="panel-heading">
                                        <a href="{{ route('service.index')}}" class="btn" style="background-color: black; color: white;">Back</a>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" action="{{ route('service.create.save')}}" method="POST" enctype="multipart/form-data">
                                                @csrf 

                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input class="form-control" type="text" name="name">  
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <input class="form-control" type="file" name="image">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea class="form-control" rows="3" name="description"></textarea>
                                                        </div>
                                                
                                                
                                                        <button type="submit" class="btn btn-success">Create</button>
                                                        <button type="reset" class="btn btn-warning">Reset</button>

                                                    </form>
                                            </div>
                                </div>
                    </div>
                        
                </div>

@endsection