@extends('admin.admin_layouts.app')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
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
            @if (session('message'))
            <div class="alert alert-success">
              {{ session('message') }}
            </div>
            @endif
            
            <div class="row">
                
                <div class="box">
    
                  <div class="box-header">
                    {{-- <h3 class="box-title">Data Table For FeedBacks</h3> --}}
                  </div><!-- /.box-header -->
    
                  <div class="box-body">
                    <table  class="table table-bordered table-striped">
                      <a class="btn btn-success" href="{{ url('admin/consultancies') }}">Back</a>
                      <thead>
                        <tr>
                          <th>ID</th> 
                          <td>{{$objConsultancy->pkConsultancyID}}</td>
                        </tr>
                        <tr>
                          <th>Name</th>
                          <td>{{$objConsultancy->fldName}}</td>
                        </tr>
                        <tr>
                          <th>Subject</th>
                          <td>{{$objConsultancy->fldSubject}}</td>
                        </tr>
                        <tr>
                          <th>Created_At</th>
                          <td>{{$objConsultancy->created_at}}</td>
                        </tr>
                      </thead>
    
                    </table>
    
                  </div><!-- /.box-body -->
    
                </div><!-- /.box -->
    
            </div><!-- /.row -->
    
        </section><!-- /.content -->
    
      </div><!-- /.content-wrapper -->
@endsection