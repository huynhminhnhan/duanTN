@extends('layout.master')
@section('content')
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">XEM BẢNG LƯƠNG</h4>
                        <form class="mt-4">
                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="inputState">Tháng</label>
                            <select id="inputState" class="form-control">
                              <option selected>Chọn...</option>
                              <option>...</option>
                            </select>
                          </div>
                          <div class="form-group col-md-3">
                            <label for="inputState">Năm</label>
                            <select id="inputState" class="form-control">
                              <option selected>Chọn...</option>
                              <option>...</option>
                            </select>
                          </div>
                          <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-primary mb-2">Xem</button>
                          </div>
                        </div>
                        </form>
                      <div class="col-md-12 d-flex align-items-stretch grid-margin">
                      <table class="table table-bordered mt-3">
                        <thead>
                          <tr>
                            <th scope="col">CÁC KHOẢN TIỀN</th>
                            <th scope="col">GIÁ TRỊ(VNĐ)</th>
                            <th scope="col">GHI CHÚ</th>
                            <th scope="col">TỔNG(VNĐ)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Lương cơ bản</th>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Phụ cấp</th>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row" rowspan="6">Trừ tiền</th>
                            <td></td>
                            <td></td>
                            <td rowspan="6"></td>
                          </tr>
                          <tr>
                            <th scope="row"> </th>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row"> </th>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row"> </th>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row"> </th>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row"> </th>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Công ty nộp BHXH</th>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Tổng thu nhập(VNĐ)</th>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Lương thực lãnh(VNĐ)</th>
                            <td colspan="3"></td>
                          </tr>
                        </tbody>
                      </table>
          </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
          </div>
          </div>
        
@endsection