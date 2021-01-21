@extends('layouts.app')
@section('content')
<style>
h4{
  font-family: 'Poppins', 'Arial Narrow', 'Arial', 'sans-serif' !important;
  color:#666;
}
</style>
<!-- Our Story-->
    <section class="ftco-section services-section bg-light">
        <div class="container mt-0">
          <ul>
            <h1 style="font-weight:700"> How we start (The beginning of our story): </h1>
              <li style="list-style:none">
                <ul>
                  <li style="list-style:none">
                    <h4>
                      For a long time, the focus in industry and related fields was on ‘hard’ skills. These skills were more job-specific and were actually related to production. However, in the field of employment, the employers today are looking for the candidate who have mastered the soft skills and have had professional training in personality development.  Today, achieving all-round development requires not only technical skills but also soft skills, which prepare the candidates for the job market in the new global order.  Development of soft skills and personality is becoming increasingly important as there is intense competition for the posts available. It is now well-established that many students who otherwise perform well in the traditional examination are very deficient in communication skills. <strong>BUILDERS</strong> has a cohesive content to play its initial role in building a new generation have the ability to face their present and future challenges, able to overcome the economic crisis and to be aware with their positive role within their society. 
                    </h4>
                  </li>
              </ul>
            </li>
          </ul>
        </div>
    </section>
<!-- -->

@include('layouts.ftco-counter')

    <section class="ftco-section services-section bg-light">
      <div class="container mt-0">

      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">

          </div>
        </div>

        @include('layouts.Mis_Vis')
        </div>

      </div>
    </section>

<!-- -->
@endsection