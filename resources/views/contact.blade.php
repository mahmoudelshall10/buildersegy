@extends('layouts.app')
@section('content')
<style>
label.disabled,
        label.warning {
            opacity: 0.5;
        }
        label.disabled ~ label.warning {
            display: flex;
            font-size: xx-small;
            justify-content: center;
        }
        .warning {
            display: none;
        }
        label {
            display: flex;
            align-items: center;
            margin: 2px;
        }
        label span {
            flex: 1;
        }
        label select {
            flex: 1;
            margin-left: 10px;
        }
    html{height:100%}
</style>
   	
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>

          <div class="w-100"></div>
          <div class="col-md-4">
            <p><span>Address:</span> Dr. Mustafa El-Nagger St, behind El-Gaza club, Qism shebeen E-kom, Menofia Governorate</p>
          </div>
          <div class="col-md-4">
            <p><span>Phone:</span> <a href="tel://01022655405">01022655405 ,01061560136</a></p>
          </div>
          <div class="col-md-4">
            <p><span>Email:</span> <a href="mailto:info@builderseg.com">info@builderseg.com </a></p>
          </div>
        </div>

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
        
        <div class="row block-9">
          <div class="col-lg-6 order-md-last d-flex">
            {{-- <h2>{{$strTitle}}</h2> --}}

              {{-- {!! Form::open(['url'=>'contact','id'=>'open_feedback','class'=>'bg-light p-5 contact-form','method'=>'POST','enctype'=>"multipart/form-data"]) !!} --}}
              <form action="{{url('contact')}}" id='open_feedback' method="POST" enctype="multipart/form-data" class="bg-light p-5 contact-form">
                <h2>{{$strTitle}}</h2>
                {{ csrf_field() }}

              <div class="form-group">

                {{-- {!! Form::text('fldName',old('fldName'),['class'=>"{{ $errors->has('fldName') ? 'form-control alert alert-danger' : 'form-control' }}",'placeholder'=>'Your Name Required ','required','style'=>'border-color:#eee;']) !!} --}}
                <input type="text" value="{{old('fldName')}}" class="{{ $errors->has('fldName') ? 'form-control alert alert-danger' : 'form-control' }}" name="fldName" placeholder="Your Name Required" required>
                
                @if ($errors->has('fldName'))
								<span class="help-block">
									<error>{{ $errors->first('fldName') }}</strong>
								</span>
								@endif             
              </div>

              <div class="form-group">
                
                {{-- {!! Form::text('fldJobTitle',old('fldJobTitle'),['class'=>"{{ $errors->has('fldJobTitle') ? 'form-control alert alert-danger' : 'form-control' }}",'placeholder'=>'Your Job Required ','required','style'=>'border-color:#eee;']) !!} --}}
                <input type="text" value="{{old('fldJobTitle')}}" class="{{ $errors->has('fldJobTitle') ? 'form-control alert alert-danger' : 'form-control' }}" name="fldJobTitle" placeholder="Your Job Required" required>
                
                @if ($errors->has('fldJobTitle'))
								<span class="help-block">
									<error>{{ $errors->first('fldJobTitle') }}</strong>
								</span>
								@endif
              </div>

              <div class="form-group">
                <label style="color:#dc3545" for="fldPhoto">Photo</label>
                
                  {{-- {!! Form::file('fldPhoto',old('fldPhoto'),['class'=>"{{ $errors->has('fldPhoto') ? 'form-control alert alert-danger' : 'form-control' }}",'placeholder'=>'Your Photo','style'=>'border-color:#eee;']) !!} --}}
                  <input type="file" name="fldPhoto" class="{{ $errors->has('fldPhoto') ? 'form-control alert alert-danger' : 'form-control' }}" required >
                  @if ($errors->has('fldPhoto'))
                  <span class="help-block">
                    <error>{{ $errors->first('fldPhoto') }}</strong>
                  </span>
                  @endif
              </div>
              <div class="form-group">
                
                {{-- {!! Form::textarea('fldFeedBack',old('fldFeedBack'),['col'=>'15','rows'=>'7','style'=>'border-color:#eee;width:350px','class'=>"{{ $errors->has('fldFeedBack') ? 'form-control alert alert-danger' : 'form-control' }}",'placeholder'=>'Message Required *','required']) !!} --}}
                <textarea name="fldFeedBack" id="" value="{{old('fldFeedBack')}}" cols="30" rows="7" class="{{ $errors->has('fldFeedBack') ? 'form-control alert alert-danger' : 'form-control' }}" placeholder="Message Required"></textarea>
                @if ($errors->has('fldFeedBack'))
								<span class="help-block">
									<error>{{ $errors->first('fldFeedBack') }}</strong>
								</span>
								@endif
              
              </div>
            {{-- {!! Form::submit('Send FeedBack',['class'=>'btn btn-primary py-3 px-5','id'=>'submit_feedback']) !!} --}}
            <div class="form-group">
              <input type="submit" value="Send FeedBack" class="btn btn-primary py-3 px-5" id="submit_feedback">
            </div>  
            
            </form>
              <div class="alert_error">
                  <ul>
            
                  </ul>
                </div>
          </div>

          <div class="col-lg-6 d-flex">
            {{-- <div style="width:540px;height:558px"> --}}
              <iframe style="width:540px;height:558px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3435.1742878973228!2d31.00788231512777!3d30.572624981693252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7d7281351f897%3A0x4586c4f7217852a6!2z2LTYsdmD2Kkg2KjZitmE2K_YsdiyIC0gQlVJTERFUlMgQ29tcGFueQ!5e0!3m2!1sen!2seg!4v1566750001898!5m2!1sen!2seg" 
               frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            {{-- </div> --}}
            {{-- <script>
              mapboxgl.accessToken = 'pk.eyJ1IjoibWFobW91ZGVsc2hhbGwxMCIsImEiOiJjanloZjN3MmswYjRkM21tNnEwM3dtMTloIn0.0zKwRhs1xsICAdLP4WZUAw';
              var map = new mapboxgl.Map({
              container: 'map', // container id
              style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
              center: [31.010022, 30.572844], // starting position [lng, lat]
              zoom: 9 // starting zoom
              });
              </script> --}}
          </div>

        </div>
        {{-- <a style="color:black" target="_blank" href="https://goo.gl/maps/n1k77UbteS9H9RYP8"><p>Check Full Location</p></a>  --}}
      </div>
    </section>

@endsection
