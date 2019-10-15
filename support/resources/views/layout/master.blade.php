<!-- {{-- <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <meta name="csrf-token" value="{{ csrf_token() }}">
    <link href="{{ asset('admin/css/library.min.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css')}}" rel="stylesheet">


  </head>
  <body>

  <div id="app">
  <router-view></router-view>

  </div>

  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('admin/js/library.min.js') }}"></script>

  </body>
</html> --}} -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FPOLY SUPPORT</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    {{-- DatePicker --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"><script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script> --}}
    {{--EndDatePicker  --}}
    {{-- FONT AWSOME --}}
    {{-- <script src="https://kit.fontawesome.com/1d81d68418.js" crossorigin="anonymous"></script> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
    {{-- <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet"> --}}
    {{-- END FONTAWSOME --}}
 </body>
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
  </head>
  <body>
<body>
@if (session('success'))
    <div class="purchase-banner-active"> 
    <div class= "item-purchase-banner">
            <p class="banner-text"> {{ session('success') }}</p>
            
              <span class="toggler-close"><i class="mdi mdi-close"></i></span>
          </div>
          </div>
        @endif
        @if (session('error'))
       
<div class="modal fade modelAlert" id="modelAlert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content alert alert-danger" role="alert">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cảnh báo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert">
      {{ session('error') }}
</div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
@endif
@if (session('successResurt'))
    <div class="purchase-banner-active"> 
    <div class= "alert-successs item-purchase-banner">
            <p class="banner-text"> {{ session('successResurt') }}</p>
            
              <span class="toggler-close"><i class="mdi mdi-close"></i></span>
          </div>
          </div>
        @endif
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modelAlert">Large modal</button> -->


  @include('layout.header')
  @yield('content')
  @include('layout.footer')
  <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('assets/js/demo_1/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
    <script>
  $('.modelAlert').modal();
  </script>
  <style>
  .alert-successs {
    color: #0d704d!important;
    background-color: #75c1a6!important;
    border-color: #bff4e1!important;
}
  </style>
</html>
