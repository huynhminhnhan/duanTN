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
                    <h4 class="card-title"style="font-size: 20px">QUẢN LÝ TÀI KHOẢN</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Hình ảnh </th>
                          <th> Tên tài khoản </th>
                          <th> ID </th>
                          <th> Sửa </th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="../../../assets/images/faces-clipart/pic-1.png" alt="image" /> </td>
                          <td> Example@gmail.com </td>
                          <td> 12345 </td>
                          <td> <a href="/edit"><i class="fas fa-user-edit"></i></a></td>
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
        
@endsection