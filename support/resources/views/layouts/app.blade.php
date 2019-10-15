<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/typed.min.js') }}" ></script>

    <!-- Fonts ha -->
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
    
</head>
<body>
    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>
    @if (session('success'))
    <div class="purchase-banner-active"> 
    <div class= "item-purchase-banner">
            <p class="banner-text"> {{ session('success') }}</p>
            
              <span class="toggler-close"><i class="mdi mdi-close"></i></span>
          </div>
          </div>
        @endif
        @if (session('error'))
    <div class="purchase-banner-active"> 
    <div class= "item-purchase-banner">
            <p class="banner-text"> {{ session('error') }}</p>
            
              <span class="toggler-close"><i class="mdi mdi-close"></i></span>
          </div>
          </div>
        @endif
</body>

</html>
