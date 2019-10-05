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
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!--calendar -->
    <link href="{{asset('assets/asset/css/fullcalendar.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/asset/css/fullcalendar.print.css')}}" rel='stylesheet' media='print' >
    <script src="{{asset('assets/asset/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
  
    <!--end calendar --?
    {{-- DatePicker --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"><script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script> --}}
    {{--EndDatePicker  --}}
    {{-- FONT AWSOME --}}
    <script src="https://kit.fontawesome.com/1d81d68418.js" crossorigin="anonymous"></script>
    <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
    <!-- <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet"> -->
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
    <!--calendar -->
    
    <!--end calendar -->
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
    
    <script src="{{asset('assets/asset/js/jquery-ui.custom.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/asset/js/fullcalendar.js')}}" type="text/javascript"></script>
    <!-- End custom js for this page-->

</html>
