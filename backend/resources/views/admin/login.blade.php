<!DOCTYPE html>
<html lang="en">
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
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                
                <h4 class="fw-light">Sign in</h4>
                <form class="pt-3" action="{{ route('auth.login') }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ old('email') }}" placeholder="email">
                    @error('email')
                    <br> {{ $message }}
                         @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                    @error('password')
                    <br> {{ $message }}
                         @enderror
                  </div>
                  <div class="mt-3 d-grid gap-2">
                  <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN IN</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
   
    <script src="{{ asset('template/js1/off-canvas.js')}}"></script>
    <script src="{{ asset('template/js1/template.js')}}"></script>
    <script src="{{ asset('template/js1/settings.js')}}"></script>
    <script src="{{ asset('template/js1/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('template/js1/todolist.js')}}"></script>
  </body>
</html>