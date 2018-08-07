@extends('admin.layouts.dashboard')

@section('content')
    
    <section class="content-header">
        <h1 style="margin-bottom:20px;color:#399;">
            Edit Nobin Image and PDF
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
    </section>

    <div class="row">
        <div class="col-md-8">



            {!! Form::open(array('route' => ['nobinUpdate', $nobin->id],'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <div>
                        <img style="width:200px;margin:20px 0;" src="{{ url('/frontend/images/publication/nobin/'.$nobin->nobin_image) }}" alt="Nobin Image">
                    </div>
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Nobin Image </label>
                    <input name="nobin_image" type="file" class="form-control" id="inputImage">
                </div>

                <div class="form-group">
                   
                    <p> <b>Old File Name</b>:: {{ $nobin->nobin_pdf }} </p>
                    <label class="control-label" for="inputImage"><i class="fa fa-file-pdf-o"></i> Nobin PDF File </label>
                    <input name="nobin_pdf" type="file" class="form-control" id="inputImage">
                    
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection