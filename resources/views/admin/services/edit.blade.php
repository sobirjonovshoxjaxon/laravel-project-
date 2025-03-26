@extends('admin.master')
@section('content')


    <h1 class="page-header">Services Edit Form</h1>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <div class="panel panel-info">
                                        <div class="panel-heading">
                                        <a href="{{ route('service.index')}}" class="btn" style="background-color: black; color: white;">Back</a>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" action="{{ route('service.update')}}" method="POST" enctype="multipart/form-data">
                                                @csrf 

                                                        <div class="form-group">
                                                            <label>Name uz</label>
                                                            <input class="form-control" type="text" name="name_uz" value="{{ $service->name_uz }}">  
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Name ru</label>
                                                            <input class="form-control" type="text" name="name_ru" value="{{ $service->name_ru }}">  
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Name en</label>
                                                            <input class="form-control" type="text" name="name_en" value="{{ $service->name_en }}">  
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <input class="form-control" type="file" name="image">
                                                            <img width="100px" src="{{ asset('assets/img/'.$service->image )}}" alt="">
                                                        </div>


                                                        <div class="form-group">
                                                            <label>Description Uz</label>
                                                            <textarea class="form-control" rows="3" name="description_uz">{{ $service->description_uz }}</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Description Ru</label>
                                                            <textarea class="form-control" rows="3" name="description_ru">{{ $service->description_ru }}</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Description En</label>
                                                            <textarea class="form-control" rows="3" name="description_en">{{ $service->description_en }}</textarea>
                                                        </div>

                                                        <input type="hidden" value="{{ $service->id }}" name="serviceId">
                                                
                                                        <button type="submit" class="btn btn-warning">Edit</button>
                                                        <button type="reset" class="btn btn-primary">Reset</button>

                                                    </form>
                                            </div>
                                </div>
                    </div>
                        
                </div>

@endsection