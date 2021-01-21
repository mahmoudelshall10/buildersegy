@extends('layouts.app')
@section('content')
<style type="">
section{
    color: #0d4c92
}
section ul li{
    font-family:Lora, serif;
    font-size:30px;
    font-weight:bold
    color:#000;
}
section ul li h2{
    font-family:Poppins;
    font-size:30px;
    font-weight:bold;
    color:#0d4c92
}

section ul li ul p{
    font-family:Poppins !important;
    font-size:20px !important;
    font-weight:normal;
    color: black;
}
</style>
  	
<section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h1 style="font-family:Lora, serif;font-size:60px;font-weight:bold">Managerial Services</h1>
          <img style="height:400px;width:650px;" src="images/consultation_2.jpg" alt="consultation">
        </div>
      </div>
      <div class="row d-flex">
        <ul>
        @foreach ($All_Consultancies as $objConsultancy)
            <li><h2>{{$objConsultancy->fldName}}</h2>
                <ul>
                    <p>{{$objConsultancy->fldSubject}}</p>
                </ul>
            </li>
        @endforeach
        </ul>
      </div>

    </div>
  </section>

@endsection