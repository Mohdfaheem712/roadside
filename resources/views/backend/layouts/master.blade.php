<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend/assets/img/apple-icon.png') }}') }}">
  <link rel="icon" type="image/png" href="{{ asset('backend/assets/img/favicon.png') }}') }}">
  <title>
    @yield('title')
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('backend/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('backend/assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

    {{-- sidebar --}}
    @if(Auth::check())
      @section('sidebar')
          @include('backend.layouts.sidebar')
      @show
    @endif

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    
    {{-- header navbar --}}
    @if(Auth::check())
      @section('header-nav')
          @include('backend.layouts.header-nav')
      @show
    @endif
    
    @yield('main-section')

    {{-- footer --}}
    @if(Auth::check())
      @section('footer')
          @include('backend.layouts.footer')
      @show
    @endif
      
      @if(Session::get('success'))
      <div class="position-fixed top-2 end-1 z-index-2">
        <div class="toast fade hide p-2 bg-white" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">
          <div class="toast-header border-0 bg-transparent">
            <i class="material-icons text-success me-2">
            check
            </i>
            <span class="me-auto font-weight-bold">Success</span>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal dark m-0" style="background-color:#0c0d0fd9">
          <div class="toast-body">
          {{ Session::get('success') }}
          </div>
        </div>
      </div>
      @endif

      @if(Session::get('error'))
      <div class="position-fixed top-2 end-1 z-index-2">
        <div class="toast fade hide p-2 bg-white" role="alert" aria-live="assertive" id="errorToast" aria-atomic="true">
          <div class="toast-header border-0 bg-transparent">
            <i class="material-icons text-error me-2">
            warning
            </i>
            <span class="me-auto font-weight-bold">Error</span>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal dark m-0" style="background-color:#0c0d0fd9">
          <div class="toast-body">
          {{ Session::get('error') }}
          </div>
        </div>
      </div>
      @endif
  </main>
  
  {{-- ui-setting --}}
  @if(Auth::check())
    @section('footer')
        @include('backend.layouts.ui-setting')
    @show
  @endif

  <!--   Core JS Files   -->
  <script src="{{ asset('backend/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/plugins/chartjs.min.js') }}"></script>
  @stack('scripts')
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    @if(Session::has('success'))
      $('#successToast').removeClass('hide');
      $('#successToast').addClass('show');
    @endif

    @if(Session::has('error'))
      $('#errorToast').removeClass('hide');
      $('#errorToast').addClass('show');
    @endif
  </script>
  
  </script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('backend/assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>
</body>

</html>