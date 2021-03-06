@extends('admin.admin_layouts.app')
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="content-header">
      <h1>
        User
        <small>Control panel</small>   @if(Auth::user()->fldType == 'Admin')<a class="btn btn-primary" href="{{ url('admin/users/create') }}">Create</a>@endif
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">{{$strTitle}}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
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
            {{session('error')}}
      </div>
      @endif
        <div class="row">
            
            <div class="box">

              <div class="box-header">
                <h3 class="box-title">Data Table For Users</h3>
              </div><!-- /.box-header -->

              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Photo</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Created_At</th>
                      <th>Updated_At</th>
                      @if(Auth::user()->fldType == 'Admin')
                      <th>Delete</th>
                      @endif
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($All_Users as $objUser)
                        <tr>
                            <td>{{$objUser->id}}</td>
                            <td>{{$objUser->name}}</td>
                            <td>
                              <img style="height: 100px;" src="{{ asset($objUser->photo) }}" />
                            </td>
                            <td>{{$objUser->email}}</td>
                            <td>{{$objUser->fldType}}</td>
                            <td>{{$objUser->created_at}}</td>
                            <td>{{$objUser->updated_at}}</td>

                            @if(Auth::user()->fldType == 'Admin')
                            <td> 
                                {!!Form::open(["url"=>"admin/users/$objUser->id","method"=>"DELETE","onclick"=>"return confirm('Are U Sure To Delete !!')"])!!}                
                                <input type="submit" value="Delete" class="btn btn-danger">
                                {!! Form::close() !!}
                            </td>
                            @endif
                        </tr>
                    @endforeach
                  </tbody>

                </table>

              </div><!-- /.box-body -->

            </div><!-- /.box -->

        </div><!-- /.row -->

    </section><!-- /.content -->

  </div><!-- /.content-wrapper -->
@endsection