<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Builders</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="//db.onlinewebfonts.com/c/082252176f1f4953cea2a7e5e9f300f4?family=Franklin+Gothic+Demi" rel="stylesheet" type="text/css"/>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.1/mapbox-gl.js'></script>
    @if(Request::segment(1) == 'bspyl-home' || Request::segment(1) == 'bspyl-about' || Request::segment(1) == 'bspyl-stages' ||Request::segment(1) == 'bspyl-form' )
    <link rel="shortcut icon" href="{{asset('images/bspyl.png')}}" type="image/x-icon">
    @else
    <link rel="shortcut icon" href="{{asset('images/builders_5.png')}}" type="image/x-icon">
    @endif
   
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>
    @if(Request::segment(1) == 'bspyl-home' || Request::segment(1) == 'bspyl-about' || Request::segment(1) == 'bspyl-stages' ||Request::segment(1) == 'bspyl-form' )
    <a id="button" style="background-color:#dc3545"></a>
    @endif
    <a id="button"></a>     
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        
        <a class="navbar-brand" href="{{ asset('index')}}">
        @if(Request::segment(1) == 'bspyl-home' || Request::segment(1) == 'bspyl-about' || Request::segment(1) == 'bspyl-stages' ||Request::segment(1) == 'bspyl-form' )
        <img src='{{asset('images/bspyl.png')}}' style="height:50px;">
        @else
        <img src='{{asset('images/builders_5.png')}}' height='100px'>
        @endif
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
    
            <li class="{{ Request::segment(1) === 'index' ? 'nav-item active' : 'nav-item' }}"><a href="{{ asset('index')}}" class="nav-link">Home</a></li>

            <li class="{{ Request::segment(1) === 'about' ? 'nav-item active' : 'nav-item' }}"><a href="{{ asset('about') }}" class="nav-link">About Us</a></li>

            <li class="nav-item dropdown" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a class="nav-link">Services</a>
            
              <ul style='font-size:15px;' class="dropdown-content" id="dropdown_content">
                <li class="{{ Request::segment(1) === 'consultancy' ? 'nav-item active' : 'nav-item' }}dropdown-item" >
                  <a href="{{ url('/consultancy') }}" class="nav-link">Consultancy</a>
                </li>
                  <hr style="margin:0px">
                <li class="{{ Request::segment(1) === 'training' ? 'nav-item active' : 'nav-item' }}dropdown-item" >
                  <a href="{{ url('/training') }}" class="nav-link">Training</a>
                </li>
                  <hr style="margin:0px">
                <li class="{{ Request::segment(1) === 'iso-accreditation' ? 'nav-item active' : 'nav-item' }}dropdown-item" >
                  <a href="{{ url('/iso-accreditation') }}" class="nav-link">ISO Accreditation</a>
                </li>
              </ul>
            
            </li>

            <li class="{{ Request::segment(1) === 'builders-story' ? 'nav-item active' : 'nav-item' }}"><a href="{{ asset('builders-story') }}" class="nav-link">Builders Story</a></li>

            <li class="{{ Request::segment(1) === 'contact' ? 'nav-item active' : 'nav-item' }}"><a href="{{ asset('contact') }}" class="nav-link">Contact</a></li>
            
            <li><a class="btn btn-danger" href='{{ asset('bspyl-home') }}' role="button" class="nav-link" style="margin-top: 8px;">Join BSPYL</a></li>
          </ul>
        </div>
        
      </div>
    </nav>
    <!-- END nav -->

    @if(Request::segment(1) != "" )
    @if(Request::segment(1) != 'index' )

      @if(Request::segment(1) == 'contact')
      <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/contact_us.jpg') }} );" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      @elseif(Request::segment(1) == 'builders-story-single')
      <section class="hero-wrap hero-wrap-2" style="background-image: url( {{ asset('images/business_3.jpg') }} );" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      @elseif(Request::segment(1) == 'bspyl-home' || Request::segment(1) == 'bspyl-about' || Request::segment(1) == 'bspyl-stages' ||Request::segment(1) == 'bspyl-form' )
      <section class="hero-wrap hero-wrap-2" style="background-image: url( {{ asset('images/image_4.jpg') }} );" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      @else

      <section class="hero-wrap hero-wrap-2" style="background-image: url( {{asset('images/business.jpg')}} );" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      @endif

        <div class="container">
          <div class="row no-gutters slider-text align-items-end justify-content-center">

            <div class="col-md-9 ftco-animate pb-5 text-center">
              @if(Request::segment(1) === 'about')
                <h1 class="mb-3 bread">About Us</h1>
              @elseif(Request::segment(1) === 'consultancy')
                <h1 class="mb-3 bread">Consultancy Services</h1>
              @elseif(Request::segment(1) === 'training')
                <h1 class="mb-3 bread">Companies Training </h1>
              @elseif(Request::segment(1) === 'iso-accreditation')
                <h1 class="mb-3 bread">ISO Accreditation </h1>
              @elseif(Request::segment(1) === 'builders-story-single')
                <h1 class="mb-3 bread">Builders Story</h1>
              @elseif(Request::segment(1) === 'builders-story')
                <h1 class="mb-3 bread">Our History</h1>
              @elseif(Request::segment(1) === 'contact')
                <h1 class="mb-3 bread">Contact Us</h1>
              @elseif(Request::segment(1) === 'bspyl-home')
                <h1 class="mb-3 bread">Builders Simulation Program</h1>
              @elseif(Request::segment(1) === 'bspyl-about')
                <h1 class="mb-3 bread">Builders Simulation Program</h1>
              @elseif(Request::segment(1) === 'bspyl-form')
                <h1 class="mb-3 bread">Builders Simulation Program</h1>
              @elseif(Request::segment(1) === 'bspyl-stages')
                <h1 class="mb-3 bread">Builders Simulation Program</h1>
              @endif
              
              <p class="breadcrumbs"><span class="mr-2"><a href="{{ asset('index')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>
                @if(Request::segment(1) === 'about')
                About Us
                @elseif(Request::segment(1) === 'consultancy')
                Consultancy
                @elseif(Request::segment(1) === 'training')
                Training
                @elseif(Request::segment(1) === 'iso-accreditation')
                ISO Accreditation
                @elseif(Request::segment(1) === 'builders-story')
                Builders Stories
                @elseif(Request::segment(1) === 'builders-story-single')
                Single Story 
                @elseif(Request::segment(1) == 'bspyl-home' || Request::segment(1) == 'bspyl-about' || Request::segment(1) == 'bspyl-stages' ||Request::segment(1) == 'bspyl-form' )
                BSPYL 
                @elseif(Request::segment(1) === 'contact')
                Contact Us
                @endif
                <i class="ion-ios-arrow-forward"></i></span>
              </p>
            </div>
          </div>
        </div>
    </section>
  @else
  <div class="hero-wrap js-fullheight" style="background-image: url({{asset('images/consultation.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="line-height:1;font-size:50px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">BUILDERS</h2>
            <h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="font-size:30px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Companies Consulting & Training</h2>
            <p><a href="#Consultation"class="btn btn-primary py-3 px-4">Request A Consultation Now</a></p>
          </div>
        </div>
      </div>
    </div>    
    @endif

    @else
    <div class="hero-wrap js-fullheight" style="background-image: url({{asset('images/consultation.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="line-height:1;font-size:50px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">BUILDERS</h2>
            <h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="font-size:30px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Companies Consulting & Training</h2>
            <p><a href="#Consultation"class="btn btn-primary py-3 px-4">Request A Consultation Now</a></p>
          </div>
        </div>
      </div>
    </div> 
    @endif


  

