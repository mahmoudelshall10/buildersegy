@extends('layouts.app')
@section('content')
<style type="">
section{
    color:#000;
}
section ul li{
    font-family:Lora, serif;
    font-size:30px;
    font-weight:bold
}
section ul li h2{
    font-family:Poppins;
    font-size:30px;
    font-weight:bold;
    /* 0d4c92  999999*/
}

section ul li strong{
    font-family:Poppins;
    font-size:30px;
    font-weight:bold;
    color: #0d4c92

}

section ul li ul strong{
    font-family:Poppins;
    font-size:20px;
    font-weight:bold;
    color: #0d4c92
}

section ul li small{
    font-family:Poppins;
    font-size:20px;
}
section h4{
    font-family:Poppins;
    font-size:20px;
    font-weight:bold;
    color: #0d4c92
}

section ul li{
    font-family:Poppins !important;
    font-size:20px !important;
    font-weight:normal;
}
section li h2 p{
    font-family:Poppins !important;
    font-size:20px !important;
    font-weight:normal;
}
</style>
  	
<section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h1 style="font-family:Lora, serif;font-size:60px;font-weight:bold">ISO Accreditation</h1>
          <img style="height:400px;width:400px;" src="{{asset('images/iso1.png')}}" alt="iso">
        </div>
      </div>
      <div class="row d-flex">
        <ul>
            <li style="list-style:none"><strong>ISO-Accreditation</strong> <small>is obtained in two steps</small>  
                <ul>
                    <li>The First Step:- prepare the file and qualify the company for international standards. </li>
                    <h4>This is provided by BUILDERS.</h4>
                    <li>The Second Step:- Asking from the grant companies to obtain the certificate and make the necessary review on the company and its system. </li>
                    <br>
                    <p>We deal with the strong companies which has IAS accredited organization for the Management system certification  (ISO 9001, ISO 14001, ISO 22000 & OHSAS 18001, ISO 27001, ISO 13485, 50001 certification) and RABQSA. </p>
                    <br>
                    <p>We specialize in <strong>ISO 9001 Certification</strong> standards is known as Quality Management System. This QMS standard is a generic standard and is applicable for to all organizations, regardless of type, size and product / services provided. Any organization those who wishing for customer satisfaction, continual improvement of their Quality Managements system may choose the <strong>ISO 9001</strong> implementation in the organization and may apply for QMS. </p>
                </ul>
            </li>
        </ul>
      </div>

    </div>
  </section>

@endsection