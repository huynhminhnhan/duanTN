@extends('layout.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <!-- {{-- <code>.table-striped</code> --}} -->
                  <table class="table">
                    <thead>
                      <tr>
                             <th><i class="fas fa-phone-volume"></i> Hỗ trợ </th>
                        {{-- <th> Chủ đề </th>
                        <th> Gửi đến </th> --}}

                      </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope="row">Mã câu hỏi:</th>
                                <td>
                                        ...
                                </td>
                                <td>

                                </td>
                            </tr>
                        <tr>
                            <th scope="row">Phòng xử lí</th>
                            <td><select class="custom-select" id="inputGroupSelect01">
                                <option selected>Phòng nhân sự</option>
                                <option value="1">Phòng ban</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </td>
                            <td><select class="custom-select" id="inputGroupSelect01">
                                <option selected>Level 1</option>
                                <option value="1">Level 2 ban</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select></td>

                        </tr>
                        <tr>
                            <th scope="row">Người xử lí</th>
                            <td>
                                All
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                                <td></td>
                                <td scope="row">
                                        <div class="input-group-text bg-success">

                                                <input type="checkbox">
                                                Nhận
                                              </div>

                                </td>
                               <td><div class="input-group-text bg-danger">
                                    <input type="checkbox" >Không nhận
                                  </div></td>

                            </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <!-- {{-- <code>.table-striped</code> --}} -->
                    <table class="table">
                            <thead>
                              <tr>
                                <th> Liên hệ </th>
                                {{-- <th> Chủ đề </th>
                                <th> Gửi đến </th> --}}

                              </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <th scope="row">Mã khách hàng:</th>
                                        <td>
                                                ...
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                <tr>
                                    <th scope="row">Thông tin</th>
                                    <td>
                                        ...
                                    </td>
                                    <td>
                                        Hỗ trợ và support
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row">Dịch vụ thêm</th>
                                    <td>
                                        Xem thêm tại domain
                                    </td>
                                    <td><a href="">Tại đây</a></td>
                                </tr>
                            </tbody>
                          </table>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">

                      <!-- {{-- <code>.table-striped</code> --}} -->
                      <table class="table">
                        <thead>
                          <tr>
                                 <th><i class="fas fa-phone-volume"></i> Nội dung yêu cầu </th>
                            {{-- <th> Chủ đề </th>
                            <th> Gửi đến </th> --}}

                          </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td scope="row">Email:</td>
                                    <td>
                                            Email: admin@gmail.com
                                    </td>
                                    <td>
                                        0344155678
                                    </td>
                                </tr>
                                <tr>
                                        <th scope="row">
                                                <button type="submit" class="btn btn-danger">Không nhận</button>
                                                <button type="submit" class="btn btn-primary">Nhận</button>
                                                <button type="submit" class="btn btn-light">Xóa</button>
                                        </th>
                                        <td></td>
                                        <td></td>
                                    </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
        </div>
@endsection
