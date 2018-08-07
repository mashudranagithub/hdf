@extends('admin.layouts.dashboard')

@section('content')

    @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            <p>{{ $msg }}</p>
        </div>
    @endif


    <div class="row">
        <div class="col-md-8">
            
            <h2>Create New Project</h2>

            {!! Form::open(array('route' => ['homeprojectUpdate', $project_post->id ],'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                
                <div class="form-group">
                    <label for="add-c"> Project Name </label>
                    <input type="text" class="form-control" name="projectname" value="{{ $project_post->projectname }}">
                </div>
                
                <div class="form-group">
                    <img src="{{url('/frontend/images/homeprojects/'.$project_post->image )}}" alt="Project Image">
                    <br>
                    <label for="add-c"> Project Image </label>
                    <input type="file" name="image">
                </div>

                <div class="form-group">
                    <label for="editor1"><i class="fa fa-paragraph post-icon" aria-hidden="true"></i> Project Details </label>
                    <textarea id="editor1" name="details" rows="10" cols="80" style="visibility: hidden; display: none;">
                                {{--This is my textarea to be replaced with CKEditor.--}}
                                
                                {{ $project_post->details }}
                    </textarea>
                    <div id="cke_editor1" class="cke_1 cke cke_reset cke_chrome cke_editor_editor1 cke_ltr cke_browser_webkit" dir="ltr" lang="en" role="application" aria-labelledby="cke_editor1_arialbl"><span id="cke_editor1_arialbl" class="cke_voice_label">Rich Text Editor, editor1</span> </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection