  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <span class="ms-1 font-weight-bold">Admin</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item ">
          <a class="nav-link {{ Request::is('categories') ? 'active':'' }}" href="{{ url('categories') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Fields</span>
          </a>
        </li>

        <li class="nav-item ">
          <a class="nav-link {{ Request::is('add-category') ? 'active':'' }}" href="{{ url('add-category') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Add Field</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('doctor') ? 'active':'' }} " href="{{ url('doctor') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Doctors</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('add-doctor') ? 'active':'' }} " href="{{ url('add-doctor') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Add Doctor</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('lab') ? 'active':'' }} " href="{{ url('lab') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Labs</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('add-lab') ? 'active':'' }} " href="{{ url('add-lab') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Add Lab</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('users') ? 'active':'' }} " href="{{ url('users') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>
