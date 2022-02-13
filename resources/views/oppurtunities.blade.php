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
{{--           <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
            <div class="card">
             <figure class="card-img-top"> <img src="{{asset('img/twas.png')}}" alt="" /></figure> 
            <div class="card-body">
            <h2 class="display-4 mb-3" style="font-size: 24px;">TWAS GRANTS & OPPURTUNITIES</h2>
            <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">TWAS research grants are awarded to both individual scientists and research groups.</p>
            <a href="#" class="btn btn-primary rounded">Read More</a>
          </div>
        </div>
          <!-- /column -->
        </div> --}}
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
@endsection