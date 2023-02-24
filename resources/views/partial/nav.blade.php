<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
    </ul>
  </form>
  <ul class="navbar-nav navbar-right ms-auto">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <img alt="image" src="{{ asset('storage/'.Auth::user()->foto) }}" class="rounded-circle mr-1">
      <div class="d-sm-none d-lg-inline-block ml-2"><span class="fw-bold">{{Auth::user()->name}}</span> | 
        @if (Auth::user()->jabatan == "super admin")
          <span class="text-danger bg-white rounded px-5">Super Admin</span>
        @elseif(Auth::user()->jabatan == "admin")
          <span class="text-success bg-white rounded px-5">Admin</span>
        @else
          <span class="text-primary bg-white rounded px-5">Waka</span>
        @endif
      </div>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Logged in 5 min ago</div>
        <a href="features-profile.html" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profile
        </a>
        <a href="features-activities.html" class="dropdown-item has-icon">
          <i class="fas fa-bolt"></i> Activities
        </a>
        <a href="features-settings.html" class="dropdown-item has-icon">
          <i class="fas fa-cog"></i> Settings
        </a>
        <div class="dropdown-divider"></div>
        <div class="dropdown-item justify-content-center">
          <a href="#" class="btn btn-icon icon-left btn-danger" data-bs-toggle="modal" data-bs-target="#logout"><i class="fas fa-arrow-left"></i> Logout </a>
        </div>
      </div>
    </li>
  </ul>
</nav>
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah Anda Yakin?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apa yakin?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ndak</button>
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="btn btn-danger">ngyes</button>
        </form>
      </div>
    </div>
  </div>
</div>