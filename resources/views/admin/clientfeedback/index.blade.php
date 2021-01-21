@extends('admin.admin_layouts.app')
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<!-- Right side column. Contains the navbar and content of the page -->
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
                <h3 class="box-title">Data Table For FeedBacks</h3>
              </div><!-- /.box-header -->

              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>JobTitle</th>
                      <th>Photo</th>
                      {{-- <th>FeedBack</th> --}}
                      <th>Created_At</th>
                      <th>Show</th>
                      <th>Status</th>
                      <th>Delete</th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach($All_FeedBacks as $objFeedBack)
                        <tr>
                            <td>{{$objFeedBack->pkClientFeedBackID}}</td>
                            <td>{{$objFeedBack->fldName}}</td>
                            <td>{{$objFeedBack->fldJobTitle}}</td>
                            <td>
                                <img style="height: 100px;" src="{{ asset('storage/app') }}/{{$objFeedBack->fldPhoto}}" />
                            </td>
                            {{-- <td>{{$objFeedBack->fldFeedBack}}</td> --}}
                            <td>{{$objFeedBack->created_at}}</td>
                            <td> 
                                <a class="btn btn-warning" href="{{ route('clientfeedbacks.show',['admin/clientfeedbacks' => $objFeedBack->pkClientFeedBackID]) }}">Show</a>
                                {{-- {!!Form::open(["url"=>"admin/clientfeedbacks/$objFeedBack->pkClientFeedBackID","method"=>"GET"])!!}                
                                <input type="submit" value="Show" class="btn btn-black">
                                {!! Form::close() !!} --}}
                            </td>
                            <td>
                                @if($objFeedBack->fldStatus == 1)
                                  <a class="btn btn-danger" href="{{url('admin/clientfeedbacks/unactive-clientfeedbacks/' . $objFeedBack->pkClientFeedBackID) }}">
                                    Blocked
                                  </a>
                                @else
                                  <a class="btn btn-success" href="{{url('admin/clientfeedbacks/active-clientfeedbacks/' . $objFeedBack->pkClientFeedBackID) }}">
                                    Active
                                  </a>
                                @endif
                              </td>
                            <td> 
                                {!!Form::open(["url"=>"admin/clientfeedbacks/$objFeedBack->pkClientFeedBackID","method"=>"DELETE","onclick"=>"return confirm('Are U Sure To Delete !!')"])!!}                
                                <input type="submit" value="Delete" class="btn btn-danger">
                                {!! Form::close() !!}
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