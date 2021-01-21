@extends('layouts.app')
@section('content')

<section class="ftco-section ftco-no-pb services-section">
		<div class="container">
@include('layouts.Mis_Vis')
		</div>
</section>
   	
@include('layouts.ftco-counter')

<section class="ftco-section bg-light">
    <div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 text-center heading-section ftco-animate">
					{{-- <span class="subheading">Partnership</span> --}}
					<h2 class="mb-4">Our Partners</h2>
				</div>
        	</div>
    	<div class="row d-flex justify-content-center">
			@foreach($All_Partners as $objPartner)
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">	
        				<span>
							<img style="height:130px;width:130px" class="rounded-circle" src="{{ asset('storage/app') }}/{{$objPartner->fldPhoto}}" />
						</span>
					</div>	
        			<h3>{{$objPartner->fldName}}</h3>
        		</div>
			</div>
			@endforeach
			
    	</div>
    </div>
    <div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 text-center heading-section ftco-animate">
					{{-- <span class="subheading">Partnership</span> --}}
					<h2 class="mb-4">Sponsorship</h2>
				</div>
        	</div>
    	<div class="row d-flex justify-content-center">
			@foreach($All_Sponsors as $objSponsor)
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">	
        				<span>
							<img style="height:130px;width:130px" class="rounded-circle" src="{{ asset('storage/app') }}/{{$objSponsor->fldPhoto}}" />
						</span>
					</div>	
        			<h3>{{$objSponsor->fldName}}</h3>
        		</div>
			</div>
			@endforeach
			
    	</div>
    </div>
</section>

<section class="ftco-section bg-secondary">
	<div class="container-fluid">
		<div class="row justify-content-center mb-5 pb-3">
			
		<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
		<span class="subheading">Our Team</span>
		<h2 class="mb-4">Our Active Members</h2>
		</div>
		
	</div>
	
	<div class="row">
		@foreach($All_Team_Members as $ObjTeamMember)
		<div class="col-lg-3 col-sm-6">
			<div class="block-2 ftco-animate">
			<div class="flipper">
				{{-- <img src="{{ asset('storage/app') }}/{{$ObjTeamMember->fldPhoto }}" /> --}}
				<div class="front" style="background-image: url({{ asset('storage/app') }}/{{$ObjTeamMember->fldPhoto }});">

				</div>
				
				<div class="back">
				<!-- back content -->
				<blockquote>
					<p>&ldquo;{{$ObjTeamMember->fldQuote}}.&rdquo;</p>
				</blockquote>
				<div class="author d-flex">
					<div class="name align-self-center" style="font-size:20px;">{{$ObjTeamMember->fldName}} 
						<span class="position" style="font-size:18px;">{{$ObjTeamMember->fldJobTitle}}</span>
						<a class="btn btn-info" style="background-color:#0077B5 !important;" href='{{$ObjTeamMember->fldLinkedIn}}'><i class="fab fa-linkedin-in"></i></a>
						<a class="btn btn-primary" style="background-color:#3b5998 !important;border:#3b5998 !important;" href='{{$ObjTeamMember->fldFacebook}}'><i class="fab fa-facebook-f"></i></a>
					</div>
				</div>
				</div>
				
			</div>
			</div>
		</div>
		@endforeach
	</div>
	</div>
</section>
		

@include('layouts.ftco_consultation')

    <section class="ftco-section testimony-section bg-secondary">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">FeedBacks</span>
            <h2 class="mb-4">Our Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
			@foreach($All_FeedBacks as $objFeedBack)
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
				<div class="user-img mb-4" style="background-image: url( {{ asset('storage/app') }}/{{$objFeedBack->fldPhoto}} )">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
					</span>
				  </div>
                  <div class="text p-3">
				  	<p class="mb-4">{{$objFeedBack->fldFeedBack}}</p>
                    <p class="name">{{$objFeedBack->fldName}}</p>
                    <span class="position">{{$objFeedBack->fldJobTitle}}</span>
				  </div>
				</div>
			  </div>
			  @endforeach
			</div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
		
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our History</span>
            <h2>Recent Story</h2>
          </div>
		</div>
		
        <div class="row d-flex">

		@foreach($All_Stories as $objStory)
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
			  <a href="{{'builders-story-single'}}/{{$objStory->pkStoryID}}" class="block-20" style="background-image: url( {{ asset('storage/app') }}/{{$objStory->fldPhoto}} );width:350px;"></a> 
			  {{-- storage/app/{{$objStory->fldPhoto}} --}}
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">

              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
					  <span class="day">{{\Carbon\Carbon::parse($objStory->fldDate)->format('d')}}</span>
					</div>
					{{-- date('d',strtotime($objStory->fldDate)) --}}
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">{{\Carbon\Carbon::parse($objStory->fldDate)->format('Y')}}</span>
              			<span class="mos">{{\Carbon\Carbon::parse($objStory->fldDate)->format('F')}}</span>
					  </div>
				</div>
				{{-- <a href="">#</a> --}}
				  
				<h3 class="heading mt-2"><a href="#">{{$objStory->fldName}}</a></h3>
                <p>{{$objStory->fldAddress}}</p>
			  </div>			 
            </div>
		  </div>
		@endforeach
		</div>
		<a href="{{ asset('builders-story') }}" style="color:#999999">See More.......</a>
      </div>
    </section>
		

{{-- @include('layouts.ftco-gallery') --}}

@endsection