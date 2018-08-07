@extends('admin.layouts.dashboard')

@section('content')
    @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            <p>{{ $msg }}</p>
        </div>
    @endif
    <section class="content-header">

        <div><a class="btn btn-success" href="{{ route('nobinCreate') }}" >Add Image In Nobin</a></div>
        <br>
        <h1>
            All Images of Nobin Publications
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
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
                                    <th style="width:150px;">SI</th>
                                    <th style="width:300px;"> Nobin Image </th>
                                    <th class="none">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ?>
                            @foreach($nobin_images as $single_data)

                                <tr>
                                    <td style="width:150px;">
                                        {{ $i++ }}
                                    </td>
                                    <td style="width:300px;">
                                        <img style="width:50%;" src="{{url('/frontend/images/publication/nobin/'.$single_data->nobin_image )}}" alt="Nobin Image">
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('nobinEdit', $single_data->id) }}"><i class="fa fa-pencil-square-o"></i></a>

                                        {!! Form::open(['method' => 'DELETE','route' => ['nobinDelete', $single_data->id],'style'=>'display:inline']) !!}
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