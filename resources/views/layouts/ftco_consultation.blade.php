<section class="ftco-consultation" id='Consultation'>
    	<div class="container-fluid">
    		<div class="row d-md-flex">
				
    			<div class="half order-md-last mt-md-0 d-flex justify-content-center align-items-center img" style="background-image: url(images/business_2.jpg);">
    				<div class="overlay"></div>
    				 <div class="desc text-center">
						<div class="icon"><span class="fas fa-comments"></span></div>
						
            <h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="line-height:1;font-size:50px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:white">BUILDERS</h2>
						<h1 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="line-height:1;font-size:21px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:white">" Success usually comes to those who are too busy to be looking for it." <br>
							<span style="line-height:2;font-size:20px;">- Henry David Thoreau</span></h1>
    				</div>
				</div>

    			<div class="half p-3 p-md-5 ftco-animate">
					@if (session('message'))
						<div class="alert alert-success">
							{{ session('message') }}
						</div>
					@endif
			  
					@if($flash= session('error'))
					<div class="alert alert-danger">
						  {{session('error')}}
					</div>
					@endif
					<h3 class="mb-4">Consultation Now</h3>					  
					<div class="alert_error">
							<ul>

							</ul>
					</div>
					{{-- id='open_consultation' --}}
    					<form action="{{url('index')}}" enctype="multipart/form-data" id='open_consultation' method="POST"> 
							{{ csrf_field() }}
							<div class="form-group"><span style="color:#dc3545">Required *</span>
								<input type="text" class="{{ $errors->has('fldName') ? 'form-control alert alert-danger' : 'form-control' }}" value="{{ old('fldName') }}" placeholder="Your Name" name='fldName' required>
								
							@if ($errors->has('fldName'))
							<span class="help-block">
								<error>{{ $errors->first('fldName') }}</error>
							</span>
							@endif

							</div>
							<div class="form-group"><span style="color:#dc3545">Required *</span>
								<input type="text" class="{{ $errors->has('fldEmail') ? 'form-control alert alert-danger' : 'form-control' }}" value="{{ old('fldEmail') }}" placeholder="Your Email" name='fldEmail' required>
								
								@if ($errors->has('fldEmail'))
								<span class="help-block">
									<error>{{ $errors->first('fldEmail') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group"><span style="color:#dc3545">Required *</span>
								<input type="text" class="{{ $errors->has('fldSubject') ? 'form-control alert alert-danger' : 'form-control' }}" value="{{ old('fldSubject') }}" placeholder="Subject" name='fldSubject' required>

								@if ($errors->has('fldSubject'))
								<span class="help-block">
									<error>{{ $errors->first('fldSubject') }}</error>
								</span>
								@endif
							</div>
							<div class="form-group"><span style="color:#dc3545">Required *</span>
								<textarea id="" cols="30" rows="7" class="{{ $errors->has('fldMessage') ? 'form-control alert alert-danger' : 'form-control' }}" value="{{ old('fldMessage') }}" placeholder="Message" name='fldMessage' required>{{ old('fldMessage') }}</textarea>
								
								@if ($errors->has('fldMessage'))
								<span class="help-block">
									<error>{{ $errors->first('fldMessage') }}</error>
								</span>
								@endif
							</div>
							<div class="form-group">
								<input type="submit" value="Send message" id='submit_consultation' class="btn btn-primary">
								{{-- id='submit_consultation' --}}
							</div>
						  </form>
    			</div>
    		</div>
    	</div>
</section>