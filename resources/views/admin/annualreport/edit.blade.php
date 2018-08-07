@extends('admin.layouts.dashboard')

@section('content')
    
    <section class="content-header">
        <h1 style="margin-bottom:20px;color:#399;">
            Add New Image in Annual Publication
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
    </section>

    <div class="row">
        <div class="col-md-6">



            {!! Form::open(array('route' => ['annualreportUpdate', $annual_post->id],'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <img src="{{url('/frontend/images/publication/annual/'.$annual_post->annual_image)}}" alt="Report Image"> <br>
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Annual Report Image </label>
                    <input name="annual_image" type="file" class="form-control" id="inputImage">
                </div>

                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-file-pdf-o"></i> Annual Report PDF File </label>
                    <input name="annual_pdf" type="file" class="form-control" id="inputImage">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection