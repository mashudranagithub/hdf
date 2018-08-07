@extends('admin.layouts.dashboard')


@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
<section class="col-lg-8 connectedSortable">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Noticeboard Report</b></h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                
                        <table class="table" id="makeEditable">
                            <thead>
                                <tr>
                                    <th style="width:100px;">SI</th>
                                    <th style="width:200px;"> Notice Title </th>
                                    <th style="width:200px;"> Notice Image </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ?>
                            @foreach($notices as $single_data)

                                <tr>
                                    <td>
                                        {{ $i++ }}
                                    </td>
                                    <td>
                                        {!! $single_data->notice_title !!}
                                    </td>
                                    <td>
                                        <img style="width:60%; height:auto;" src="{{url('/frontend/images/notices/'.$single_data->notice_image )}}" alt="Notice Image">
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
    
    
    
    <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Browser Usage</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="155" width="205" style="width: 205px; height: 155px;"></canvas>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                    <li><i class="fa fa-circle-o text-green"></i> IE</li>
                    <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                    <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                    <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                    <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                  </ul>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">United States of America
                  <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                <li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                </li>
                <li><a href="#">China
                  <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
              </ul>
            </div>
            <!-- /.footer -->
          </div>
</section>
<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class="col-lg-4 connectedSortable">
    <!-- Map box -->
    <div class="box box-solid bg-light-blue-gradient">
        <div class="box-header">
            <!-- tools box -->
            <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"> <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"> <i class="fa fa-minus"></i></button>
            </div>
            <!-- /. tools --><i class="fa fa-map-marker"></i>
            <h3 class="box-title">
                Visitors
              </h3> </div>
        <div class="box-body">
            <div id="world-map" style="height: 250px; width: 100%;"></div>
        </div>
        <!-- /.box-body-->
        <div class="box-footer no-border">
            <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-1"></div>
                    <div class="knob-label">Visitors</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-2"></div>
                    <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="knob-label">Exists</div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.box -->
    <!-- Calendar -->
    <div class="box box-solid bg-green-gradient">
        <div class="box-header"> <i class="fa fa-calendar"></i>
            <h3 class="box-title">Calendar</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bars"></i></button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i> </button>
            </div>
            <!-- /. tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"></div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
<!-- right col -->
</div>
</section>
    <!-- /.content -->

  
 
@endsection