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
           <img src="{{asset('img/logoiubmb.png')}}" class="fund-img" style="margin-left: 190%" alt=""/>
           <p></p>
          </div>
          <div class="col-gutter"></div>
          <div class="col-md-10 col-lg-10 col-xl-10 col-xxl-9 mx-auto">
            <p class="text-dark" style="text-align: justify;">The International Union of Biochemistry and Molecular Biology (IUBMB) invites you to consider applying for <a href="https://iubmb.org/activities/fellowship-programs/" target="_blank">one of the many fellowships</a> we have to offer scientists from around the world. These include, among other things,</p>
              <ul>
                <li>The <a href="https://iubmb.org/activities/fellowship-programs/iubmb-wood-whelan-research-fellowships/">Wood-Whelan Research Fellowships</a>, which support junior (graduate and postgraduate) trainees for up to 4 months of training in another lab to complete critical training and/or research for your research program</li>
                <li>The <a href="https://iubmb.org/activities/fellowship-programs/iubmb-mid-career-research-fellowships/mid-career-awardees/">Mid-Career Research Fellowships</a>, which support established investigators to travel for advanced training and/or collaborative work. This year’s awardee is <a href="https://iubmb.org/activities/fellowship-programs/iubmb-mid-career-research-fellowships/mid-career-awardees/">Dr. Alexandre Mboene Noah</a> from the University of Douala in Cameroon.</li>
                <li>The <a href="https://iubmb.org/activities/fellowship-programs/iubmb-relocation-support-displaced-trainees/">Relocation Support for Displaced Trainees</a>, which provides funds for junior researchers whose training is interrupted due to armed conflict or natural disasters.</li>
                <li>Travel awards to attend <a href="https://iubmb.org/activities/fellowship-programs/iubmb-milliporesigma-virtual-meeting-fellowships/"> virtual scientific conferences</a>.</li>
                <li>Travel awards to attend <a href="https://iubmb.org/activities/fellowship-programs/iubmb-travel-fellowships/">in-person scientific conferences</a>.</li>
              </ul>
              <p class="text-dark" style="text-align: justify">We are also pleased to share that IUBMB’s Executive Committee recently approved of the creation of five travel awards to support the attendance of African graduate students and postdocs at the <a href="https://enablenetwork.eu/seville-2022/">2022 FEBS-IUBMB-ENABLE Conference</a> this November 16-18, 2022, in Seville, Spain!</p>
              <p class="text-dark" style="text-align: justify">We certainly hope you can take advantage of at least one of these wonderful opportunities, and please share these with your colleagues, friends, and family. We also acknowledge that while our intentions may be good, we sometimes are unaware of other barriers to taking full advantage of these opportunities. If there are additional barriers that prevent you from being able to apply, please let us know so that we can broaden access to trainees from around the world. For further questions about our fellowships, please email Dr. Dan Dries, Chair of the Fellowships Committee, at <a href="mailto:dries@juniata.edu">dries@juniata.edu</a>.</p>
             </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

@endsection