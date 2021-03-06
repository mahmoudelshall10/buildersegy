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

                <div class="box box-primary">
                        <div class="box-header">
                          {{-- <h3 class="box-title">Quick Example</h3> --}}

                        </div><!-- /.box-header -->
                        <!-- form start -->
                        {{-- <form role="form" action="{{action('Admin\NumberController@update', $objNumber['id'])}}" enctype="multipart/form-data" method="PATCH">
                          {{ csrf_field() }} --}}
                          {!!Form::open(["url"=>"admin/team_members/$objTeamMember->pkTeamID","method"=>"PATCH","files"=>"true"])!!}
                          
                          <div class="box-body">

                                <div class="form-group">
                                    <label for="fldName">Name</label>
                                    <input type="text" class="form-control"  name='fldName'  placeholder="Name" value="{{$objTeamMember->fldName}}" required>
                                </div>
    
                                <div class="form-group">
                                    <label for="fldJobTitle">Job Title</label>
                                    <input type="text" class="form-control"  name='fldJobTitle'  placeholder="Job Title" value="{{$objTeamMember->fldJobTitle}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="fldQuote">Quote</label>
                                    <input type="text" class="form-control"  name='fldQuote'  placeholder="Quote" value="{{$objTeamMember->fldQuote}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="fldFacebook">Facebook</label>
                                    <input type="text" class="form-control"  value="{{$objTeamMember->fldFacebook}}" name='fldFacebook' required placeholder="Facebook">
                                </div>

                                <div class="form-group">
                                    <label for="fldLinkedIn">LinkedIn</label>
                                    <input type="text" class="form-control"  value="{{$objTeamMember->fldLinkedIn}}" name='fldLinkedIn' required placeholder="LinkedIn">
                                </div>

                                <div class="form-group">
                                    <label for="fldPhoto">Photo</label>
                                    <img style="height: 100px"  src="{{ asset('storage/app') }}/{{$objTeamMember->fldPhoto}}" />
                                    <input type="file" class="form-control"  name='fldPhoto'  placeholder="Photo" value="{{$objTeamMember->fldPhoto}}">
                                </div>
                            
                          </div><!-- /.box-body -->
        
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a class="btn btn-success" href="{{ url('admin/team_members') }}">Back</a>
                          </div>
                        {{-- </form> --}}
                        @include('admin.admin_layouts.errors')
                        {!!Form::close()!!}
                      </div><!-- /.box -->
        

        </div><!-- /.row -->

    </section><!-- /.content -->

  </div><!-- /.content-wrapper -->
@endsection