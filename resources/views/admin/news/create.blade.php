@extends('admin.layouts.dashboard')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <small>Create All Settings</small>
      </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Settings</li>
    </ol>
</section>



@if ($msg = Session::get('msg'))
    <div class="alert alert-success">
        <p>{{ $msg }}</p>
    </div>
@endif


<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">

        <div class="box box-info">
            <form action="{{route('newsUpdate')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="post" />
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    <!-- post create form -->
                    <div class="box-header">
                        <i class="fa fa-thumb-tack"></i>
                        <h3 class="box-title">Create New Settings</h3>
                    </div>

                    <div class="box-body">

                        {{-- News & Events Details Text --}}
                        <div class="form-group">
                            <label for="editor1"><i class="fa fa-paragraph post-icon" aria-hidden="true"></i> News Details </label>
                            
                            @if(!empty($data))
                            <textarea id="editor1" name="news_details" rows="10" cols="80" style="visibility: hidden; display: none;">
                            {{--<!--This is my textarea to be replaced with CKEditor.-->--}}
                                {!! $data->news_details !!}
                            </textarea>
                            <div id="cke_editor1" class="cke_1 cke cke_reset cke_chrome cke_editor_editor1 cke_ltr cke_browser_webkit" dir="ltr" lang="en" role="application" aria-labelledby="cke_editor1_arialbl"><span id="cke_editor1_arialbl" class="cke_voice_label">Rich Text Editor, editor1</span> </div>
                            @else
                                <textarea id="editor1" name="news_details" rows="10" cols="80" style="visibility: hidden; display: none;"></textarea>
                                <div id="cke_editor1" class="cke_1 cke cke_reset cke_chrome cke_editor_editor1 cke_ltr cke_browser_webkit" dir="ltr" lang="en" role="application" aria-labelledby="cke_editor1_arialbl"><span id="cke_editor1_arialbl" class="cke_voice_label">Rich Text Editor, editor1</span> </div>
                                @endif
                        </div>
                        {{-- End News & Events Details Text --}}
                        
                        {{-- News Image--}}
                        <div class="form-group">
                            <label class="control-label" for="logo"><i class="fa fa-envira"></i> News Image </label>
                            @if(!empty($data))
                                <img width="300px;" src="{{ url('/frontend/images/news/'.$data->news_image) }}" alt="News Image">
                            @else
                                <input name="news_image" type="file" class="form-control" id="inputlogo" placeholder="Upload Here">
                            @endif
                                <input name="news_image" type="file" class="form-control" id="inputlogo" placeholder="Upload Here">
                        </div>
                        {{-- End News Image--}}

                    </div>



                </section>




                <section class="col-lg-12 connectedSortable">

                    <div class="box-footer clearfix">
                        <button type="submit" class="pull-right btn btn-success" id="sendEmail">Save<i class="fa fa-arrow-circle-right"></i></button>
                    </div>

                </section>



            </form>
        </div>
    </div>
</section>

@endsection