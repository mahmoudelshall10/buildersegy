@extends('layouts.app')
@section('content')

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
          
      <div class="col-lg-8 order-md-last ftco-animate">
        <p>
          <img src="{{ asset('storage/app') }}/{{$objStory->fldPhoto}}" alt="" class="img-fluid" style="height:486.36px;width:730px">
        </p>

        <h2 class="mb-3">{{$objStory->fldName}}</h2>
        <p>{{$objStory->fldText}}</p>

      </div> <!-- .col-md-8 -->

      <div class="col-lg-4 sidebar ftco-animate">

        <div class="sidebar-box ftco-animate">

          <h3>Our Stories</h3>
          @foreach ($Three_Stories as $objStory)

          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url({{ asset('storage/app') }}/{{$objStory->fldPhoto}});"></a>
            <div class="text">
            <h3 class="heading">{{$objStory->fldName}}</h3>
              <div class="meta">
                <div><span class="icon-calendar"></span>{{\Carbon\Carbon::parse($objStory->fldDate)->format('d/F')}}</div>
                <div><span class="icon-chat"></span>{{\Carbon\Carbon::parse($objStory->fldDate)->format('d')}}</a></div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>

    </div>
  </div>
</section>

    <!-- .section -->
@endsection