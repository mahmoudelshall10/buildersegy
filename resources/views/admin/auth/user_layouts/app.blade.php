<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    @if( Request::segment(2) == 'login' )
    <title>Builders | Log in</title>
    @elseif( Request::segment(2) == 'register' )
    <title>Builders | Register</title>
    @elseif( Request::segment(2) == 'profile' )
    <title>Builders | Profile</title>
    @endif

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset('admin_design/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('admin_design/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="{{ asset('admin_design/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />
 <link rel="shortcut icon" href="{{asset('images/builders_5.png')}}" type="image/x-icon">
  </head>

@yield('content')

    <script src="{{ asset('admin_design/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <script src="{{ asset('admin_design/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>    

    <!-- iCheck -->
    <script src="{{ asset('admin_design/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>