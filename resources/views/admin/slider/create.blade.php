@extends('admin.layouts.dashboard')

@section('content')
    <section class="content-header">
        <h1>
            <small> Slider</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>
            <li class="active">Slider</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">

            <div class="box box-info">
                <form action="{{ route('sliderStore') }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}
                <input type="hidden" name="_method" value="post" />
                <!-- Left col -->
                    <section class="col-lg-8 connectedSortable">
                        <!-- post create form -->
                        <div class="box-header"> <i class="fa fa-thumb-tack"></i>
                            <h3 class="box-title">Create New Slider</h3>
                        </div>
                        <div class="box-body">

                            <div class="form-group">
                                <label class="control-label" for="slider_text"><i class="fa fa-picture-o post-icon"></i> Slider text </label>
                                <textarea name="slider_text" type="text" class="form-control" id="slider_text"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="slider_image"><i class="fa fa-picture-o post-icon"></i> Slider Image </label>
                                <input name="slider_image" type="file" class="form-control" id="slider_image">
                            </div>


                            <div class="box-footer clearfix">
                                <button type="submit" class="btn btn-success" id="sendEmail">Save<i class="fa fa-arrow-circle-right"></i></button>
                            </div>

                        </div>


                    </section>

                </form>
            </div>
        </div>
    </section> @endsection