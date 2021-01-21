@extends('layouts.app')
@section('content')
<style>
ol{
  color: #000
}
/* ol li{
  color: #0d4c92
} */

</style>
  	
<section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h2 style="font-size:60px">Companies Training</h2>
          <img style="height:400px;width:650px;" src="images/training.jpg" alt="training">
        </div>
      </div>
      <div class="row d-flex">
          {{-- #0d4c92 --}}
        <ul>
            <li style="list-style:none;color:#000">We can also provide training and workshops on topics of your choice right in your office or at your preferred location. 
                We require a minimum of 10 participants. 
                Our courses run from 2 – 8 weeks
            </li>
        </ul>

        <table class="table table-bordered" style="color:#0d4c92">
            <thead class="thead-dark">

              <tr>
                <th colspan='2' style="text-align:center" scope="col">Management & Supervisory Development</th>
              </tr>
              <tr>
                <th style="text-align:center" scope="col">Course Title</th>
                <th scope="col">Duration</th>
              </tr>


            </thead>
            <tbody>
            @foreach ($All_Trainings as $objTraining)
              <tr>
                <td scope="row">{{$objTraining->fldName}}</td>
                <td scope="row">{{$objTraining->fldDuration}}</td>
              </tr>
              @endforeach
            </tbody>

        </table>
        <ul>
            <li style="font-size:20px;font-weight:bold;color:#0d4c92">Training Methodology
                <ul>
                    <li style="font-size:15px;font-weight:normal;color:#000">Our training delivery is categorized into three phases: 
                        <ol>
                            <li style="font-weight:bold;color:#0d4c92">Pre-training delivery
                                <ul style="list-style:none">
                                    <li style="font-weight:normal;color:#000">
                                        Need assessment is carried out at this stage to ascertain and contrast the capacity, ability and official functions of a target group. The skill gaps are identified in this process and appropriate modules are developed.
                                    </li>
                                </ul>
                            </li>

                            <li style="font-weight:bold;color:#0d4c92">Training delivery
                                <ul style="list-style:none">
                                    <li style="font-weight:normal;color:#000">
                                        Need assessment is carried out at this stage to ascertain and contrast the capacity, ability and official functions of a target group. The skill gaps are identified in this process and appropriate modules are developed.
                                    </li>
                                </ul>
                            </li>

                            <li style="font-weight:bold;color:#0d4c92">Post-training 
                                <ul style="list-style:none">
                                    <li style="font-weight:normal;color:#000">
                                        Need assessment is carried out at this stage to ascertain and contrast the capacity, ability and official functions of a target group. The skill gaps are identified in this process and appropriate modules are developed.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </li>
                </ul>
            </li>
        </ul>


      </div>

    </div>
  </section>

@endsection