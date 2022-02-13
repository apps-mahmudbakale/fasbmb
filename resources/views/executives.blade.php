@extends('layouts.app')

@section('content')
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row mb-3">
          <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Executive Committee</h2>
          {{--   <h3 class="display-4 mb-7 px-lg-19 px-xl-18">Think unique and be innovative. Make a difference with Sandbox.</h3> --}}
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
          <div class="col-md-4 col-lg-4">
            <div class="position-relative">
              <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('img/avatars/avatar.png')}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Prof. Lawal Bilbis</h4>
                  <p class="mb-0"><i class="fa fa-briefcase"></i> President</p>
                  <p class="mb-0"><i class="fa fa-globe"></i> Nigeria</p>
                  <p class="mb-0"><i class="fa fa-envelope"></i> bilbis360@hotmail.com</p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-4 col-lg-4">
            <div class="position-relative">
              <div class="shape rounded bg-soft-red rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('img/avatars/avatar.png')}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Prof. A. Pual Kappo</h4>
                  <p class="mb-0"><i class="fa fa-briefcase"></i> Deputy President</p>
                  <p class="mb-0"><i class="fa fa-globe"></i> South Africa</p>
                  <p class="mb-0"><i class="fa fa-envelope"></i> akappo@uj.ac.za</p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-4 col-lg-4">
            <div class="position-relative">
              <div class="shape rounded bg-soft-violet rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('img/avatars/avatar.png')}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Prof. Khalid Fares</h4>
                  <p class="mb-0"><i class="fa fa-briefcase"></i> Treasurer</p>
                  <p class="mb-0"><i class="fa fa-globe"></i> Morocco</p>
                  <p class="mb-0"><i class="fa fa-envelope"></i> fares@uca.ac.ma</p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-4 col-lg-4">
            <div class="position-relative">
              <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('img/avatars/avatar.png')}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Prof. Stanley Mukanganyama</h4>
                  <p class="mb-0"><i class="fa fa-briefcase"></i> A/Secretary General</p>
                  <p class="mb-0"><i class="fa fa-globe"></i> Zimbabwe</p>
                  <p class="mb-0"><i class="fa fa-envelope"></i> smukanganyama@medic.uz.ac.zw</p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-4 col-lg-4">
            <div class="position-relative">
              <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('img/avatars/avatar.png')}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Dr. Nyarai D. Soko</h4>
                  <p class="mb-0"><i class="fa fa-briefcase"></i> Meetings Counselor </p>
                  <p class="mb-0"><i class="fa fa-globe"></i> Zimbabwe</p>
                  <p class="mb-0"><i class="fa fa-envelope"></i> ndsoko@yahoo.com</p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-4 col-lg-4">
            <div class="position-relative">
              <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('img/avatars/avatar.png')}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Prof. Cyprian Katongo</h4>
                  <p class="mb-0"><i class="fa fa-briefcase"></i> Committee Member </p>
                  <p class="mb-0"><i class="fa fa-globe"></i> Zambia</p>
                  <p class="mb-0"><i class="fa fa-envelope"></i> ckatongo@unza.zm</p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-4 col-lg-4">
            <div class="position-relative">
              <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('img/avatars/avatar.png')}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">DR. Sahar Gamil</h4>
                  <p class="mb-0"><i class="fa fa-briefcase"></i> Committee Member</p>
                  <p class="mb-0"><i class="fa fa-globe"></i> Sudan</p>
                  <p class="mb-0"><i class="fa fa-envelope"></i> dr_sahar_sj@hotmail.com </p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-4 col-lg-4">
            <div class="position-relative">
              <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('img/avatars/avatar.png')}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Dr. Clarence Mangera</h4>
                  <p class="mb-0"><i class="fa fa-briefcase"></i> Committee Member </p>
                  <p class="mb-0"><i class="fa fa-globe"></i> Kenya</p>
                  <p class="mb-0"><i class="fa fa-envelope"></i> clarence.mangera@egerton.ac.ke </p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-4 col-lg-4">
            <div class="position-relative">
              <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('img/avatars/avatar.png')}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Prof. NEERGHEEN Vidushi Shradha</h4>
                  <p class="mb-0"><i class="fa fa-briefcase"></i> Committee Memeber</p>
                  <p class="mb-0"><i class="fa fa-globe"></i> Mauritius</p>
                  <p class="mb-0"><i class="fa fa-envelope"></i> v.neergheen@uom.ac.mu </p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
         <div class="col-md-4 col-lg-4">
            <div class="position-relative">
              <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('img/avatars/avatar.png')}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Prof. Fetchall Taoufiq</h4>
                  <p class="mb-0"><i class="fa fa-briefcase"></i> Committee Member</p>
                  <p class="mb-0"><i class="fa fa-globe"></i> Morocco</p>
                  <p class="mb-0"><i class="fa fa-envelope"></i> taoufiq.fechtali@gmail.com</p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
            <div class="col-md-4 col-lg-4">
            <div class="position-relative">
              <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('img/avatars/avatar.png')}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Dr. Chala Kenenisa </h4>
                  <p class="mb-0"><i class="fa fa-briefcase"></i> Committee Member </p>
                  <p class="mb-0"><i class="fa fa-globe"></i> Ethiopia</p>
                  <p class="mb-0"><i class="fa fa-envelope"></i> chala.kenenisa@ju.edu.et </p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-4 col-lg-4">
            <div class="position-relative">
              <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('img/avatars/avatar.png')}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Prof. Iqbal Parker</h4>
                  <p class="mb-0"><i class="fa fa-briefcase"></i> Ex officio/IUBMB SG</p>
                  <p class="mb-0"><i class="fa fa-globe"></i> South Africa</p>
                  <p class="mb-0"><i class="fa fa-envelope"></i> iqbal.parker@uct.ac.za </p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
@endsection