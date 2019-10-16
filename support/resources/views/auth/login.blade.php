@extends('layouts.app')

@section('content')
<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                  <div class="form-group text-center">
                   <img src="http://lms.poly.edu.vn/image/logo.jpg" alt="FPT POLY">
                  </div>
                
                  <div class="form-group">
                  <div class="type-wrap" style="height: 50px;">
    <span id="typed6" style="white-space:pre;"></span><span class="typed-cursor"></span>
  </div>
                  </div>
                 
                  <div class="form-group mt-5">
                    <button class="btn btn-block g-login">
                    <a href="{{ route('googleRedirect') }}">
                      <img class="mr-3" src="../../../assets/images/file-icons/icon-google.svg" alt="">Log in with Google
                      </a>
                      </button>

                  </div>
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
                typeSpeed: 40,
                backSpeed: 20,
                loop: true
                });
             </script>
             <style>
             .support {
                color: #f46c24;
             }
            
             </style>
@endsection
