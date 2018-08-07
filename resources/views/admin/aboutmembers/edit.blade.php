@extends('admin.layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-8">
        
        <h1>Member Creating Form</h1>



            {!! Form::open(array('route' => ['aboutmemberUpdate', $member->id],'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                
                <div class="form-group">
                    <label for="cont"> Select Member Type </label>
                    <select name="member_type" id="cont" class="js-example-basic-single form-control">

                            <option value="">SELECT MEMBER TYPE FROM BELOW</option>
                            
                            <option value="main_management" @if( $member->member_type == 'main_management') {{'selected'}} @endif> Main Management </option>
                            <option value="present_governing_board" @if( $member->member_type == 'present_governing_board') {{'selected'}} @endif> Present Governing Board </option>
                            
                            <option value="sponsor_membership" @if( $member->member_type == 'sponsor_membership') {{'selected'}} @endif> Sponsor Membership </option>
                            <option value="govt_official_membership" @if( $member->member_type == 'govt_official_membership') {{'selected'}} @endif> Government Official Membership </option>
                            <option value="private_membership" @if( $member->member_type == 'private_membership') {{'selected'}} @endif> Private Membership </option>
                            <option value="social_membership" @if( $member->member_type == 'social_membership') {{'selected'}} @endif> Social Membership </option>
                            
                            <option value="lest_forget" @if( $member->member_type == 'lest_forget') {{'selected'}} @endif> lest We Forget </option>
                            
                            <option value="first_ten_sponsors" @if( $member->member_type == 'first_ten_sponsors') {{'selected'}} @endif> First Ten Sponsors </option>

                    </select>
                </div>
                

                <div class="form-group">
                    <label class="control-label" for="inputName"><i class="fa fa-picture-o post-icon"></i> Member Name  </label>
                    <input name="name" type="text" class="form-control" id="inputName" value="{{ $member->name }}">
                </div>
                
                <div class="form-group">
                    <label for="editor1"><i class="fa fa-paragraph post-icon" aria-hidden="true"></i> Member Details </label>
                    <textarea id="editor1" name="details" rows="10" cols="80" style="visibility: hidden; display: none;">
                                {{--This is my textarea to be replaced with CKEditor.--}}
                                
                                 {!! $member->details !!}
                                
                    </textarea>
                    <div id="cke_editor1" class="cke_1 cke cke_reset cke_chrome cke_editor_editor1 cke_ltr cke_browser_webkit" dir="ltr" lang="en" role="application" aria-labelledby="cke_editor1_arialbl"><span id="cke_editor1_arialbl" class="cke_voice_label">Rich Text Editor, editor1</span> </div>
                </div>

                <div class="form-group">
                    <img src="{{ url('/frontend/images/aboutpage/members/'.$member->image) }}" alt="Member Image">
                    <br>
                    <label class="control-label" for="inputImage"><i class="fa fa-picture-o post-icon"></i> Member Image </label>
                    <input name="image" type="file" class="form-control" id="inputImage">
                </div>
                
                
                <div class="notice">
                    <p style="color:red;text-transform:capitalize;font-size:20px;font-weight:700;"> Rename Your Image name as a Unique name.</p>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Update </button>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection