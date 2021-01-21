@extends('layouts.app')
@section('content')

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our History</span>
            <h2>Builders Stories</h2>
          </div>
        </div>
        <div class="row d-flex">

            @foreach($All_Stories as $objStory)
            <div class="col-md-4 d-flex ftco-animate">
              <div class="blog-entry justify-content-end">
                <a href="{{'builders-story-single'}}/{{$objStory->pkStoryID}}" class="block-20" style="background-image: url( {{ asset('storage/app') }}/{{$objStory->fldPhoto}} );width:350px;"></a>
                <div class="text p-4 float-right d-block">
                  <div class="topper d-flex align-items-center">

                  <div class="one py-2 pl-3 pr-1 align-self-stretch">
                     <span class="day">{{\Carbon\Carbon::parse($objStory->fldDate)->format('d')}}</span>
                  </div>
                
                  <div class="two pl-0 pr-3 py-2 align-self-stretch">
                    <span class="yr">{{\Carbon\Carbon::parse($objStory->fldDate)->format('Y')}}</span>
                    <span class="mos">{{\Carbon\Carbon::parse($objStory->fldDate)->format('F')}}</span>
                  </div>

                  </div>

                <h3 class="heading mt-2">{{$objStory->fldName}}</h3>
                <p>{{$objStory->fldAddress}}</p>
                </div>
              </div>
        </div>
      @endforeach
        </div>

        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
              <li>{{$All_Stories->links()}}</li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
    </section>
@endsection