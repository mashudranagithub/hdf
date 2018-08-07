@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-8">



            {!! Form::open(array('route' => ['batchUpdate', $batch->id],'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">               

                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Batch Name </label>
                    <input name="name" type="text" class="form-control" id="inputImage" value="{{$batch->name}}">
                </div>
                
                
                <div class="notice">
                    <p style="color:red;text-transform:capitalize;font-size:20px;font-weight:700;">Please Edit your batch name with year.</p>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection