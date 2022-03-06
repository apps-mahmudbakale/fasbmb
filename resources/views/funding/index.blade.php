@extends('layouts.app')

@section('content')
    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16 text-center">
        <div class="row mb-3">
          <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
            <h2 class="fs-19 text-uppercase text-dark mb-3">Funding Oppurtunities</h2>
          {{--   <h3 class="display-4 mb-7 px-lg-19 px-xl-18">Think unique and be innovative. Make a difference with Sandbox.</h3> --}}
          </div>
          <!--/column -->
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
              <div class="card">
               <figure class="card-img-top"> <img src="{{asset('img/twas.png')}}" alt="" /></figure> 
                <div class="card-body">
                  <h2 class="display-4 mb-3" style="font-size: 16px;">TWAS GRANTS & OPPURTUNITIES</h2>
                  <p class="lead  mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">TWAS research grants are awarded to both individual scientists and research groups.</p>
                  <a href="https://4atki.r.a.d.sendibm1.com/mk/mr/vACjDH-qJCiZV8Qw-JXngTaSsldmYVGRPN2KZ1hEiTAItL1HL329gVjk7TAUboKHCkHE2leQpk9Fa_CaZnCT3Ls2Sva-4pkxGtgKLW2GSMvWqcxgorWbTToZY8DWWzfxUueVWu8" target="_blank" class="btn btn-primary rounded">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
            <div class="card">
             <figure class="card-img-top"> <img src="{{asset('img/nwu.png')}}" alt="" style="width: 370px;" /></figure> 
            <div class="card-body">
            <h2 class="display-4 mb-3" style="font-size: 16px;">POST DOCTORAL FELLOW FIXED-TERM APPOINTMENT</h2>
            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">A postdoctoral fellowship position is available in the DSI/NWU Preclinical Drug Development Platform (PCDDP), North-West University, Potchefstroom, South Africa.</p>
            <a href="{{route('nwu')}}" class="btn btn-primary rounded">Read More</a>
          </div>
        </div>
          <!-- /column -->
        </div>
        <p></p>
          <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
            <div class="card">
             <figure class="card-img-top"> <img src="{{asset('img/OWSD.png')}}" alt="" style="width: 380px;" /></figure> 
            <div class="card-body">
            <h2 class="display-4 mb-3" style="font-size: 16px;">CALL FOR APPLICATION FOR THE 2022 OWSD PhD FELLOWSHIP.</h2>
            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The Fellowship is offered to women scientists from Science and Technology Lagging Countries to undertake PhD research in the natural, engineering and information technology sciences at a host institute in the South.</p>
            <a href="{{route('owsd')}}" class="btn btn-primary rounded">Read More</a>
          </div>
        </div>
          <!-- /column -->
        </div>
          <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
            <div class="card">
             <figure class="card-img-top"> <img src="{{asset('img/ntu.jpg')}}" alt="" style="width: 360px;" /></figure> 
            <div class="card-body">
            <h2 class="display-4 mb-3" style="font-size: 16px;">CALL FOR APPLICATIONS NTU PRESIDENTIAL POSTDOCTORAL FELLOWSHIP 2022</h2>
            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The Presidential Postdoctoral Fellowship (PPF), aims to provide the opportunity for outstanding early career researchers from Singapore and around the world, to conduct independent investigations in any discipline at NTU.</p>
            <a href="{{route('ntu')}}" class="btn btn-primary rounded">Read More</a>
          </div>
        </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
@endsection