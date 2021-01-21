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
                          <h3 class="box-title">Form For {{$strTitle}}</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        {!!Form::open(["url"=>"admin/team_members","method"=>"POST","files"=>"true" , "enctype"=>"multipart/form-data"])!!}
                        {{-- <form role="form" action="{{url('admin/team_members')}}" enctype="multipart/form-data" method="POST"> --}}
                            {{ csrf_field() }}
                          <div class="box-body">

                                <div class="form-group">
                                    <label for="fldName">Name</label>
                                    <input type="text" class="form-control"  value="{{ old('fldName') }}" name='fldName'  required placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <label for="fldJobTitle">Job Title</label>
                                    <input type="text" class="form-control"  value="{{ old('fldJobTitle') }}" name='fldJobTitle' required placeholder="Job Title">
                                </div>
                                <div class="form-group">
                                    <label for="fldFacebook">Facebook</label>
                                    <input type="text" class="form-control"  value="{{ old('fldFacebook') }}" name='fldFacebook' required placeholder="Facebook">
                                </div>

                                <div class="form-group">
                                    <label for="fldLinkedIn">LinkedIn</label>
                                    <input type="text" class="form-control"  value="{{ old('fldLinkedIn') }}" name='fldLinkedIn' required placeholder="LinkedIn">
                                </div>

                                <div class="form-group">
                                    <label for="fldQuote">Quote</label>
                                    <input type="text" class="form-control"  value="{{ old('fldQuote') }}" name='fldQuote' required placeholder="Quote">
                                </div>
                                
                                <div class="form-group">
                                  <label for="fldPhoto">Photo</label>
                                  <input type="file" class="form-control"  value="{{ old('fldPhoto') }}" name='fldPhoto' placeholder="Photo">
                               </div>

                            
                          </div><!-- /.box-body -->
        
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>

                          @include('admin.admin_layouts.errors')
                          {!!Form::close()!!}
                        
                        {{-- </form> --}}
                    
                </div><!-- /.box -->
        

        </div><!-- /.row -->

    </section><!-- /.content -->

  </div><!-- /.content-wrapper -->
@endsection