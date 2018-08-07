@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-8">



            {!! Form::open(array('route' => ['batchtableUpdate', $batch_member->id ],'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">                

                <div class="form-group">
                    <label for="cont">Select Batch Name</label>
                    <select name="batch_name" id="cont" class="js-example-basic-single form-control">

                            <option value="">SELECT BATCH NAME FROM BELOW</option>
                            
                            @foreach($batch_name as $batch)
                            <option value="{{$batch->name}}" @if( $batch_member->batch_name == $batch->name ) {{'selected'}} @endif>{{$batch->name}}</option>
                            @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Member Name </label>
                    <input value="{{$batch_member->name}}" name="name" type="text" class="form-control" id="inputImage">
                </div>
                
                <div class="form-group">
                    <img src="{{url('/frontend/images/batchmembers/'.$batch_member->image)}}" alt="Member Image">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Member Image </label>
                    <input name="image" type="file" class="form-control" id="inputImage">
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Membership No </label>
                    <input value="{{$batch_member->membership_no}}" name="membership_no" type="text" class="form-control" id="inputImage">
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Degree </label>
                    <input value="{{$batch_member->degree}}" name="degree" type="text" class="form-control" id="inputImage">
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Present Professional Status </label>
                    <input value="{{$batch_member->present_professional_status}}" name="present_professional_status" type="text" class="form-control" id="inputImage">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection