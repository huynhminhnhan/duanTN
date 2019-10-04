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
                            @if ($Account) 
                                <div class="form-group col-md-6">
                                    <label for="tieude">Tên tài khoản</label>
                                    <input type="text" value="{{$Account->name}}" name="Title" class="form-control" id="tieude" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="title">Phòng ban</label>
                                    <select class="form-control"  name="idCataQuestion" id="title">
                                      @if  ($Departments)
                                            @php
                                            $check = '';
                                            @endphp
                                        @foreach ($Departments as $Departments )
                                            @if ($Departments->name_depart == $Account->name_depart)
                                            @php
                                            $check = 'selected';
                                            @endphp
                                            @endif
                                            <option >  {{$Departments->name_depart}}</option>
                                       
                                        @endforeach
                                        @endif
                                    </select>    
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
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection