@extends('hdfviews.layouts.master')

@section('content')
    
    <section style="padding-top:131.5px;"></section>
    
    
        
    <section id="Gallary_page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="about-pages-menu">
                        <li><a href="../index.html">Home <i class="fa fa-angle-double-right"></i></a></li>
                        <li><a href="managementgallary.html"> Photo Gallary <i class="fa fa-angle-double-right"></i></a></li>
                        <li><a href="supportinggallary.html" class="active"> Supporting Projects Gallary </a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
            
            
                           
                @foreach($images as $single_image)
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{url('/frontend/images/gallary/'.$single_image->gallary_image ) }}" alt="Gallary Image"></a>
                    </div>
                </div>
                @endforeach
            
<!--
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/01.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/02.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/03.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/04.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/05.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/06.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/07.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/08.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/09.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/10.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/11.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/12.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/13.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/14.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/15.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/supporting/16.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
-->
            </div>
        </div>
    </section>



@endsection