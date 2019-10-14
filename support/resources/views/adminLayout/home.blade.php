@extends('layout.master')
@section('content')

<div class="main-panel">
    <div class="content-wrapper" style="padding:0">
        <div class="row" >
        <div class="col-md-12">
         @include('adminLayout.header')
        </div>
        <div class="col-md-12">
         <img width="100%" src="{{asset('images/memeo.jpg')}}" alt="">
        </div>
</div>
</div>


    <style>
        .nav-item {
            color:#fff!important;
        }
    </style>
@endsection