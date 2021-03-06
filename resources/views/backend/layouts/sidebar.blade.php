<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{ route('admin.dashboard') }}" target="_blank">
        <img src="{{ core()->getConfigData('logo') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">{{ core()->getConfigData('title') }}</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/dashboard')) ? 'bg-gradient-primary active' : '' }}" href="{{ route('admin.dashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/queries')) ? 'bg-gradient-primary active' : '' }}" href="{{ route('admin.queries') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">User Queries</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/gallery*')) ? 'bg-gradient-primary active' : '' }}" href="{{ route('admin.gallery') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Gallery</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/blog*')) ? 'bg-gradient-primary active' : '' }}" href="{{ route('admin.blog') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Blogs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/client-reviews*')) ? 'bg-gradient-primary active' : '' }}" href="{{ route('admin.client-reviews') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Client Reviews</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/services*')) ? 'bg-gradient-primary active' : '' }}" href="{{ route('admin.services') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Services</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/profile')) ? 'bg-gradient-primary active' : '' }}" href="{{ route('admin.profile') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/setting')) ? 'bg-gradient-primary active' : '' }}" href="{{ route('admin.setting') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons text-lg position-relative">settings</i>
            </div>
            <span class="nav-link-text ms-1">Website Setting</span>
          </a>
        </li>
        
      </ul>
    </div>
  </aside>