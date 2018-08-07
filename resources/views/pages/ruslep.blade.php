@extends('hdfviews.layouts.master')

@section('content')
    
    <section style="padding-top:131.5px;"></section>
    
    
    
        
    <section id="Project_page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <ul class="about-pages-menu">
                        <li><a href="../index.html">Home <i class="fa fa-angle-double-right"></i></a></li>
                        <li><a href="tas.html">Projects <i class="fa fa-angle-double-right"></i> </a></li>
                        <li><a href="ruslep.html" class="active"> RUSLEP </a></li>
                    </ul>
                    
                    
                    @foreach($project as $p)
                    
                    <h3 class="text-center"> {{ $p->project_name }} </h3>
                    
                    {!! $p->details !!}
                    
                    @endforeach
                    
                    
                </div>
            </div>
        </div>          
    </section>
    


@endsection