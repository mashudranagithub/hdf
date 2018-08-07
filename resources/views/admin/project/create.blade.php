@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-10">
        
        <h1>Project Creating Form</h1>



            {!! Form::open(array('route' => 'projectStore','method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="cont"> Select Project Type </label>
                    <select name="project_type" id="cont" class="js-example-basic-single form-control">

                            <option value="">SELECT PROJECT TYPE FROM BELOW</option>
                            
                            <option value="tas"> TAS </option>
                            <option value="ruslep"> RUSLEP </option>
                            <option value="supporting"> SUPPORTING PROJECT </option>

                    </select>
                </div>
                
                
                <div class="form-group">
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Project Name </label>
                    <input name="project_name" type="text" class="form-control" id="inputImage">
                </div>
                
                
                <div class="form-group">
                    <label for="editor1"><i class="fa fa-paragraph post-icon" aria-hidden="true"></i> Project Details </label>
                    <textarea id="editor1" name="details" rows="30" cols="80" style="visibility: hidden; display: none;">
                                {{--This is my textarea to be replaced with CKEditor.--}}
                    </textarea>
                    <div id="cke_editor1" class="cke_1 cke cke_reset cke_chrome cke_editor_editor1 cke_ltr cke_browser_webkit" dir="ltr" lang="en" role="application" aria-labelledby="cke_editor1_arialbl"><span id="cke_editor1_arialbl" class="cke_voice_label">Rich Text Editor, editor1</span> </div>
                </div>

                


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection