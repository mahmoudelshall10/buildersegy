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
                      <a class="btn btn-success" href="{{ url('admin/consultations') }}">Back</a>
                      <thead>
                        <tr>
                          <th>ID</th> 
                          <td>{{$objConsultation->pkConsultationID}}</td>
                        </tr>
                        <tr>
                          <th>Name</th>
                          <td>{{$objConsultation->fldName}}</td>
                        </tr>
                        <tr>
                          <th>Email</th>
                          <td>{{$objConsultation->fldEmail}}</td>
                        </tr>
                        <tr>
                          <th>Subject</th>
                          <td>{{$objConsultation->fldSubject}}</td>
                        </tr>
                        <tr>
                          <th>Created_At</th>
                          <td>{{$objConsultation->created_at}}</td>
                        </tr>
                        <tr>
                          <th>Consultation</th>
                          <td>{{$objConsultation->fldMessage}}</td>
                        </tr>
                      </thead>
    
                      {{-- <tbody>
                        
                            <tr>
                              
                            </tr>
                            <tr>
                              
                            </tr>
                            <tr>
                             
                            </tr>
                            <tr>
                              
                          </tr>
                          <tr>
                           
                          </tr>
                      </tbody> --}}
    
                    </table>
    
                  </div><!-- /.box-body -->
    
                </div><!-- /.box -->
    
            </div><!-- /.row -->
    
        </section><!-- /.content -->
    
      </div><!-- /.content-wrapper -->
@endsection