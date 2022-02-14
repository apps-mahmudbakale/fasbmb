    <header class="wrapper">
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light caret-none">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="{{route('welcome')}}">
              <img src="{{asset('img/logo.png')}}" class="logo" srcset="{{asset('img/logo.png')}}" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none">
              <a href="{{route('welcome')}}"><img src="{{asset('img/logo.png')}}" srcset="{{asset('img/logo.png')}}" alt="" /></a>
              <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}"> Home</a> </li>
              <li class="nav-item"><a class="nav-link" href="index.php#about">About Us</a></li>
             <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Committees</a>
               <ul class="dropdown-menu">
                 <li class="nav-item"><a class="dropdown-item" href="{{route('executives')}}">Executive Committee</a></li>
                 <li class="nav-item"><a class="dropdown-item" href="">Members</a></li>
               </ul>
             </li>
             <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!"> Laws</a>
               <ul class="dropdown-menu">
                 <li class="nav-item"><a class="dropdown-item" href="{{route('constitution.view')}}">Consititution</a></li>
                 <li class="nav-item"><a class="dropdown-item" href="">Statutes & By-Laws</a></li>
               </ul>
             </li>

             <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!"> Activities</a>
               <ul class="dropdown-menu">
                 <li class="nav-item"><a class="dropdown-item" href="">Conferences</a></li>
                 <li class="nav-item"><a class="dropdown-item" href="">Courses & Meetings</a></li>
               </ul>
             </li>

             <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Resources</a>
               <ul class="dropdown-menu">
                 <li class="nav-item"><a class="dropdown-item" href="{{route('oppurtunities')}}">Funding Opportunities</a></li>
                 <li class="nav-item"><a class="dropdown-item" href="">Resourceful Links</a></li>
                 <li class="nav-item"><a class="dropdown-item" href="">Publications</a></li>
               </ul>
             </li>
              
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
              <li class="nav-item d-lg-none">
                <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>