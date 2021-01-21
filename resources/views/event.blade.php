@extends('admin.auth.user_layouts.app')
@section('content')
<img src="{{asset('images/builders.png')}}" alt="Builders" style="background-size:cover">
<body class="login-page">
        <b id="demo" style="font-size:27px">BUILDERS......Coming Soon</b>
<!-- Display the countdown timer in an element -->


<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Sep 9, 2019 00:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = days + " Days " + hours + " Hours "
    + minutes + " Minutes " + seconds + " Seconds ";

    // If the count down is finished, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
    }, 1000);
</script>
@endsection