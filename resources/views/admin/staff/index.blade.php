@extends('admin.layouts.dashboard')

@section('content')
    @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            <p>{{ $msg }}</p>
        </div>
    @endif
    <section class="content-header">

        <div><a class="btn btn-success" href="{{ route('staffCreate') }}" > Staff Create </a></div>
        <br>
        <h1>
            All Members
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            {{--<li class="active">Staffs</li>--}}
        </ol>
    </section>





    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-10">
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-list"></i>
                        <h3 class="box-title">All Staffs</h3>
                    </div>

                    <div class="box-body">
                        <table class="table" id="makeEditable">
                            <thead>
                                <tr>
                                    <th style="width:100px;"> SI </th>
                                    <th style="width:200px;"> Name </th>
                                    <th style="width:200px;"> Image </th>
                                    <th style="width:200px;"> Designation </th>
                                    <th class="none"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ?>
                            @foreach($staffs as $single_data)

                                <tr>
                                    <td style="width:100px;">
                                        {{ $i++ }}
                                    </td>
                                    <td style="width:200px;">
                                        {{ $single_data->name }}
                                    </td>
                                    <td style="width:200px;">
                                        <img style="width:20%;" src="{{url('/frontend/images/staffs/'.$single_data->image )}}" alt="Staff Image">
                                    </td>
                                    <td style="width:200px;">
                                        {{ $single_data->designation }}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('staffEdit', $single_data->id) }}"><i class="fa fa-pencil-square-o"></i></a>

                                        {!! Form::open(['method' => 'DELETE','route' => ['staffDelete', $single_data->id],'style'=>'display:inline']) !!}
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