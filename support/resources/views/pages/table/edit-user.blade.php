@extends('layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row" >
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4" style="font-size: 20px">Chỉnh sửa tài khoản</h4>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="tieude">Tên tài khoản</label>
                                    <input type="text" name="Title" class="form-control" id="tieude" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="title">Phòng ban</label>
                                    <select class="form-control"  name="idCataQuestion" id="title">
                                        <option value="">Chọn...</option>
                                        <option>Phòng tuyển sinh</option>
                                        <option>Phòng công tác sinh viên</option>
                                        <option>Phòng quan hệ doanh nghiệp</option>
                                        <option>Phòng hành chánh nhân sự</option>
                                    </select>    
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tieude">Mật khẩu</label>
                                    <input type="text" name="Title" class="form-control" id="tieude" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Hình ảnh</label>
                                    {{-- <input type="file" name="Images" class="file-upload-default"> --}}
                                    <div class="input-group col-xs-12">
                                        <input type="file" name="Images"  class="form-control file-upload-info"  placeholder="Upload Image">
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-info" type="button">Upload</button></span>
                                    </div>
                                </div>
                                <form class="ml-3 mb-3">
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Admin</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Trưởng phòng</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Sinh viên</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">Nhân viên</label>
                                    </div>
                                </form>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success mr-2">Lưu</button>
                                    <button type="reset" class="btn btn-secondary">Tạo lại mật khẩu</button>
                                    <button type="submit" class="btn btn-warning">Xóa tài khoản</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection