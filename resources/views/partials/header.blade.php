    <header class="wrapper">
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light caret-none">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="{{route('welcome')}}">
              <img src="{{asset('img/logo.png')}}" srcset="{{asset('img/logo.png')}}" alt="" style="width: 256px;" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none">
              <a href="{{route('welcome')}}"><img src="{{asset('img/logo.png')}}" srcset="{{asset('img/logo.png')}}" alt="" /></a>
              <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}"><i class="fa fa-home"></i> Home</a> </li>
              <li class="nav-item"><a class="nav-link" href="#about"><i class="fa fa-question-circle"></i> About Us</a></li>
             <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!"><i class="fa fa-users"></i> Committees</a>
               <ul class="dropdown-menu">
                 <li class="nav-item"><a class="dropdown-item" href="">Executive Committee</a></li>
                 <li class="nav-item"><a class="dropdown-item" href="">Members</a></li>
               </ul>
             </li>
             <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!"><i class="fa fa-gavel"></i> Laws</a>
               <ul class="dropdown-menu">
                 <li class="nav-item"><a class="dropdown-item" href="">Consititution</a></li>
                 <li class="nav-item"><a class="dropdown-item" href="">Statues & By-Laws</a></li>
               </ul>
             </li>

             <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!"><i class="fa fa-clock"></i> Activities</a>
               <ul class="dropdown-menu">
                 <li class="nav-item"><a class="dropdown-item" href="">Conferences</a></li>
                 <li class="nav-item"><a class="dropdown-item" href="">Courses & Meetings</a></li>
               </ul>
             </li>

             <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!"><i class="fa fa-briefcase"></i> Resources</a>
               <ul class="dropdown-menu">
                 <li class="nav-item"><a class="dropdown-item" href="">Funding Opportunities</a></li>
                 <li class="nav-item"><a class="dropdown-item" href="">Resourceful Links</a></li>
                 <li class="nav-item"><a class="dropdown-item" href="">Publications</a></li>
               </ul>
             </li>
              
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-collapse -->
{{--           <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
              <li class="nav-item">
                <nav class="nav social social-muted justify-content-end text-end">
                  <a href="#"><i class="uil uil-twitter"></i></a>
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                  <a href="#"><i class="uil uil-dribbble"></i></a>
                  <a href="#"><i class="uil uil-instagram"></i></a>
                </nav>
                <!-- /.social -->
              </li>
              <li class="nav-item d-lg-none">
                <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div> --}}
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>