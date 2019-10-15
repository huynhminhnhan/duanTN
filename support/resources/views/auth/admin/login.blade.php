@extends('layouts.app')
@section('content')
<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
              <form method="POST" action="{{ route('postLogin') }}">
              @csrf
              <div class="form-group text-center">
                   <img src="http://lms.poly.edu.vn/image/logo.jpg" alt="FPT POLY">
                  </div>
                  <div class="form-group">
                    <label class="label">Email</label>
                    <div class="input-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                  </div>
                  <div class="form-group d-flex justify-content-between">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                    </div>
                    <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script>
             var typed6 = new Typed('#typed6', {
                strings: ['  Chào mừng bạn đến với hệ thống \n <b class="support">SUPPORT FPT POLYTECHNIC </b>`\n Vui lòng đăng nhập bằng tài khoản google\n <br>'],
                typeSpeed: 60,
                backSpeed: 10,
                loop: true
                });
             </script>
             <style>
             .support {
                color: #f46c24;
             }
            
             </style>
@endsection

