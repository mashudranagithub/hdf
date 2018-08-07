@extends('admin.layouts.dashboard')

@section('content')
    @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            <p>{{ $msg }}</p>
        </div>
    @endif
    <section class="content-header">

        <div><a class="btn btn-success" href="{{ route('projectCreate') }}" >Project Create</a></div>
        <br>
        <h1>
            All Projects
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            {{--<li class="active">project</li>--}}
        </ol>
    </section>





    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-list"></i>
                        <h3 class="box-title">All Projects</h3>
                    </div>

                    <div class="box-body">
                        <table class="table" id="makeEditable">
                            <thead>
                                <tr>
                                    <th style="width:100px;">SI</th>
                                    <th style="width:500px;"> Project Type </th>
                                    <th style="width:500px;"> Project Name </th>
                                    <th class="none">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ?>
                            @foreach($project_post as $single_data)

                                <tr>
                                    <td style="width:100px;">
                                        {{ $i++ }}
                                    </td>
                                    <td style="width:500px;">
                                        {{ $single_data->project_type }}
                                    </td>
                                    <td style="width:500px;">
                                        {{ $single_data->project_name }}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('projectEdit', $single_data->id) }}"><i class="fa fa-pencil-square-o"></i></a>

                                        {!! Form::open(['method' => 'DELETE','route' => ['projectDelete', $single_data->id],'style'=>'display:inline']) !!}
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