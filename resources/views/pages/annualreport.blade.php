@extends('hdfviews.layouts.master')

@section('content')
    
    <section style="padding-top:131.5px;"></section>
    
    
    
        
    <section id="Publication_page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <ul class="about-pages-menu">
                        <li><a href="../index.html">Home <i class="fa fa-angle-double-right"></i></a></li>
                        <li><a href="annualreport.html"> Publications <i class="fa fa-angle-double-right"></i> </a></li>
                        <li><a href="annualreport.html" class="active"> Annual Report </a></li>
                    </ul>
                    <h3 class="text-center"> Annual Report </h3>
                    
                    
                    @foreach($annualreport as $single_annual)
                    <div class="reports">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-report">
                                    <a href="{{url('/pdf/publication/annual/'.$single_annual->annual_pdf)}}" target="_blank">
                                    
                                    <img src="{{url('/frontend/images/publication/annual/'.$single_annual->annual_image)}}" alt="Publication Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                    
                </div>
            </div>
        </div>
    </section>
    
    
@endsection