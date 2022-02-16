@extends('layouts.app')

@section('content')
    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16">
        <div class="row mb-3">
          <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
            <h2 class="fs-19 text-uppercase text-dark mb-3">Resourceful Links</h2>
          {{--   <h3 class="display-4 mb-7 px-lg-19 px-xl-18">Think unique and be innovative. Make a difference with Sandbox.</h3> --}}
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
          <table class="table table-bordered table-striped">
           <tbody>
            <tr>
                   <td width="17%"><strong>IUBMB</strong></td>
                   <td width="83%">International Union of Biochemistry and Molecular
                     Biology</td>
                     <td width="17%"><a href="http://www.iubmb.org/" class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-link"></i></a></td>
                 </tr>
                 <tr>
                   <td><strong>EMBO</strong></td>
                   <td>European Molecular Biology Organization</td>
                      <td><a href="http://www.embo.org" target="_blank" class="btn btn-primary btn-sm" ><i class="fa fa-link"></i></a></td>
                 </tr>
                 <tr>
                   <td><strong>SASBMB</strong></td>
                   <td>South African Society of Biochemistry and Molecular
                     Biology</td>
                      <td><a href="http://www.sasbmb.org.za" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-link"></i></a></td>
                 </tr>
                 <tr>
                   <td><strong>FAOBMB</strong></td>
                   <td>Federation of Asian and Oceanic Biochemists &amp; Molecular Biologists</td>
                    <td><a href="http://www.bic.nus.edu.sg/faobmb/home.html" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-link"></i></a></td>
                 </tr>
                 <tr>
                   <td><strong>PABMB</strong></td>
                   <td>Panamerican Association for Biochemistry and Molecular Biology</td>
                    <td><a href="http://pabmb.fcien.edu.uy/main1.htm" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-link"></i></a></td>
                 </tr>
                 <tr>
                   <td><strong>FASEB</strong></td>
                   <td>Federation of American Societies for Experimental Biology</td>
                     <td><a href="http://www.faseb.org/" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-link"></i></a></td>
                 </tr>
                 <tr>
                   <td><strong>FEBS</strong></td>
                   <td>Federation of European Biochemical Societies</td>
                    <td><a href="http://www.febs.org/" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-link"></i></a></td>
                 </tr>
              </tbody>
          </table>
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
@endsection