@yield('content')

  <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2" style="font-family:'Franklin Gothic Medium';font-size:25px;">BUILDERS</h2>
              <p>BUILDERS is an Egyptian privately Held company founded in 2015 then officially established in 2018 as a Companies Consulting & Training company.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">

                <li class="ftco-animate"><a href="https://twitter.com/BuildersEgy"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/BuildersEGY/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/buildersegy/"><span class="icon-instagram"></span></a></li>
                {{-- <li class="ftco-animate"><a href=""><span class="icon-youtube"></span></a></li> --}}
                <li class="ftco-animate"><a href="www.LinkedIn.com/company/buildersegy"><span class="icon-linkedin"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2" style="font-family:'Franklin Gothic Medium';font-size:25px;">Business Hours</h2>
              <div class="opening-hours">
                <h4>Opening Days:</h4>
                <p class="pl-3">
                  <span>Saturday – Thursday : 10am to 5pm</span>
                </p>
                <h4>Vacations:</h4>
                <p class="pl-3">
                  <span>All Friday Days</span><br>
                  <span>All Official Holidays</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2" style="font-family:'Franklin Gothic Medium';font-size:25px;">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Dr Mostafa El-Naggar, Qism Shebeen El-Kom, Shibin el Kom, Menofia Governorate</span></li>
                  <li><span class="icon icon-phone"></span><span class="text">01022655405 , 01061560136</span></li>
                  <li><span class="icon icon-envelope"></span><a href='mailto:info@builderseg.com'><span class="text">Info@builderseg.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy; {{date('Y')}} All rights reserved By BUILDERS Company </a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
  </footer>
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#000"/>
    </svg>
  </div>
