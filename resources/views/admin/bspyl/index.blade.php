@extends('admin.admin_layouts.app')
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="content-header">
      <h1>
          Bspyl Joining
        <small>Control panel</small>
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
                <h3 class="box-title">Data Table For Consultations</h3>
              </div><!-- /.box-header -->

              <div class="box-body">
                <table id="example2" class="table table-bordered table-responsive" class='try'>
                  
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Age</th>
                      <th>Created_At</th>
                      <th>Show</th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach($All_Bspyl_Data as $objData)
                        <tr>
                            <td>{{$objData->pkBspylID}}</td>
                            <td>{{$objData->fldName}}</td>
                            <td>{{$objData->fldEmail}}</td>
                            <td>{{$objData->fldAge}}</td>
                            <td>{{$objData->created_at}}</td>
                            <td> 
                                <a class="btn btn-warning" href="{{ route('bspyl.show',['admin/bspyl' => $objData->pkBspylID]) }}">Show Form</a>
                            </td>
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