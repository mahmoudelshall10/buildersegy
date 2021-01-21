@extends('admin.auth.user_layouts.app')

@section('content')
<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{asset('index')}}"><b>BUILDERS</b></a>
        </div><!-- /.login-logo -->

        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form class="form-horizontal" method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

            </div>

            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>

            <div class="row">
                <div class="col-xs-8">    
                <div class="checkbox icheck">

                    <label style="margin-left:-33px">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>

                </div>                        
                </div><!-- /.col -->

                <div class="col-xs-4">
                <button type="submit" style="margin-left:16px" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div><!-- /.col -->

            </div>
            </form> 


            <a class="btn btn-link" style="margin-left:-25px" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

@endsection
