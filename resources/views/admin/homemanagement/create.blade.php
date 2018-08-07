@extends('admin.layouts.dashboard')

@section('content')

    @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            <p>{{ $msg }}</p>
        </div>
    @endif


    <div class="row">
        <div class="col-md-8">
            
            <h2>Create New Management/Director for Homepage</h2>

            {!! Form::open(array('route' => 'homemanagementStore','method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="add-c"> Name </label>
                    <input type="text" class="form-control" name="name">
                </div>
                
                <div class="form-group">
                    <label for="add-c"> Image </label>
                    <input type="file" name="image">
                </div>
                
                <div class="form-group">
                    <label for="add-c"> Designation </label>
                    <input type="text" class="form-control" name="designation">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection