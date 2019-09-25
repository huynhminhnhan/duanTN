@extends('layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row" >
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-size: 60px">Form Gửi Yêu Cầu Mới</h4>
                        <p class="card-description"> Gửi các yêu cầu bạn thắc mắc </p>
                        <form class="forms-sample" @submit="checkform" action="/inser-request" name="callback"  role="form" enctype="multipart/form-data" method="POST">
                            @csrf 
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Chọn phòng ban</label>
                                    <select class="form-control" name="idDepartment" id="exampleFormControlSelect1">
                                        <option value="">Choose...</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>   
                                    @if($errors->has('idDepartment'))
                                        <p style="color:red">{{$errors->first('idDepartment')}}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="title">Chủ đề</label>
                                    <select class="form-control"  name="idCataQuestion" id="title">
                                        <option value="">Choose...</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select> 
                                    @if($errors->has('idCataQuestion'))
                                        <p style="color:red">{{$errors->first('idCataQuestion')}}</p>
                                    @endif                
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tieude">Tiêu đề yêu cầu</label>
                                    <input type="text" name="Title" class="form-control" id="tieude" placeholder="Nhập tiêu đề">
                                    @if($errors->has('Title'))
                                        <p style="color:red">{{$errors->first('Title')}}</p>
                                    @endif 
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label>File upload</label>
                                    {{-- <input type="file" name="Images" class="file-upload-default"> --}}
                                    <div class="input-group col-xs-12">
                                        <input type="file" name="Images"  class="form-control file-upload-info"  placeholder="Upload Image">
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-info" type="button">Upload</button></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="noidung">Nội dung</label>
                                    <textarea class="form-control" name="Content" id="noidung" cols="2" rows="2"></textarea>
                                    @if($errors->has('Content'))
                                        <p style="color:red">{{$errors->first('Content')}}</p>
                                    @endif 
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                                    <button type="reset" class="btn btn-light">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection