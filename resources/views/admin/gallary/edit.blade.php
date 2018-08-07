@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h2>Edit Image</h2>

            {!! Form::open(array('route' => ['gallaryUpdate', $image->id],'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                
                <div class="form-group">
                    <label for="cont">Select Gallary Name</label>
                    <select name="gallary_name" id="cont" class="js-example-basic-single form-control">

                            <option value="">SELECT GALLARY NAME FROM BELOW</option>
                            <option value="management"  @if( $image->gallary_name == 'management') {{'selected'}} @endif>MANAGEMENT</option>
                            <option value="tas" @if( $image->gallary_name == 'tas') {{'selected'}} @endif>TAS</option>
                            <option value="ruslep" @if( $image->gallary_name == 'ruslep') {{'selected'}} @endif>RUSLEP</option>
                            <option value="supporting" @if( $image->gallary_name == 'supporting') {{'selected'}} @endif>SUPPORTING PROJECTS</option>

                    </select>
                </div>
                
                
                <img style="width:300px;margin:20px 0;display:inline-block;" src="{{url('/frontend/images/gallary/'.$image->gallary_image )}}" alt="{{ $image->gallary_name }} Image">
                

                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Gallary Image </label>
                    <input name="gallary_image" type="file" class="form-control" id="inputImage">
                </div>
                
                
                <div class="notice">
                    <p style="color:red;text-transform:capitalize;font-size:20px;font-weight:700;">Please Rename Your Image file name as a Unique name before Uploading.</p>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection