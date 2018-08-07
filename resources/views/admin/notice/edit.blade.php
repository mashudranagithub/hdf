@extends('admin.layouts.dashboard')

@section('content')

    @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            <p>{{ $msg }}</p>
        </div>
    @endif


    <div class="row">
        <div class="col-md-8">
            
            <h2>Edit Notice</h2>

            {!! Form::open(array('route' => ['noticeUpdate', $notice_post->id],'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="add-c"> Notice Title </label>
                    <input type="text" class="form-control" name="notice_title" value="{{ $notice_post->notice_title }}">
                </div>
                
                <div class="form-group">
                    <label for="add-c"> Notice Image </label>
                    <input type="file" name="notice_image">
                    <img style="width:auto; height:200px;margin-top:30px;" src="{{url('/frontend/images/notices/'.$notice_post->notice_image )}}" alt="Notice Image">
                </div>
                
                
                
                <div class="form-group">
                    <label for="add-c"> Application Form </label>
                    <input type="file" name="application_form">
                    <p><b>Choose an Application form if need.</b></p>
                </div>

<!--
                <div class="form-group">
                    <label for="editor1"><i class="fa fa-paragraph post-icon" aria-hidden="true"></i> Service Details </label>
                    <textarea id="editor1" name="service_details" rows="10" cols="80" style="visibility: hidden; display: none;">
                                {{--This is my textarea to be replaced with CKEditor.--}}
                    </textarea>
                    <div id="cke_editor1" class="cke_1 cke cke_reset cke_chrome cke_editor_editor1 cke_ltr cke_browser_webkit" dir="ltr" lang="en" role="application" aria-labelledby="cke_editor1_arialbl"><span id="cke_editor1_arialbl" class="cke_voice_label">Rich Text Editor, editor1</span> </div>
                </div>
-->


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection