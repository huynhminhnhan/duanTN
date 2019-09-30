@extends('layout.master')
@section('content')
{{-- <h1>day la trang ca nhan</h1> --}}
<div class="main-panel">
    <div class="content-wrapper">
        <h1>Thông tin sinh viên</h1>
    </div>
    <div class="content-wrapper">
            <div class="row">
                    <div class="col-lg-4 grid-margin stretch-card">
                            <div class="card" style="width: 18rem;">
                                  <img src=" {{asset('/assets/images/12.jpg')}} " class="card-img-top">
                                    <div class="card-body">
                                      <h5 class="card-title">Tên:</h5>
                                      <h6>Chuyên ngành:</h6>
                                      <hr>
                                      <h5>Email:</h5>
                                      <h5>Phone:</h5>
                                      <h5>Email address:</h5>
                                      <h5>Quê quán:</h5>
                                    </div>
                                  </div>
                    </div>
                    <div class="col-lg-8 grid-margin stretch-card">
                            <div class="card">
                                    <div class="card-header bg-success">
                                      <h3>Thông tin chi tiết</h3>
                                    </div>
                                    <h4 class="pl-3 pt-3 mb-0">Cá nhân</h4>
                                    <hr>
                                    <div class="card-body">
                                        <h5>Họ tên:</h5>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h5 class="mb-2">Mã số sinh viên:</h5>
                                                <h5 class="mb-2">Giới tính:</h5>
                                                <h5 class="mb-2">CMND/Hộ chiếu:</h5>
                                                <h5 class="mb-2">Ngày cấp:</h5>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 class="mb-2">Tên đăng nhập:</h5>
                                                <h5 class="mb-2">Ngày sinh:</h5>
                                                <h5 class="mb-2">Địa chỉ:</h5>
                                                <h5 class="mb-2">Nơi cấp:</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="pl-3 pt-3 mb-0">Học tập</h4>
                                    <hr>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h5 class="mb-2">Khóa:</h5>
                                                <h5 class="mb-2">Chuyên ngành:</h5>
                                                <h5 class="mb-2">Ngày nhập học:</h5>
                                                <h5 class="mb-2">Trạng thái:</h5>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 class="mb-2">Ngành:</h5>
                                                <h5 class="mb-2">Nội dung đào tạo:</h5>
                                                <h5 class="mb-2">Ngày đào tạo:</h5>
                                                <h5 class="mb-2">Kì thứ:</h5>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                    </div>
            </div>
    </div>

@endsection
