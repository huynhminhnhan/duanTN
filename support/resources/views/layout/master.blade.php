<!DOCTYPE html>
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
    <app></app>
  
  </div>

  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('admin/js/library.min.js') }}"></script>

  </body>
</html>