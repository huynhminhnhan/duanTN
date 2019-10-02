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
                      <form action="">
                                        <script>
                                            window.onload = function what(){

                                            var d = new Date();


                                            var x = d.getMonth();
                                             var   y = d.getFullYear();

                                            // console.log(y);

                                            document.getElementById('demo').value  = x;
                                            // document.getElementById('demo1').value  = y;

                                        };
                                        </script>
                                        <select name="cars"  value="" id="demo">
                                            <script>
                                                for(var i = 1; i<= 12; i++){
                                                    document.write (  '<option value="'+i+'">'+i+'</option>');
                                                    // console.log(i);
                                                }
                                            </script>
                                        </select>
                                        <select name="cars"  value="" id="demo1">
                                            <script>
                                                 var d = new Date();
                                                for(var z = d.getFullYear() ; z>=d.getFullYear()-3 ; z--){
                                                    document.write ('<option value="'+z+'">'+z+'</option>');
                                                    // console.log(z);
                                                }
                                            </script>
                                        </select>

                                    <input class="btn btn-outline-success" type="submit">
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
                        @forelse($banluong as $bl)
                          <tr>
                            <th scope="row">Lương cơ bản</th>
                            <td>{{$bl->luong_can_ban}}</td>
                            <td>{{$bl->ghi_chu}}</td>
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
                          @empty
                            Chưa cập nhật
                          @endforelse
                      
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