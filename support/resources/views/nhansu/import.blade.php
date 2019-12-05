@extends('layout.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <h5 class="card-title">Import dữ liệu chấm công</h5>
                <form class="forms-sample" action="/Employee/importData" name="import"  role="form" enctype="multipart/form-data" method="POST">
                            @csrf 
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>File upload</label>
                                    <input type="file" value=""  name="filechamcong" class="file-upload-default d-none"> 
                                   
                                    <div class="input-group col-xs-12">
                                        <input type="text" readonly name="ImagesText"  class="form-control file-upload-info"  placeholder="Upload Image">
                                      
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-info" type="button">Upload</button></span>
                                    </div>
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
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <h5 class="card-title">Export dữ liệu chấm công</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection