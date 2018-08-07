@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-8">



            {!! Form::open(array('route' => 'batchtableStore','method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}                

                <div class="form-group">
                    <label for="cont">Select Batch Name</label>
                    <select name="batch_name" id="cont" class="js-example-basic-single form-control">

                            <option value="">SELECT BATCH NAME FROM BELOW</option>
                            
                            @foreach($batch_name as $batch)
                            <option value="{{$batch->name}}">{{$batch->name}}</option>
                            @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Member Name </label>
                    <input name="name" type="text" class="form-control" id="inputImage">
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Member Image </label>
                    <input name="image" type="file" class="form-control" id="inputImage">
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Membership No </label>
                    <input name="membership_no" type="text" class="form-control" id="inputImage">
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Degree </label>
                    <input name="degree" type="text" class="form-control" id="inputImage">
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Present Professional Status </label>
                    <input name="present_professional_status" type="text" class="form-control" id="inputImage">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection