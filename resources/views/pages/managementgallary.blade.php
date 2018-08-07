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
                        <li><a href="managementgallary.html" class="active"> Management </a></li>
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
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/01.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/02.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/03.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/04.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/05.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/06.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/07.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/08.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/09.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/10.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/11.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/12.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/13.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/14.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/15.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallary-image">
                        <a href="#"><img src="{{asset('frontend/images/gallary/management/16.jpg')}}" alt="Gallary Image"></a>
                    </div>
                </div>
-->
            </div>
        </div>
    </section>


@endsection