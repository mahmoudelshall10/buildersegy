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
                      <a class="btn btn-success" href="{{ url('admin/stories') }}">Back</a>
                      <thead>

                        <tr>
                          <th>ID</th> 
                          <td>{{$objStory->pkStoryID}}</td>
                        </tr>
                        
                        <tr>
                          <th>Name</th>
                          <td>{{$objStory->fldName}}</td>
                        </tr>

                        <tr>
                          <th>Address</th>
                          <td>{{$objStory->fldAddress}}</td>
                        </tr>

                        <tr>
                          <th>Date</th>
                          <td>{{$objStory->fldDate}}</td>
                        </tr>

                        <tr>
                          <th>Photo</th>
                          <td> <img style="height: 100px;" src="{{ asset('storage/app') }}/{{$objStory->fldPhoto}}" /></td>
                        </tr>
                        <tr>
                          <th>Post</th>
                          <td style="width: 1020px;height: 130px;">{{$objStory->fldText}}</td>
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