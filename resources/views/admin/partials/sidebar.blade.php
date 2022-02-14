  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @can('read-users') 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#auth-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-lock"></i><span>Authentication</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="auth-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li class="nav-item">
            <a href="{{route('admin.users.index')}}">
              <i class="bi bi-circle"></i><span>Users</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.roles.index')}}">
              <i class="bi bi-circle"></i><span>Roles</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      @endcan
      @can('read-users') 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#law-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-book"></i><span>Laws</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="law-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li class="nav-item">
            <a href="{{route('admin.constitution.index')}}">
              <i class="bi bi-circle"></i><span>Constitution</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.roles.index')}}">
              <i class="bi bi-circle"></i><span>Statutes & By-Laws</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      @endcan
    </ul>

  </aside><!-- End Sidebar-->