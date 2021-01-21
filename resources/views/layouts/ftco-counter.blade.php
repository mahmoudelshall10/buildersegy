<style>
strong{
    color:#245d9c;
    font-weight:bolder;
} 
</style>
<section class="ftco-counter" id="section-counter">
    	<div class="container-fluid">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center justify-content-center" style="background-image:url(images/builders.png);width:700px">
    					{{-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
              </a> --}}
    				</div>
    			</div>
    			<div class="col-md-6 px-5 py-5">
                    <div class="row justify-content-start pt-3 pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading"></span>
                            <h2 class="mb-4">About "BUILDERS" </h2>
                            <p style="color:#666;"> 
                                <strong>BUILDERS</strong> is an Egyptian privately Held company founded in 2015 then officially established in 2018 as a Companies Consulting & Training company.   
                                <br><br>
                                <strong>BUILDERS</strong> works to serve the energy sector in general and focuses its efforts on developing companies operating in the fields of petroleum, solar energy and electronics, provide development Campaigns, Management Consulting and Staff Training for company operating in these sectors, as well as development of factories and production lines for small and medium projects to prepare it for ISO accreditation. 
                                <br><br>
                                <strong>BUILDERS</strong> has an official program that seeking for develop the youth all over Egypt called “BSPYL” <strong>BUILDERS</strong> Simulation Program for Young Leaders .
                            </p>
                        </div>
                    </div>
		    		<div class="row">
                      @foreach($All_Numbers as $Number)
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-4 bg-light mb-4">
                            <div class="text">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    @if($Number->pkNumberID == 1)
                                    <span class="fas fa-handshake"></span>

                                    @elseif($Number->pkNumberID == 2)
                                    <span class="fa fa-users"></span>
                                    
                                    @elseif($Number->pkNumberID == 3)
                                    <span class="fa fa-coffee"></span>
                                    
                                    @elseif($Number->pkNumberID == 4)
                                    <span class="fas fa-graduation-cap"></span>
                                    @endif
                                </div>
                                <strong class="number" data-number="{{$Number->fldNumber}}">0</strong>
                                <span>{{$Number->fldName}}</span>
                            </div>
                            </div>
                        </div>
                       @endforeach

		            </div>
	            </div>
        </div>
    	</div>
    </section>