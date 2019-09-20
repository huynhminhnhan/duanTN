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

                <i class="fas fa-table"></i>
                {{-- DatePicker --}}
                    <label>Chọn ngày: </label>
                    <form action="/action_page.php">
                        Birthday: <input type="date" name="bday">
                        <input class="btn btn-outline-success" type="submit">
                      </form>

                    </div>
                    {{-- <style>
                        label{
                            margin-left: 20px;
                            }
                            #datepicker{
                            width:180px;
                            margin: 0 20px 20px 20px;
                            }
                            #datepicker > span:hover{
                            cursor: pointer;
                            }</style>
                            <script type="text/javascript">
                                $(function () {
                                $("#datepicker").datepicker({
                                autoclose: true,
                                todayHighlight: true
                                }).datepicker('update', new Date());
                                });
                            </script> --}}
                {{-- End DatePicker --}}

                <table class="table table-bordered">
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
    </div>


@endsection