<!-- About -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="https://kit.fontawesome.com/89967b7876.js"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
  {{-- <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>  --}}
  <script src="{{ asset('js/scrollax.min.js') }}"></script>
  {{-- <script src="https://goo.gl/maps/mfmHx4cCsZaHmSFT9"></script> --}}
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s"></script> --}}

  {{-- <script src="{{ asset('js/google-map.js') }}"></script> --}}
  <script src="{{ asset('js/main.js') }}"></script>


<script>
    $('a[href^="#Consultation"]').on('click', function(event) {
      var target = $(this.getAttribute('href'));
      console.log(target.length);
      if( target.length ) {
          event.preventDefault();
          $('html, body').stop().animate({
              scrollTop: $(this.getAttribute('href')).offset().top
          }, 1000);
      }
    });
</script>

  <script>
    var btn = $('#button');
    $(window).scroll(function() {
    if ($(window).scrollTop() > 100) {
    btn.addClass('show');
    } else {
    btn.removeClass('show');
    }
    });
    btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, 'slow');
    });
  </script>

<script>
  $(window).scroll(function() {
  if ($(window).scrollTop() > 100) {
    document.getElementById('dropdown_content').style.backgroundColor = '#ddd';
  } else {
    document.getElementById('dropdown_content').style.backgroundColor = '#245d9c';
  }
  });
</script>
@if(Request::segment(1) == 'bspyl-home' || Request::segment(1) == 'bspyl-about' || Request::segment(1) == 'bspyl-stages' ||Request::segment(1) == 'bspyl-form' )
<script>
  $(window).scroll(function() {
  if ($(window).scrollTop() > 100) {
    document.getElementById('dropdown_content').style.backgroundColor = '#ddd';
  } else {
    document.getElementById('dropdown_content').style.backgroundColor = '#dc3545';
  }
  });
</script>
@endif

{{--  --}}
<!-- -->
<script type="text/javascript">
	$(document).on('click','#bspylForm_data',function(e){
    e.preventDefault();
	var form = $('#bspylForm').serialize();
  var url = $('#bspylForm').attr('action');
	$.ajax({
		url:url,
		dataType:'json',
		data:form,
    type:'post',
    success: function(data)
    {
      if(data.status == true){
        alert('Your Data Sent');
      $('#bspylForm')[0].reset();
      }
    },error: function(data_error,exception){
      if(exception == 'error'){
        var error_list = '';
        $.each(data_error.responseJSON.errors,function(index,v){
          error_list += '<li>'+v+'</li>'; 
        });
          $('.alert_error ul').addClass('alert-danger').html(error_list);
      }
    }
	  });
  });
</script>

<!--consultation -->
<script type="text/javascript">
	$(document).on('click','#submit_consultation',function(e){
    e.preventDefault();
	var form = $('#open_consultation').serialize();
  var url = $('#open_consultation').attr('action');
	$.ajax({
		url:url,
		dataType:'json',
		data:form,
    type:'post',
    success: function(data)
    {
      if(data.status == true){
        alert('Your Consultation Sent');
      $('#open_consultation')[0].reset();
      }
    },error: function(data_error,exception){
      if(exception == 'error'){
        var error_list = '';
        $.each(data_error.responseJSON.errors,function(index,v){
          error_list += '<li>'+v+'</li>'; 
        });
        $('.alert_error ul').html(error_list);
      }
    }
	  });
  });
</script>

<!--feedback -->
<script type="text/javascript">
	$(document).on('click','#submit_feedback',function(e){
    e.preventDefault();
	var form = $('#open_feedback').serialize();
  var url = $('#open_feedback').attr('action');
	$.ajax({
		url:url,
		dataType:'json',
		data:form,
    type:'post',
    success: function(data)
    {
      if(data.status == true){
        alert('Your FeedBack Sent');
      $('#open_feedback')[0].reset();
      }
    },error: function(data_error,exception){
      if(exception == 'error'){
        var error_list = '';
        $.each(data_error.responseJSON.errors,function(index,v){
          error_list += '<li>'+v+'</li>'; 
        });
        $('.alert_error ul').html(error_list);
      }

    }
	  });
  });
</script>
<!-- -->

  </body>
</html>