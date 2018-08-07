@extends('hdfviews.layouts.master')

@section('content')

    <!-- Strat Slider Section -->
    <section id="slider">
        <div class="tp-banner-container">
            <div class="tp-banner" style="height:auto;">
                <ul>
                   
                   @foreach($sliders as $single_slider)
                    <li>
                        <img src="{{url('/frontend/images/slider/'.$single_slider->slider_image)}}" alt="laptopmockup_sliderdy">
                        <div class="tp-caption largeHeadingWhite sfl str tp-resizeme start" data-x="left" data-y="center" data-voffset="-40" data-speed="1200" data-start="950" data-easing="easeInOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="800" data-endeasing="easeInOutExpo">
                           <p>
                                <span class="typer" id="main" data-words="{{ $single_slider->slider_text }}" data-colors="white" data-delay="100" data-deleteDelay="1000"></span>
                                <span class="cursor" data-owner="main"></span>
                           </p>
                        </div>
                        <div class="tp-caption sfb tp-resizeme start" data-x="left" data-hoffset="0" data-y="center" data-voffset="90" data-speed="1200" data-start="1750" data-easing="easeInOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>
    <!-- End Slider Section -->
    
    
    <section id="Whoweare">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <h2>Who We Are</h2>
                            </div>
                        </div>
                        
                        <div class="col-md-7">
                            {!! $who->who_details !!}

                            <a href="{{route('aboutpage')}}" class="btn my-btn animated bounceInDown">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-md-5">
                            <div class="about_image">
                                <img src="{{url('/frontend/images/who/'.$who->who_image)}}" alt="Who Image">
                            </div>
                        </div>
        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="section-heading">
                        <h2>Notice</h2>
                    </div>
                    <div class="noticeboard">
                       
                        @foreach($notices as $single_notice)
                        <div class="single-notice">
                            <a href="{{route('noticeboardpage')}}">
                                <h3> {{ $single_notice->notice_title }} </h3>
                            </a>
                        </div>
                        @endforeach
                        
                        <a href="{{route('noticeboardpage')}}" class="btn my-btn animated bounceInDown">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <!--  Start Features and News  -->
    <section id="Newsandevents">
        <div class="container">                        

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="section-heading">
                                    <h2>News & Events</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="newsdetail">
<!--                                    <p>The most significant programme of the Foundation Talent Assistance Scheme (TAS) is directed with the aim of providing financial support in the form of interest-free loan to financially disadvantaged but meritorious students, mostly from rural areas. The scheme is significant in that it facilitates the underprivileged talents to fulfill their cherished dream of continuing their education further after completing the SSC level. Every year 60 students, 30 girls and 30 boys, from the level of HSC first year are offered the award of interest-free loan. The assistance continues till the completion of their graduation/post graduation degree without any break. A total of 1080 students have so far been enrolled as member of TAS under 30 batches, covering the period from 1985 to 2013. Earlier the project was belonged to now defunct BCCI Foundation. It was carried over to HDF after its reestablishment in 1994.</p>-->

                                {!! $news->news_details !!}
<!--
                                    <a href="{{route('noticeboardpage')}}" class="btn my-btn animated bounceInDown">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </a>
-->
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="newsimage"> <img src="{{url('frontend/images/news/'.$news->news_image)}}" alt="News Image"> </div>
                            </div>
                        </div>
        </div>
    </section>
    <!--  End Features and News  -->
    
    
    <!--  Start Projects Section  -->
    <section id="Projects">
        <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                   <div class="section-heading">
                       <h2>Projects</h2>
                   </div>
               </div>
               
                @foreach($homepageproject as $single_project)
                <div class="col-md-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="{{url('/frontend/images/homeprojects/'.$single_project->image)}}" alt="Project Image">
                        </div>
                        <h3>{{ $single_project->projectname }}</h3>
                        
                        {!! $single_project->details !!}
                        
                        <a href="{{route('tasprojectpage')}}" class="btn my-btn animated bounceInDown">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!--  End Projects Section  -->
    
    
    <!--  Start Staff section  -->
    <section id="Staff">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading">
                        <h2> Management </h2>
                    </div>
                </div>
                
                
                @foreach($homepagemanagement as $single_management)
                
                <div class="col-md-3">
                    <div class="single-staff">
                        <img src="{{url('/frontend/images/homemanagement/'.$single_management->image )}}" alt="Staff Image">
                        <h3> {{ $single_management->name }} </h3>
                        <h5> {{ $single_management->designation }} </h5>
                    </div>
                </div>
                
                @endforeach
                
                
                
                <div class="col-md-12 text-center">
                    <a href="{{route('aboutpage')}}" class="btn my-btn animated bounceInDown">
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    <!--  End Staff section  -->

@endsection