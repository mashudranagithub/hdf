@extends('admin.layouts.dashboard')

@section('content')
    @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            <p>{{ $msg }}</p>
        </div>
    @endif
    <section class="content-header">

        <div><a class="btn btn-success" href="{{ route('gallaryCreate') }}" >Add Image In a Gallary</a></div>
        <br>
        <h1>
            All Images
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            {{--<li class="active">Country</li>--}}
        </ol>
    </section>





    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-list"></i>
                        <h3 class="box-title">All Images</h3>
                    </div>

                    <div class="box-body">
                        <table class="table" id="makeEditable">
                            <thead>
                                <tr>
                                    <th style="width:100px;">SI</th>
                                    <th style="width:200px;"> Gallary Name </th>
                                    <th style="width:200px;"> Image </th>
                                    <th class="none">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ?>
                            @foreach($gallary_post as $single_data)

                                <tr>
                                    <td style="width:100px;">
                                        {{ $i++ }}
                                    </td>
                                    <td style="width:200px;">
                                        {{ $single_data->gallary_name }}
                                    </td>
                                    <td style="width:200px;">
                                        <img style="width:20%;" src="{{url('/frontend/images/gallary/'.$single_data->gallary_image )}}" alt="{{ $single_data->gallary_name }} Image">
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('gallaryEdit', $single_data->id) }}"><i class="fa fa-pencil-square-o"></i></a>

                                        {!! Form::open(['method' => 'DELETE','route' => ['gallaryDelete', $single_data->id],'style'=>'display:inline']) !!}
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