@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-8">



            {!! Form::open(array('route' => 'batchStore','method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}                

                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Batch Name </label>
                    <input name="name" type="text" class="form-control" id="inputImage">
                </div>
                
                
                <div class="notice">
                    <p style="color:red;text-transform:capitalize;font-size:20px;font-weight:700;">Please Create your batch name with year.</p>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection