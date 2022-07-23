@extends('layouts.app')

@section('content')
    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16 text-center">
        <div class="row mb-3">
          <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
            <h2 class="fs-19 text-uppercase text-dark mb-3">Announcements</h2>
          {{--   <h3 class="display-4 mb-7 px-lg-19 px-xl-18">Think unique and be innovative. Make a difference with Sandbox.</h3> --}}
          </div>
          <!--/column -->
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
              <div class="card">
               <figure class="card-img-top"> <img src="{{asset('img/important-announcement.jpg')}}" style="height: 249px !important; width:525px;" alt="" /></figure> 
                <div class="card-body">
                  <h2 class="display-4 mb-3" style="font-size: 16px;">Africa's Great Decode' Webinar - 30 May 2022</h2>
                  <p class="lead  mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The title of the webinar is: "Africa's Great Decode: Embracing Bioinformatics as a Way of the Future". The event will be on Monday 30th May at 17:00 Central African Time (CAT)</p>
                  <a href="{{route('annoucements.africa-decode-webinar')}}"  class="btn btn-primary rounded">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
            <div class="card">
             <figure class="card-img-top"> <img src="{{asset('img/logoiubmb.png')}}" alt="" style="width: 370px;" /></figure> 
            <div class="card-body">
            <h2 class="display-4 mb-3" style="font-size: 16px;">A NOTE FROM IUBMB PRESIDENT</h2>
            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">A major mission of the IUBMB is to provide research and education opportunities for the next generation of biochemists and molecular biologists, especially for trainees in areas with limited resources.</p>
            <a href="https://mailchi.mp/iubmb/a-note-from-the-iubmb-president-april-2022?e=0e68e3fec7" target="_blank" class="btn btn-primary rounded">Read More</a>
          </div>
        </div>
          <!-- /column -->
        </div>
        <p></p>
          <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
            <div class="card">
             <figure class="card-img-top"> <img src="{{asset('img/logoiubmb.png')}}" alt="" style="width: 380px;" /></figure> 
            <div class="card-body">
            <h2 class="display-4 mb-3" style="font-size: 16px;">IUBMB 2022 APRIL NEWS</h2>
            <a href="https://mailchi.mp/iubmb/2022-iubmb-april-news?e=4a7d7cf1e0" target="_blank"class="btn btn-primary rounded">Read More</a>
          </div>
        </div>
          <!-- /column -->
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
          <div class="card">
           <figure class="card-img-top"> <img src="{{asset('img/logoiubmb.png')}}" alt="" style="width: 380px;" /></figure> 
          <div class="card-body">
          <h2 class="display-4 mb-3" style="font-size: 16px;">IUBMB Trainee Initiative Leadership Committee</h2>
          <a href="{{route('annoucements.trainee-initiative')}}" target="_blank"class="btn btn-primary rounded">Read More</a>
        </div>
      </div>
        <!-- /column -->
      </div>
        <!-- /.row -->
        <!-- /.row -->

      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
@endsection