<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <!--Start Dashboard-->
      <li class="treeview
        {{Request::routeIs('admin.index') ? 'active' : ''}}
        ">
        <a href="{{ asset('/admin') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
    <!--End Dashboard-->

    <!--Start Client FeedBack-->
      <li class="treeview
      {{Request::routeIs('clientfeedbacks.index') ? 'active' : ''}}
      ">
        <a href="{{ asset('/admin/clientfeedbacks') }} ">
          <i class="fa fa-dashboard"></i> <span>Client FeedBacks</span>
        </a>
      </li>
    <!--End Client FeedBack-->

    <!--Start Consultation-->
      <li class="treeview 
      {{Request::routeIs('consultations.index') ? 'active' : ''}}
      ">
        <a href="{{ asset('/admin/consultations') }} ">
          <i class="fa fa-dashboard"></i> <span>Consultations Form</span>
        </a>
      </li>
    <!--End Consultation-->

    <!--Start Consultancy-->
      <li class="treeview 
      {{Request::routeIs('consultancies.index') || Request::routeIs('consultancies.create') || Request::routeIs('consultancies.edit') ? 'active' : ''}}
      ">
        <a href="{{ asset('/admin/consultancies') }} ">
          <i class="fa fa-dashboard"></i> <span>Consultancies</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu
              {{Request::routeIs('consultancies.index') || Request::routeIs('consultancies.create') || Request::routeIs('consultancies.edit') ? 'menu-open' : ''}}
        ">
            <li class=" {{Request::routeIs('consultancies.index') ? 'active':''}}"><a href="{{ asset('/admin/consultancies') }}"><i class="fa fa-circle-o"></i> Show All Consultancies</a></li>
            <li class=" {{Request::routeIs('consultancies.create') ? 'active':''}}"><a href="{{ asset('/admin/consultancies/create') }}"><i class="fa fa-circle-o"></i> Add New Consultancy</a></li>
        </ul>
      </li>
    <!--End Consultancy-->
    
    <!--Start Bspyl-->
      <li class="treeview
      {{Request::routeIs('bspyl.index') ? 'active' : ''}}
      ">
        <a href="{{ asset('/admin/bspyl') }} ">
          <i class="fa fa-dashboard"></i> <span>Bspyl</span>
        </a>
      </li>
    <!--End Bspyl-->

    <!--Start Partner-->
      <li class="treeview
      {{Request::routeIs('partners.index') || Request::routeIs('partners.create') || Request::routeIs('partners.edit') ? 'active' : ''}}
      ">
        <a href="{{ asset('/admin/partners') }} ">
          <i class="fa fa-dashboard"></i> <span>Partners</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu
        {{Request::routeIs('partners.index') || Request::routeIs('partners.create') || Request::routeIs('partners.edit') ? 'menu-open' : ''}}
        ">
            <li class="{{Request::routeIs('partners.index') ? 'active' : ''}}"><a href="{{ asset('/admin/partners') }}"><i class="fa fa-circle-o"></i> Show All Partners</a></li>
            <li class="{{Request::routeIs('partners.create') ? 'active' : ''}}"><a href="{{ asset('/admin/partners/create') }}"><i class="fa fa-circle-o"></i> Add New Partners</a></li>
        </ul>
      </li>
    <!--End Partner-->

    <!-- Start Number -->
      <li class="treeview
          {{Request::routeIs('numbers.index') || Request::routeIs('numbers.create') || Request::routeIs('numbers.edit') ? 'active' : ''}}
          ">
          <a href="{{ asset('/admin/numbers') }}">
            <i class="fa fa-dashboard"></i> <span>Numbers</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu
          {{Request::routeIs('numbers.index') || Request::routeIs('numbers.create') || Request::routeIs('numbers.edit') ? 'menu-open' : ''}}
          ">
          <li class="{{Request::routeIs('numbers.index') ? 'active' :''}}"><a href="{{ asset('/admin/numbers') }}"><i class="fa fa-circle-o"></i> Show All Numbers</a></li>
          <li class="{{Request::routeIs('numbers.create') ? 'active' :''}}"><a href="{{ asset('/admin/numbers/create') }}"><i class="fa fa-circle-o"></i> Add New Numbers</a></li>
        </ul>
      </li>
    <!--End Number-->
    
    <!-- Start Training -->
      <li class="treeview
      {{Request::routeIs('trainings.index') || Request::routeIs('trainings.create') || Request::routeIs('trainings.edit') ? 'active' : ''}}
      ">
      <a href="{{ asset('/admin/trainings') }}">
        <i class="fa fa-dashboard"></i> <span>Trainings</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu
        {{Request::routeIs('trainings.index') || Request::routeIs('trainings.create') || Request::routeIs('trainings.edit') ? 'menu-open' : ''}}  
          ">
            <li class="{{Request::routeIs('trainings.index') ? 'active':''}}"><a href="{{ asset('/admin/trainings') }}"><i class="fa fa-circle-o"></i> Show All Trainings</a></li>
            <li class="{{Request::routeIs('trainings.create') ? 'active':''}}"><a href="{{ asset('/admin/trainings/create') }}"><i class="fa fa-circle-o"></i> Add New Trainings</a></li>
        </ul>
      </li>
    <!--End Training-->

    <!--Start Team -->
      <li class="treeview
          {{Request::routeIs('team_members.index') || Request::routeIs('team_members.create') || Request::routeIs('team_members.edit') ? 'active' : ''}}
      ">
        <a href="{{ asset('/admin/team_members') }}">
          <i class="fa fa-dashboard"></i> <span>Team Members</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu
        {{Request::routeIs('team_members.index') || Request::routeIs('team_members.create') || Request::routeIs('team_members.edit') ? 'menu-open' : ''}}
        ">
          <li class="{{Request::routeIs('team_members.index')?'active':''}}"><a href="{{ asset('/admin/team_members') }}"><i class="fa fa-circle-o"></i> Show All Team Members</a></li>
          <li class="{{Request::routeIs('team_members.create')?'active':''}}"><a href="{{ asset('/admin/team_members/create') }}"><i class="fa fa-circle-o"></i> Add New Team Member</a></li>
        </ul>
      </li>
    <!--End Team -->

    <!--Start Story -->
      <li class="treeview
          {{Request::routeIs('stories.index') || Request::routeIs('stories.create') || Request::routeIs('stories.edit') ? 'active' : ''}}
      ">
        <a href="{{ asset('/admin/stories') }}">
          <i class="fa fa-dashboard"></i> <span>Stories</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu
          {{Request::routeIs('stories.index') || Request::routeIs('stories.create') || Request::routeIs('stories.edit') ? 'menu-open' : ''}}
        ">
          <li class="{{Request::routeIs('stories.index') ? 'active':''}}"><a href="{{ asset('/admin/stories') }}"><i class="fa fa-circle-o"></i> Show All Stories</a></li>
          <li class="{{Request::routeIs('stories.create') ? 'active':''}}"><a href="{{ asset('/admin/stories/create') }}"><i class="fa fa-circle-o"></i> Add New Story</a></li>
        </ul>
      </li>
    <!--End Story -->

    <!--Start User -->
      <li class="treeview
      {{Request::routeIs('admin.users') ? 'active' : ''}}
      ">
        <a href="{{ asset('admin/users') }}">
          <i class="fa fa-dashboard"></i> <span>Users</span>
        </a>
      </li>
    <!--End User -->
</ul>