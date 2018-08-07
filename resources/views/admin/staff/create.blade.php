@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-10">
        
        <h1>Staff Creating Form</h1>



            {!! Form::open(array('route' => 'staffStore','method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Name </label>
                    <input name="name" type="text" class="form-control" id="inputImage">
                </div>
                                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Designation </label>
                    <input name="designation" type="text" class="form-control" id="inputImage">
                </div>
                                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Image </label>
                    <input name="image" type="file" class="form-control" id="inputImage">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection