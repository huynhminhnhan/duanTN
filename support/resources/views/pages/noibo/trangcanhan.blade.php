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
                        @foreach ($canhan as $cn)


                            <div class="card" style="width: 18rem;">
                                  <img src=" {{asset('/assets/images/12.jpg')}} " class="card-img-top">
                                  @foreach ($canhan as $cn)
                                  <div class="card-body">
                                      <h4 class="card-title"><strong>Tên:</strong> {{$cn->name}}</h4>
                                      <h6><strong>Chuyên ngành:</strong> {{$cn->chuyennganh}}</h6>
                                      <hr>
                                      <h5><strong>Email:</strong> {{$cn->email2}}</h5>
                                      <h5><strong>Phone:</strong> {{$cn->phone}}</h5>
                                      <h5><strong>Email address:</strong> {{$cn->email}}</h5>
                                      <h5><strong>Quê quán:</strong> {{$cn->quequan}}</h5>
                                    </div>
                                    @endforeach
                                  </div>
                                  @endforeach
                    </div>
                    <div class="col-lg-8 grid-margin stretch-card">
                            <div class="card">
                                    <div class="card-header bg-success">
                                      <h3>Thông tin chi tiết</h3>
                                    </div>
                                    <h4 class="pl-3 pt-3 mb-0">Cá nhân</h4>
                                    <hr>
                                    <div class="card-body">
                                    @foreach ($canhan as $cn)    <h5><strong>Họ tên:</strong> {{$cn->name}}</h5>@endforeach
                                        <div class="row">
                                                @foreach ($canhan as $cn)
                                            <div class="col-lg-6">
                                            <h5 class="mb-2"><strong>Mã số sinh viên:</strong> {{$cn->mssv}}</h5>
                                                <h5 class="mb-2"><strong>Giới tính:</strong> {{$cn->sex}}</h5>
                                                <h5 class="mb-2"><strong>CMND/Hộ chiếu:</strong> {{$cn->cm}}</h5>
                                                <h5 class="mb-2"><strong>Ngày cấp:</strong> {{$cn->ngaycap}}</h5>
                                            </div>@endforeach
                                            @foreach ($canhan as $cn)
                                            <div class="col-lg-6">
                                                <h5 class="mb-2"><strong>Tên đăng nhập:</strong> {{$cn->tendn}}</h5>
                                                <h5 class="mb-2"><strong>Ngày sinh:</strong> {{$cn->ngaysinh}}</h5>
                                                <h5 class="mb-2"><strong>Địa chỉ:</strong> {{$cn->diachi}}</h5>
                                                <h5 class="mb-2"><strong>Nơi cấp:</strong> {{$cn->noicap}}</h5>
                                            </div>@endforeach
                                        </div>
                                    </div>
                                    <h4 class="pl-3 pt-3 mb-0">Học tập</h4>
                                    <hr>
                                    <div class="card-body">
                                        <div class="row">
                                                @foreach ($canhan as $cn)
                                            <div class="col-lg-6">
                                                <h5 class="mb-2"><strong>Khóa:</strong> {{$cn->khoa}}</h5>
                                                <h5 class="mb-2"><strong>Chuyên ngành:</strong> {{$cn->chuyennganh}}</h5>
                                                <h5 class="mb-2"><strong>Ngày nhập học:</strong> {{$cn->ngaynhaphoc}}</h5>
                                                <h5 class="mb-2"><strong>Trạng thái:</strong> {{$cn->trangthai}}</h5>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 class="mb-2"><strong>Ngành:</strong> {{$cn->nganh}}</h5>
                                                <h5 class="mb-2"><strong>Nội dung đào tạo:</strong> {{$cn->noidungdaotao}}</h5>
                                                <h5 class="mb-2"><strong>Ngày đào tạo:</strong> {{$cn->ngaydaotao}}</h5>
                                                <h5 class="mb-2"><strong>Kì thứ:</strong> {{$cn->kithu}}</h5>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                  </div>
                    </div>
            </div>
    </div>

@endsection
