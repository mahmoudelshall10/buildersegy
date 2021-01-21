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
        <small>Control panel</small> <a class="btn btn-primary" href="{{ url('admin/stories/create') }}">Create</a>
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
                <h3 class="box-title">Data Table For {{$strTitle}}</h3>
              </div><!-- /.box-header -->

              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Date</th>
                      <th>Photo</th>
                      <th>Show</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($All_Stories as $objStory)
                        <tr>
                            <td>{{$objStory->pkStoryID}}</td>
                            <td>{{$objStory->fldName}}</td>
                            <td>{{$objStory->fldAddress}}</td>
                            <td>{{$objStory->fldDate}}</td>
                            <td>
                              <img style="height: 100px;" src="{{ asset('storage/app') }}/{{$objStory->fldPhoto}}" />
                            </td>

                            <td>
                              <a class="btn btn-warning" href="{{ route('stories.show',['admin/stories' =>$objStory->pkStoryID]) }}">Show</a>
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{ action('Admin\StoryController@edit', $objStory['pkStoryID']) }}">Edit</a>
                            </td>
                            <td> 
                                {!!Form::open(["url"=>"admin/stories/$objStory->pkStoryID","method"=>"DELETE","onclick"=>"return confirm('Are U Sure To Delete !!')"])!!}                
                                <input type="submit" value="Delete" class="btn btn-danger">
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @include('admin.admin_layouts.errors')
                    @endforeach
                  </tbody>

                </table>

              </div><!-- /.box-body -->

            </div><!-- /.box -->

        </div><!-- /.row -->

    </section><!-- /.content -->

  </div><!-- /.content-wrapper -->
@endsection