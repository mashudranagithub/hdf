@extends('admin.layouts.dashboard')

@section('content')

    @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            <p>{{ $msg }}</p>
        </div>
    @endif

    <p><a class="btn btn-info" href="{{ route('sliderCreate') }}">Create New Slider</a></p>
    
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-list"></i>
                        <h3 class="box-title">All Sliders</h3>
                    </div>

                    <div class="box-body">
    <table class="table" id="makeEditable">
        <thead>
            <tr>
                <th>Serial No</th>
                <th>Slider Text</th>
                <th>Slider Image</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        <?php $i = 1 ; ?>
        @foreach($sliders as $slider)
            <tr>
                <td>{{ $i++ }} </td>
                <td>{{ $slider->slider_text }}</td>
                <td>
                    <div class="index-table-img">
                        <a href="{{url('/frontend/images/slider/'.$slider->slider_image)}}" target="_blank" >
                            <img src="{{url('/frontend/images/slider/'.$slider->slider_image)}}" alt="Slider Image" class="logo-img  img-responsive" style="width:180px;height:100px;"/>
                        </a>
                    </div>
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('sliderEdit', $slider->id )}}"><i class="fa fa-pencil-square-o"></i></a>

                    {!! Form::open(['method' => 'DELETE','route' => ['sliderDelete', $slider->id]]) !!}
                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
                    </div>


                </div>
            </div>
        </div>
    </section>
    
    
    
    




@endsection