@extends('layout.master')
@section('content')


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                            <div class="card-header">
                              Quy định chấm công
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Cho phép đi trễ 130 phút</h5>
                              <p class="card-text">Nghĩ không phép sẽ bị phạt gấp đôi</p>

                            </div>
                          </div>
                </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">


          {{-- <i class="fas fa-table"></i> --}}
          {{-- DatePicker --}}
              <label>Chọn ngày tháng: </label>

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


                <table class="table table-bordered mt-3">
                  <thead>
                    <tr>
                      <th> Ngày </th>
                      <th> Thứ </th>
                      <th> Giờ vào 1 </th>
                      <th> Giờ ra 1 </th>
                      <th> Giờ vào 2 </th>
                      <th> Giờ ra 2 </th>
                      <th> Đi trể </th>
                      <th> Về sớm </th>
                      <th> Ghi chú </th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach ($chamcong as $cc)
                    <tr>


                      <td> {{$cc->ngay}} </td>
                      <td> {{$cc->thu}} </td>
                      <td>
                            {{$cc->giovao1}}
                      </td>
                      <td> {{$cc->giora1}} </td>
                      <td> {{$cc->giovao2}} </td>
                      <td> {{$cc->giora2}} </td>
                      <td> {{$cc->ditre}} </td>
                      <td> {{$cc->vesom}} </td>
                      <td> {{$cc->ghichu}} </td>


                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection
