  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('frontend/images/staffs/s5.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
           
            <li class="header">MAIN NAVIGATION</li>
            
            <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard </a></li>

            <li><a href="{{url('/administration/index')}}"><i class="fa fa-lock"></i> Administration </a></li>
            
            <li><a href="{{ route('settingsCreate') }}"><i class="fa fa-cogs"></i> Settings </a></li>
            
            <li><a href="{{ route('sliders') }}"><i class="fa fa-sliders"></i> Sliders </a></li>
            
            <li><a href="{{ route('noticeboard') }}"><i class="fa fa-sticky-note"></i> Notice Board </a></li>
            
            <li><a href="{{ route('gallary') }}"><i class="fa fa-picture-o"></i> Gallary </a></li>
            
            <li><a href="{{ route('annualreport') }}"><i class="fa fa-book"></i> Annual Report Publication </a></li>
            
            <li><a href="{{ route('nobin') }}"><i class="fa fa-book"></i> Nobin Publication </a></li>
            
            <li><a href="{{ route('who') }}"><i class="fa fa-users"></i> Who We Are? </a></li>
            
            <li><a href="{{ route('newsCreate') }}"><i class="fa fa-newspaper-o"></i> News & Events </a></li>
            
            <li><a href="{{ route('homeproject') }}"><i class="fa fa-tasks"></i> Homepage Project </a></li>
            
            <li><a href="{{ route('homemanagement') }}"><i class="fa fa-users"></i> Homepage Management </a></li>
            
            <li><a href="{{ route('project') }}"><i class="fa fa-briefcase"></i> Project </a></li>
            
            <li><a href="{{ route('aboutmember') }}"><i class="fa fa-users"></i> About Page Members </a></li>
            
            <li><a href="{{ route('staff') }}"><i class="fa fa-briefcase"></i> Staffs </a></li>
            
            <li><a href="{{ route('batch') }}"><i class="fa fa-users"></i> Batch </a></li> 
                      
            <li><a href="{{ route('batchtable') }}"><i class="fa fa-table"></i> Batch Table </a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>