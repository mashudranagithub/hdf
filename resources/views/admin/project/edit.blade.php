@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-10">
        
        <h1>Project Creating Form</h1>



            {!! Form::open(array('route' => ['projectUpdate', $project->id],'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put" />
                    
                <div class="form-group">
                    <label for="cont"> Select Project Type </label>
                    <select name="project_type" id="cont" class="js-example-basic-single form-control">

                            <option value="">SELECT PROJECT TYPE FROM BELOW</option>
                            
                            <option value="tas" @if( $project->project_type == 'tas') {{'selected'}} @endif> TAS </option>
                            <option value="ruslep" @if( $project->project_type == 'ruslep') {{'selected'}} @endif> RUSLEP </option>
                            <option value="supporting" @if( $project->project_type == 'supporting') {{'selected'}} @endif> SUPPORTING PROJECT </option>

                    </select>
                </div>
                
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Project Name </label>
                    <input name="project_name" type="text" class="form-control" id="inputImage" value="{{ $project->project_name }}">
                </div>
                
                
                <div class="form-group">
                    <label for="editor1"><i class="fa fa-paragraph post-icon" aria-hidden="true"></i> Project Details </label>
                    <textarea id="editor1" name="details" rows="30" cols="80" style="visibility: hidden; display: none;">
                                {{--This is my textarea to be replaced with CKEditor.--}}
                                {!! $project->details !!}
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