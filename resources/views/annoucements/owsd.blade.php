@extends('layouts.app')

@section('content')
    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16">
        <div class="row mb-3">
          <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
            <h2 class="fs-19 text-uppercase text-dark mb-3">Funding Oppurtunities</h2>
          </div>
          <!--/column -->
        </div>
        <div class="row">
          <div class="col-md-2 col-lg-2 col-xl-2 col-xxl-2 text-center">
           <img src="{{asset('img/OWSD.png')}}" class="fund-img" alt=""/>
           <p></p>
          </div>
          <div class="col-gutter"></div>
          <div class="col-md-10 col-lg-10 col-xl-10 col-xxl-9 mx-auto">
            <p class="text-dark fs-lg">Dear OWSD Network,</p>

            <p class="text-dark" style="text-align: justify;">We are pleased to open the Call for Applications for the 2022 OWSD PhD Fellowships. We kindly ask your help in sharing this opportunity with anyone in your networks who could benefit from the Fellowship.</p>

            <p class="text-dark" style="text-align: justify;">The Fellowship is offered to women scientists from Science and Technology Lagging Countries to undertake PhD research in the natural, engineering and information technology sciences at a host institute in the South.</p>

            <p class="text-dark" style="text-align: justify;">Costs covered include travel to the host country, tuition fees, board, accommodation and living expenses, and a modest discretionary annual allowance. The programme is administered with funds generously provided by the Swedish International Development Cooperation Agency (Sida) and is offered in partnership with host institutes throughout the developing world.</p>

            <p class="text-dark fs-lg">Two types of fellowship are available:</p>
            <p class="text-dark" style="text-align: justify;">A full-time fellowship (maximum 4 years funding), where the research is undertaken entirely at a host institute in another developing country in the South.</p>
            <p class="text-dark" style="text-align: justify;">A sandwich fellowship, where the candidate must be a registered PhD student in her home country and undertakes part of her studies at a host institute in another developing country. The sandwich fellowship is awarded for a minimum of 1 and a maximum of 3 research visits at the host institute. OWSD particularly encourages candidates to consider the sandwich option, which allows them to earn the PhD in their home country while accessing specialist researchers and equipment abroad, at the host institute.</p>
            <p class="text-dark" style="text-align: justify;">The full Call for Applications is attached here, along with a poster which can be printed and distributed at your institutes or sent digitally.  We are also attaching some tips for successful applications. We would greatly appreciate your help in spreading the word about this opportunity to your networks and to anyone you think could benefit.</p>
             <p class="text-dark text-uppercase fs-lg">ELIGIBILITY</p>
             <p class="text-dark" style="text-align: justify;">All information regarding the fellowship, including full eligibility and selection criteria, required application materials, and the link to the application form, can be found on the OWSD website at: <a href="https://owsd.net/career-development/phd-fellowship">https://owsd.net/career-development/phd-fellowship</a></p> 
             <p class="text-dark fs-lg">All application materials are also available in French and Spanish at:</p>
             <p><b>[French]:</b><a href="https://owsd.net/bourses-de-doctorat">https://owsd.net/bourses-de-doctorat</a></p>  

             <p><b>[Spanish]:</b> <a href="https://owsd.net/becas-de-doctorado-owsd">https://owsd.net/becas-de-doctorado-owsd</a></p>

             <p><b>Deadline</b></p>
             <p>The deadline for applications for this fellowship is <b>April 15, 2022</b>.</p>

             <p><b>Contact</b></p>
             <p>Questions regarding the fellowship may be sent to fellowships@owsd.net. Please do not reply to this email with questions.</p>

             <p>Kind regards,</p>

             <p>OWSD Secretariat</p>

             <div class="row">
               <div class="col-md-4">
                 <div class="card">
                   <iframe src="{{asset('OWSD PhD Fellowships_2022 Call for Applications.pdf')}}" width="100%" height="500px">
                       </iframe>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="card">
                   <iframe src="{{asset('OWSD PhD Fellowships 2022 poster.pdf')}}" width="100%" height="500px">
                       </iframe>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="card">
                   <iframe src="{{asset('Excellent Application Advice.pdf')}}" width="100%" height="500px">
                       </iframe>
                 </div>
               </div>
             </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

@endsection