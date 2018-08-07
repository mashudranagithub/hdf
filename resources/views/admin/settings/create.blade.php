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
            <form action="{{route('settingsUpdate')}}" method="post" enctype="multipart/form-data">

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


                        {{-- Logo--}}
                        <div class="form-group">
                            <label class="control-label" for="logo"><i class="fa fa-envira"></i> Logo</label>

                            @if(!empty($data))
                                <input name="logo" value="{{ $data->logo }}" type="file" class="form-control" id="inputlogo">
                                <img src="{{ ('/frontend/images/logo/'.$data->logo) }}" alt="Logo">
                                <div class="dash-logo">{{ $data->logo  }}</div>
                            @else
                                <input name="logo" type="file" class="form-control" id="inputlogo" placeholder="Enter Logo Here">
                            @endif
                        </div>
                        {{-- End Logo--}}



                        {{-- Email--}}
                        <div class="form-group">
                            <label class="control-label" for="email"><i class="fa fa-envelope post-icon"></i> Email</label>

                            @if(!empty($data))
                                <input name="email" value="{!! $data->email !!}" type="email" class="form-control" id="email">
                            @else
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email Here">
                            @endif
                        </div>
                        {{-- End Email--}}


                        {{-- PhoneNumber --}}
                        <div class="form-group">
                            <label class="control-label" for="phone"><i class="fa fa-phone post-icon"></i> Phone </label>
                            @if(!empty($data))
                                <input name="phone" value="{!! $data->phone !!}" type="text" class="form-control" id="phone" placeholder="Phone">
                            @else
                                <input name="phone" type="number" class="form-control" id="phone" placeholder="Phone">
                            @endif
                        </div>
                        {{-- End PhoneNumber--}}


                        {{-- Address --}}
                        <div class="form-group">
                            <label for="editor1"><i class="fa fa-paragraph post-icon" aria-hidden="true"></i> Address </label>
                            @if(!empty($data))
                            <textarea id="editor1" name="address" rows="10" cols="80" style="visibility: hidden; display: none;">
                            {{--<!--This is my textarea to be replaced with CKEditor.-->--}}
                                {!! $data->address !!}
                            </textarea>
                            <div id="cke_editor1" class="cke_1 cke cke_reset cke_chrome cke_editor_editor1 cke_ltr cke_browser_webkit" dir="ltr" lang="en" role="application" aria-labelledby="cke_editor1_arialbl"><span id="cke_editor1_arialbl" class="cke_voice_label">Rich Text Editor, editor1</span> </div>
                            @else
                                <textarea id="editor1" name="address" rows="10" cols="80" style="visibility: hidden; display: none;"></textarea>
                                <div id="cke_editor1" class="cke_1 cke cke_reset cke_chrome cke_editor_editor1 cke_ltr cke_browser_webkit" dir="ltr" lang="en" role="application" aria-labelledby="cke_editor1_arialbl"><span id="cke_editor1_arialbl" class="cke_voice_label">Rich Text Editor, editor1</span> </div>
                                @endif
                        </div>
                        {{-- End Address --}}

                    </div>



                </section>

                <section class="col-lg-5 connectedSortable">

                    <div class="box-header">
                        <i class="fa fa-thumb-tack"></i>
                        <h4 class="box-title">Social Links</h4>
                    </div>

                    <div class="box-body">

                        {{--facebook--}}
                        <div class="form-group">
                            <label for="facebook"> <i class="fa fa-facebook"></i> Facebook </label>
                            @if(!empty($data))
                                <input type="url" value="{{ $data->facebook }}" name="facebook" id="facebook" placeholder="Paste your facebook link here." class="form-control">
                                @else
                                <input type="url" name="facebook" id="facebook" placeholder="Paste your facebook link here." class="form-control">
                            @endif
                        </div>
                        {{--End facebook--}}


                        {{--Twitter--}}
                        <div class="form-group">
                            <label for="twitter"> <i class="fa fa-twitter"></i> twitter </label>
                            @if(!empty($data))
                                <input type="url" value="{{ $data->twitter }}" name="twitter" id="twitter" placeholder="Paste your twitter link here." class="form-control">
                            @else
                                <input type="url" name="twitter" id="twitter" placeholder="Paste your twitter link here." class="form-control">
                            @endif
                        </div>
                        {{--End Twitter--}}


                        {{--Youtube--}}
                        <div class="form-group">
                            <label for="youtube"> <i class="fa fa-youtube"></i> youtube </label>
                            @if(!empty($data))
                                <input type="url" value="{{ $data->youtube }}" name="youtube" id="youtube" placeholder="Paste your youtube link here." class="form-control">
                            @else
                                <input type="url" name="youtube" id="youtube" placeholder="Paste your youtube link here." class="form-control">
                            @endif
                        </div>
                        {{--End Youtube--}}


                        {{--linkedin--}}
                        <div class="form-group">
                            <label for="linkedin"> <i class="fa fa-linkedin-square"></i> linkedin </label>
                            @if(!empty($data))
                                <input type="url" value="{{ $data->linkedin }}" name="linkedin" id="linkedin" placeholder="Paste your linkedin link here." class="form-control">
                            @else
                                <input type="url" name="linkedin" id="linkedin" placeholder="Paste your linkedin link here." class="form-control">
                            @endif
                        </div>
                        {{--End linkedin--}}


                        {{--Google Plus--}}
                        <div class="form-group">
                            <label for="google_plus"> <i class="fa fa-google-plus"></i> Google Plus </label>
                            @if(!empty($data))
                                <input type="url" value="{{ $data->google_plus }}" name="google_plus" id="google_plus" placeholder="Paste your Google Plus link here." class="form-control">
                            @else
                                <input type="url" name="google_plus" id="linkedin" placeholder="Paste your Google Plus link here." class="form-control">
                            @endif
                        </div>
                        {{--End Google Plus--}}

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