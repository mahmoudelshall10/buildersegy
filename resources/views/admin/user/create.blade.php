@extends('admin.admin_layouts.app')
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
    </div>
    @endif

    @if($flash= session('error'))
    <div class="alert alert-danger">
    <strong>
        {{session('error')}}
    </strong>
    </div>
    @endif
    
    <section class="content-header">
      <h1>
        {{$strTitle}}
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">{{$strTitle}}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">

                <div class="box box-primary">

                        <div class="box-header">
                          <h3 class="box-title">Form For {{$strTitle}}</h3>
                        </div><!-- /.box-header -->
                        {{-- {!!Form::open(["url"=>"admin/numbers","method"=>"POST","class"=>"form-horizontal","files"=>"true"])!!} --}}
                       
                        <!-- form start -->
                        <form role="form" action="{{url('/admin/users')}}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                          <div class="box-body">

                            <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="Name">Name</label>
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                              
                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                            
                            </div>
                            
                            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="Email">Email</label>
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                             
                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                            </div>

                            <div class="form-group has-feedback {{ $errors->has('fldType') ? ' has-error' : '' }}">
                                <label for="fldType">Type</label>

                                <select class="form-control" name='fldType'>
                                    @foreach(["Admin" => "Admin", "User" => "User"] AS $fldType => $Type)    
                                    <option value="{{ $fldType }}" {{ old("fldType") == $fldType ? "selected" : "" }}>{{ $Type }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('fldType'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fldType') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('photo') ? ' has-error' : '' }}">
                              <label for="">Photo</label>
                              <input id="photo" type="file" class="form-control" name="photo" placeholder="Photo" required>
                              
                              @if ($errors->has('photo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('photo') }}</strong>
                                  </span>
                              @endif
                            
                            </div>
                            
                            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label for="Password">Password</label>
                              <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                              
                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                            </div>
                            
                            <div class="form-group has-feedback">
                              <label for="password_confirmation">Confirm Password</label>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirm" required>
                            
                            </div>
                            
                          </div><!-- /.box-body -->
        
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                          @include('admin.admin_layouts.errors')
                        </form>
                        
                        {{-- {!! Form::close() !!} --}}
                    
                </div><!-- /.box -->
        

        </div><!-- /.row -->

    </section><!-- /.content -->

  </div><!-- /.content-wrapper -->
@endsection