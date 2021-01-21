@extends('admin.admin_layouts.app')
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->

          <div class="row">

            <div class="col-lg-3 col-xs-6">

              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{$TeamMembers}}</h3>
                  @if($TeamMembers > 1)
                  <p>Members</p>
                  @else
                  <p>Member</p>
                  @endif
                </div>
                <div class="icon">
                  <i class="ion ion-person-stalker"></i>
                </div>
              <a href="{{ asset('/admin/team_members') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>

              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{$Consultations}}</h3>
                  @if($Consultations > 1)
                  <p>Consultations</p>
                  @else
                  <p>Consultation</p>
                  @endif
                </div>
                <div class="icon">
                  <i class="ion ion-bookmark"></i>
                </div>
              <a href="{{ asset('/admin/consultations') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>

            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">

              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$Trainings}}</h3>
                    @if($Trainings > 1)
                    <p>Trainings</p>
                    @else
                    <p>Training</p>
                    @endif
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ asset('/admin/trainings') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>

              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$FeedBacks}}</h3>
                    @if($FeedBacks > 1)
                    <p>FeedBacks</p>
                    @else
                    <p>FeedBack</p>
                    @endif
                </div>
                <div class="icon">
                  <i class="ion ion-clipboard"></i>
                </div>
                <a href="{{ asset('/admin/clientfeedbacks') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>

            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">

              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ $Users }}</h3>
                  @if($Users > 1)
                  <p>Users Registrations</p>
                  @else
                  <p>User Registrations</p>
                  @endif
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ asset('/admin/users') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>

              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ $Stories }}</h3>
                  @if($Stories > 1)
                  <p>Stories</p>
                  @else
                  <p>Story</p>
                  @endif
                </div>
                <div class="icon">
                  <i class="ion ion-flag"></i>
                </div>
                <a href="{{ asset('/admin/stories') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>

            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">

              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{$Partners}}</h3>
                  @if($Partners > 1)
                  <p>Our Partners</p>
                  @else
                  <p>Our Partner</p>
                 @endif
                </div>
                <div class="icon">
                  <i class="ion ion-happy-outline"></i>
                </div>
                <a href="{{ asset('/admin/partners') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>

              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{$Bspyl_Data}}</h3>
                  @if($Bspyl_Data > 1)
                  <p>Bspyl Forms</p>
                  @else
                  <p>Bspyl Form</p>
                 @endif
                </div>
                <div class="icon">
                  <i class="ion ion-navicon-round "></i>
                </div>
                <a href="{{ asset('/admin/bspyl') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>

            </div><!-- ./col -->

          </div><!-- /.row -->
          
          {{-- <!-- Main row --> --}}

        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->
@endsection