@extends('admin.layouts.dashboard')

@section('content')

    @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            <p>{{ $msg }}</p>
        </div>
    @endif

    <p><a class="btn btn-info" href="{{ route('homeprojectCreate') }}">Create New Project </a></p>

    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-12">
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
                                    <th style="width:300px;"> Project name </th>
                                    <th style="width:300px;"> Project Image </th>
                                    <th class="none">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ?>
                            @foreach($project_post as $single_data)

                                <tr>
                                    <td>
                                        {{ $i++ }}
                                    </td>
                                    <td>
                                        {!! $single_data->projectname !!}
                                    </td>
                                    <td>
                                        <img style="width:60%; height:auto;" src="{{url('/frontend/images/homeprojects/'.$single_data->image )}}" alt="Notice Image">
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('homeprojectEdit', $single_data->id) }}"><i class="fa fa-pencil-square-o"></i></a>

                                        {!! Form::open(['method' => 'DELETE','route' => ['homeprojectDelete', $single_data->id],'style'=>'display:inline']) !!}
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