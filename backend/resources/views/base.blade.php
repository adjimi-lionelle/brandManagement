@auth
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Brand Management </title>
  
    <link rel="stylesheet" href="{{ asset('template/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
   
    <link rel="stylesheet" href="{{ asset('template/css1/style.css')}}">
  
    <link rel="shortcut icon" href="{{ asset('template/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="{{ route('admin.dashboard') }}">
              <h1>B M</h1>
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">

            <li class="nav-item">
                <h4 class="text-black fw-bold"> Bienvenue {{ Auth::user()->name }} </h4></
                
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            </li>
            <li class="nav-item">
               <form action="{{ route('auth.logout') }}" method="post">
                 @method("delete")
                 @csrf 
                 <button class="nav-link" style="size:40px;fond-weigth:bold">Sign out</button>
               </form>
            </li>
          
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.dashboard')}}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">Brand</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brand.index') }}">List</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brand.create') }}">Add</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>

             @yield('content')
    
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
   
    <script src="{{ asset('template/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
    <script src="{{ asset('template/vendors/select2/select2.min.js')}}"></script>
   
    <script src="{{ asset('template/js1/off-canvas.js')}}"></script>
    <script src="{{ asset('template/js1/template.js')}}"></script>
    <script src="{{ asset('template/js1/settings.js')}}"></script>
    <script src="{{ asset('template/js1/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('template/js1/todolist.js')}}"></script>
    
    <script src="{{ asset('template/js1/file-upload.js')}}"></script>
    <script src="{{ asset('template/js1/typeahead.js')}}"></script>
    <script src="{{ asset('template/js1/select2.js')}}"></script>
    @endauth
