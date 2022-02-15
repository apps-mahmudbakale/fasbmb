@extends('layouts.app')

@section('content')
    <section class="wrapper bg-light">
      <div class="container-card">
        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 mt-2 mb-5" data-image-src="{{asset('img/gradient.jpg')}}">
          <div class="card-body py-14 px-0">
            <div class="container">
              <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center text-lg-start">
                <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="900">
                  <h1 class="display-2 mb-4 me-xl-5 me-xxl-0" style="font-size: 26px; text-align: center;">Welcome to Federation of African Societies of Biochemistry and Molecular Biology</h1>
                  <p class="lead  lh-sm mb-7 pe-xxl-15" style="font-size: 21px; text-align:center;">We aim to bring together African biochemists/molecular biologists through one national association</p>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                 {{--  <img class="img-fluid mb-n18" src="{{asset('img/biology-dna-svgrepo-com.svg')}}" srcset="{{asset('img/biology-dna-svgrepo-com.svg')}}" data-cue="fadeIn" data-delay="300" alt="" /> --}}
                 <img class="img-fluid mb-n18 hero" src="{{asset('img/biology-svgrepo-com.svg')}}" srcset="{{asset('img/biology-svgrepo-com.svg')}}" data-cue="fadeIn" data-delay="300" alt=""  />
                  {{-- <img class="img-fluid mb-n18" src="{{asset('img/dna.png')}}" srcset="{{asset('img/dna.png')}}" data-cue="fadeIn" data-delay="300" alt="" /> --}}
                </div>
                </div>
                <!--/column -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container -->
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!-- /.container-card -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light" id="about">
      <div class="container pt-14 pt-md-2 pb-14 pb-md-18">
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
          <div class="col-lg-6">
            <div class="row gx-md-5 gy-5">
              <!--/column -->
              <div class="col-12">
                <figure class="rounded mx-md-5"><img src="{{asset('img/fasbmb.jpg')}}" srcset="{{asset('img/fasbmb.jpg')}}" alt=""></figure>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Who Are We?</h2>
            <h3 class="display-4 mb-4" style="font-size: 16px;">Federation of African Societies of Biochemistry and Molecular Biology</h3>
            <p class="mb-6" style="text-align: justify;">The Federation of African Societies of Biochemistry and Molecular Biology (FASBMB) aims to bring together African biochemists/molecular biologists through their national associations.During the founding of the Federation in 1996 in Nairobi, Professor Makawiti, in his welcome speech said, "this conference comes at a time when resources for scientific research are becoming extremely scarce, personnel training and equipment for institutional research capacity building prohibitively expensive". Therefore, the task for the Federation must be to move to find solutions to the problem of diminishing research and training resources.</p>
{{--             <div class="row gy-3 gx-xl-8">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div> --}}
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row text-center">
          <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
            <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Our Journals</h2>
          {{--   <h3 class="display-4 mb-9 me-lg-n5">Check out some of our awesome projects with creative ideas and great design.</h3> --}}
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="carousel owl-carousel blog grid-view mb-17 mb-md-20" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
          <div class="item">
            <article>
              <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img src="{{asset('img/journal.png')}}" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="post-header">
                <h2 class="post-title h3 mb-3"><a class="link-dark" href="">Journal One</a></h2>
              </div>
              <!-- /.post-header -->
              <div class="post-footer">
                {{-- <ul class="post-meta">
                  <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></li>
                  <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Coding</a></li>
                </ul> --}}
                <!-- /.post-meta -->
              </div>
              <!-- /.post-footer -->
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
          <div class="item">
            <article>
              <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img src="{{asset('img/journal.png')}}" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="post-header">
                <h2 class="post-title h3 mb-3"><a class="link-dark" href="">Journal Two</a></h2>
              </div>
              <!-- /.post-header -->
              <div class="post-footer">
                {{-- <ul class="post-meta">
                  <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2021</span></li>
                  <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Workspace</a></li>
                </ul> --}}
                <!-- /.post-meta -->
              </div>
              <!-- /.post-footer -->
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
          <div class="item">
            <article>
              <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img src="{{asset('img/journal.png')}}" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="post-header">
                <h2 class="post-title h3 mb-3"><a class="link-dark" href="">Journal Three</a></h2>
              </div>
              <!-- /.post-header -->
              <div class="post-footer">
                {{-- <ul class="post-meta">
                  <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2021</span></li>
                  <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Meeting</a></li>
                </ul> --}}
                <!-- /.post-meta -->
              </div>
              <!-- /.post-footer -->
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
          <div class="item">
            <article>
              <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img src="{{asset('img/journal.png')}}" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="post-header">
                <h2 class="post-title h3 mb-3"><a class="link-dark" href="">Journal Four</a></h2>
              </div>
              <div class="post-footer">
               {{--  <ul class="post-meta">
                  <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2021</span></li>
                  <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Business Tips</a></li>
                </ul> --}}
                <!-- /.post-meta -->
              </div>
              <!-- /.post-footer -->
            </article>
            <!-- /article -->
          </div>
          <!-- /.item -->
        </div>
        <!-- /.owl-carousel -->
        <!--/.row -->
        <div class="row gx-3 gy-10 mb-15 mb-md-18 align-items-center">
            <h2 class="fs-16 text-uppercase text-center text-gradient gradient-1 mb-3" style="font-size: 24px;">Contact Us</h2>
          <div class="col-lg-6">
            <form action="" class="row">
              <div class="form-group col-lg-6">
              <label>Name</label>
              <input type="text" class="form-control">
            </div>
              <div class="form-group col-lg-6">
              <label>Email</label>
              <input type="text" class="form-control">
            </div>
              <div class="form-group">
              <label>Phone</label>
              <input type="text" class="form-control">
            </div>
              <div class="form-group">
              <label>Message</label>
              <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
              <div class="form-group">
              <br>
              <input type="submit" value="Submit" class="btn btn-success">
            </div>
            </form>
          </div>
          <!--/column -->
          <div class="col-lg-5 offset-lg-1">
            <h3 class="display-4 mb-8">Got any questions? Don't hesitate to get in touch.</h3>
            <div class="d-flex flex-row">
              <div>
                <img src="{{asset('img/icons/solid/pin.svg')}}" class="svg-inject icon-svg icon-svg-xs solid-duo text-grape-fuchsia mt-1 me-4" style="width: 1.5rem; height: 1.5rem;" alt="" />
              </div>
              <div>
                <h5 class="mb-0">Address</h5>
                <address>Address</address>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <img src="{{asset('img/icons/solid/rotary.svg')}}" class="svg-inject icon-svg icon-svg-xs solid-duo text-grape-fuchsia mt-1 me-4" style="width: 1.5rem; height: 1.5rem;" alt="" />
              </div>
              <div>
                <h5 class="mb-0">Phone</h5>
                <p></p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <img src="{{asset('img/icons/solid/emails.svg')}}" class="svg-inject icon-svg icon-svg-xs solid-duo text-grape-fuchsia mt-1 me-4" style="width: 1.5rem; height: 1.5rem;" alt="" />
              </div>
              <div>
                <h5 class="mb-0">E-mail</h5>
                <p class="mb-0"><a href="mailto:mail@email.com" class="link-body">mail@email.com</a></p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
@endsection