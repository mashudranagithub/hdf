@extends('hdfviews.layouts.master')

@section('content')
    
    <section style="padding-top:131.5px;"></section>
    

    
    
    
        
    <section id="Publication_page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <ul class="about-pages-menu">
                        <li><a href="../index.html">Home <i class="fa fa-angle-double-right"></i></a></li>
                        <li><a href="annualreport.html"> Publications <i class="fa fa-angle-double-right"></i></a></li>
                        <li><a href="nobin.html" class="active"> Nobin </a></li>
                    </ul>
                    <h3 class="text-center"> Nobin </h3>
                    
                    <div class="reports">
                        <div class="row">
                          
                            @foreach($nobin as $single_nobin)
                          
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="{{url('/pdf/publication/nobin/'.$single_nobin->nobin_pdf )}}" target="_blank">
                                        <img src="{{url('frontend/images/publication/nobin/'.$single_nobin->nobin_image )}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                          
                            @endforeach
                           
<!--
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/nobin.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/nobin.jpg')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/Nobin-January-March-2014.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/nobin1.jpg')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/nobin-july-Sept-14.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/nobin2.jpg')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/nobin-oct-dec-15.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/nobin3.jpg')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/nobin-Jan-March-15.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/nobin4.jpg')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/nobin-april-june-2015.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/nobin5.jpg')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/nobin-july-sept.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/nobin-Cover-July-Sept-15-04.jpg')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/Nobin-Oct-Dec-2015.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/nobin8.jpg')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/nobin-cover-jan-march-16.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/nobin9.jpg')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/NOBIN-Apr-June-2016.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/NobinCover-April-June 2016.jpg')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/july-sep-2016.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/july-sep- 2016.jpg')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/oct-dec-2016.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/oct-dec-2016.jpg')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/jan-mar-17.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/nobin-cover-january-march-2017.png')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-publication">
                                    <a href="http://hdfbd.com/pdf/april-june-17.pdf" target="_blank">
                                        <img src="{{asset('frontend/images/publications/nobin/nobin-cover-april-june-2017.png')}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
-->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


@endsection