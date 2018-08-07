@extends('admin.layouts.dashboard')

@section('content')

    @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            <p>{{ $msg }}</p>
        </div>
    @endif


    <div class="row">
        <div class="col-md-8">
            
            <h2>Edit Management/Director for Homepage</h2>

            {!! Form::open(array('route' => ['homemanagementUpdate', $management_post->id ],'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                
                <div class="form-group">
                    <label for="add-c"> Name </label>
                    <input type="text" class="form-control" name="name" value="{{ $management_post->name }}">
                </div>
                
                <div class="form-group">
                    <img src="{{ url('/frontend/images/homemanagement/'.$management_post->image )}}" alt="Management Image">
                    <br>
                    <label for="add-c"> Image </label>
                    <input type="file" name="image">
                </div>
                
                <div class="form-group">
                    <label for="add-c"> Designation </label>
                    <input type="text" class="form-control" name="designation" value="{{ $management_post->designation }}">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Update </button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection