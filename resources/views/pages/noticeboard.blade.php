@extends('hdfviews.layouts.master')

@section('content')
    
    <section style="padding-top:131.5px;"></section>
    
    
    
        
    <section id="Publication_page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <ul class="about-pages-menu">
                        <li><a href="../index.html">Home <i class="fa fa-angle-double-right"></i></a></li>
                        <li><a href="newsandadds.html" class="active"> Notice Board </a></li>
                    </ul>
                    
                    <div class="reports">
                        <div class="row">
                            @foreach($notices as $single_notice)

                                <div class="col-md-6">
                                    <div class="single-report">
                                        <!--<h3 style="padding-left:10px;">APPLICATION FORM FOR INTEREST FREE EDUCATION LOAN</h3>-->
                                        <h3>{{ $single_notice->notice_title }}</h3>
                                        <img src="{{url('/frontend/images/notices/'.$single_notice->notice_image)}}" alt="Publication Image">
                                        <a class="download_btn" href="{{url('/pdf/application_form/'.$single_notice->application_form )}}" download> Download </a>
                                    </div>
                                </div>
    <!--
                                    <div class="col-md-6">
                                        <div class="single-report">

                                        </div>
                                    </div>
    -->
                            @endforeach   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


@endsection