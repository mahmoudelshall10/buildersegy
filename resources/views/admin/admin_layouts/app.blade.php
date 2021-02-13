<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Builders | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('admin_design/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- DATA TABLES -->
   
    <link href="{{ asset('admin_design/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
   
    <link href="{{ asset('admin_design/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
   
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('admin_design/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{asset('images/builders_5.png')}}" type="image/x-icon">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->

  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset(Auth::user()->photo)}}" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">
                    {{ Auth::user()->name}}
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                  <a href='{{ asset('admin/users/profile') }}' style="color:rgba(255,255,255,0) !important;background-color:rgba(255,255,255,0) !important;"><img src="{{asset(Auth::user()->photo)}}" style="width:100px;height:100px" class="user-image" alt="User Image" /></a>
                    <p>
                      {{ Auth::user()->name}}
                    <small>Member since {{\Carbon\Carbon::parse(Auth::user()->created_at)->format('d M y')}}</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a  class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>

                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
        
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset(Auth::user()->photo)}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name}}</p>

            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
@include('admin.admin_layouts.sidebar')
        </section>
        <!-- /.sidebar -->
      </aside>
        
@yield('content')
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset('admin_design/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!--
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
-->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('admin_design/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>    
     <!-- DATA TABES SCRIPT -->
     <script src="{{ asset('admin_design/plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
     <script src="{{ asset('admin_design/plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>
      
    <!-- Slimscroll -->
    <script src="{{ asset('admin_design/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='{{ asset('admin_design/plugins/fastclick/fastclick.min.js') }}'></script>
    <!-- admin_designLTE App -->
    <script src="{{ asset('admin_design/dist/js/app.min.js') }}" type="text/javascript"></script>

    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false,
          "responsive":true,
        });
      });
    </script>
    
  </body>
</html>