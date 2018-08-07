@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-8">



            {!! Form::open(array('route' => 'gallaryStore','method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="cont">Select Gallary Name</label>
                    <select name="gallary_name" id="cont" class="js-example-basic-single form-control">

                            <option value="">SELECT GALLARY NAME FROM BELOW</option>
                            <option value="management">MANAGEMENT</option>
                            <option value="tas">TAS</option>
                            <option value="ruslep">RUSLEP</option>
                            <option value="supporting">SUPPORTING PROJECTS</option>

                    </select>
                </div>
                

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