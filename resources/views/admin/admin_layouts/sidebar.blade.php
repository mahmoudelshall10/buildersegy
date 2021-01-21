<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>

    <li class="treeview">
    <a href="{{ asset('/admin') }}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>

    <!--Start Client FeedBack-->
    <li class="treeview">
      <a href="{{ asset('/admin/clientfeedbacks') }} ">
        <i class="fa fa-dashboard"></i> <span>Client FeedBacks</span>
      </a>
    </li>
    <!--End Client FeedBack-->
    
    <!--Start Consultation-->
    <li class="treeview">
      <a href="{{ asset('/admin/consultations') }} ">
        <i class="fa fa-dashboard"></i> <span>Consultations Form</span>
      </a>
    </li>
    <!--End Consultation-->

    <!--Start Consultancy-->
    <li class="treeview">
      <a href="{{ asset('/admin/consultancies') }} ">
        <i class="fa fa-dashboard"></i> <span>Consultancies</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
          <li class="active"><a href="{{ asset('/admin/consultancies') }}"><i class="fa fa-circle-o"></i> Show All Consultancies</a></li>
          <li><a href="{{ asset('/admin/consultancies/create') }}"><i class="fa fa-circle-o"></i> Add New Consultancy</a></li>
      </ul>
    </li>
    <!--End Consultancy-->
    
    <!--Start Bspyl-->
    <li class="treeview">
      <a href="{{ asset('/admin/bspyl') }} ">
        <i class="fa fa-dashboard"></i> <span>Bspyl</span>
      </a>
    </li>
    <!--End Bspyl-->

    <!--Start Partner-->
    <li class="treeview">
      <a href="{{ asset('/admin/partners') }} ">
        <i class="fa fa-dashboard"></i> <span>Partners</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
          <li class="active"><a href="{{ asset('/admin/partners') }}"><i class="fa fa-circle-o"></i> Show All Partners</a></li>
          <li><a href="{{ asset('/admin/partners/create') }}"><i class="fa fa-circle-o"></i> Add New Partners</a></li>
      </ul>
    </li>
    <!--End Partner-->

    <!-- Start Number -->
      <li class="treeview">
        <a href="{{ asset('/admin/numbers') }}">
          <i class="fa fa-dashboard"></i> <span>Numbers</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="{{ asset('/admin/numbers') }}"><i class="fa fa-circle-o"></i> Show All Numbers</a></li>
          <li><a href="{{ asset('/admin/numbers/create') }}"><i class="fa fa-circle-o"></i> Add New Numbers</a></li>
        </ul>
      </li>
   <!--End Number-->

    <!-- Start Training -->
      <li class="treeview">
        <a href="{{ asset('/admin/trainings') }}">
          <i class="fa fa-dashboard"></i> <span>Trainings</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="{{ asset('/admin/trainings') }}"><i class="fa fa-circle-o"></i> Show All Trainings</a></li>
          <li><a href="{{ asset('/admin/trainings/create') }}"><i class="fa fa-circle-o"></i> Add New Trainings</a></li>
        </ul>
      </li>
   <!--End Training-->

   <!--Start Team -->
    <li class="treeview">
      <a href="{{ asset('/admin/team_members') }}">
        <i class="fa fa-dashboard"></i> <span>Team Members</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ asset('/admin/team_members') }}"><i class="fa fa-circle-o"></i> Show All Team Members</a></li>
        <li><a href="{{ asset('/admin/team_members/create') }}"><i class="fa fa-circle-o"></i> Add New Team Member</a></li>
      </ul>
    </li>
    <!--End Team -->

    <!--Start Story -->
    <li class="treeview">
      <a href="{{ asset('/admin/stories') }}">
        <i class="fa fa-dashboard"></i> <span>Stories</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ asset('/admin/stories') }}"><i class="fa fa-circle-o"></i> Show All Stories</a></li>
        <li><a href="{{ asset('/admin/stories/create') }}"><i class="fa fa-circle-o"></i> Add New Story</a></li>
      </ul>
    </li>
    <!--End Story -->

    <!--Start User -->
    <li class="treeview">
      <a href="{{ asset('admin/users') }}">
        <i class="fa fa-dashboard"></i> <span>Users</span>
      </a>
    </li>
     <!--End User -->
</ul>