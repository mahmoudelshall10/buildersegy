@extends('admin.auth.user_layouts.app')
@section('content')
<body class="login-page">
<div class="login-box">
<div class="register-logo">
    <a href="{{asset('index')}}"><b>BUILDERS</b></a>
</div>
<div class="login-box-body">
<p class="login-box-msg" style="font-weight:bolder">Reset Password</p>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
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
    
            <div class="row">
    
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                </div><!-- /.col -->
    
            </div>
            </form> 
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
@endsection
