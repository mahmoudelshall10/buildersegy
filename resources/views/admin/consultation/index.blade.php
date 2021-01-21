@extends('admin.admin_layouts.app')
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="content-header">
      <h1>
          Consultations
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
                <table id="example1" class="table table-bordered table-striped" class='try'>
                  
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Created_At</th>
                      <th>Show</th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach($All_Consultations as $objConsultation)
                        <tr>
                            <td>{{$objConsultation->pkConsultationID}}</td>
                            <td>{{$objConsultation->fldName}}</td>
                            <td>{{$objConsultation->fldEmail}}</td>
                            <td>{{$objConsultation->fldSubject}}</td>
                            <td>{{$objConsultation->created_at}}</td>
                            <td> 
                                <a class="btn btn-warning" href="{{ route('consultations.show',['admin/consultations' => $objConsultation->pkConsultationID]) }}">Show</a>
                                {{-- {!!Form::open(["url"=>"admin/consultations/$objConsultation->pkConsultationID","method"=>"GET"])!!}                
                                <input type="submit" value="Show Consultation" class="btn btn-black">
                                {!! Form::close() !!} --}}
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