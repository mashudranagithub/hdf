@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-10">
        
        <h1>Staff Creating Form</h1>



            {!! Form::open(array('route' => ['staffUpdate', $staff->id ],'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Name </label>
                    <input value="{{ $staff->name }}" name="name" type="text" class="form-control" id="inputImage">
                </div>
                                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Designation </label>
                    <input value="{{ $staff->designation }}" name="designation" type="text" class="form-control" id="inputImage">
                </div>
                                
                <div class="form-group">
                    <img src="{{url('/frontend/images/staffs/'.$staff->image )}}" alt="Staff Image">
                    <br>
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Image </label>
                    <input name="image" type="file" class="form-control" id="inputImage">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection