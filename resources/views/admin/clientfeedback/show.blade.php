@extends('admin.admin_layouts.app')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
        <section class="content-header">
          <h1>
            FeedBacks
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
                    {{-- <h3 class="box-title">Data Table For FeedBacks</h3> --}}
                  </div><!-- /.box-header -->
    
                  <div class="box-body">
                    <table  class="table table-bordered table-striped">
                      
                      <thead>
                        <tr>
                          <th>ID</th> 
                          <td>{{$objFeedBack->pkClientFeedBackID}}</td>
                        </tr>
                        <tr>
                          <th>Name</th>
                          <td>{{$objFeedBack->fldName}}</td>
                        </tr>
                        <tr>
                          <th>JobTitle</th>
                          <td>{{$objFeedBack->fldJobTitle}}</td>
                        </tr>
                        <tr>
                          <th>Photo</th>
                          <td>
                              <img style="height: 100px;" src="{{ asset('storage/app') }}/{{$objFeedBack->fldPhoto}}" />
                          </td>
                        </tr>
                        <tr>
                          <th>Created_At</th>
                          <td>{{$objFeedBack->created_at}}</td>
                        </tr>
                        <tr>
                          <th>FeedBack</th>
                          <td>{{$objFeedBack->fldFeedBack}}</td>
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