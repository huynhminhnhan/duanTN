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
                              <h5 class="card-title">Đẹp trai</h5>
                              <p class="card-text">Like a boss</p>

                            </div>
                          </div>
                </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Bordered table</h4>
                <p class="card-description"> Add class <code>.table-bordered</code> </p>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th> Ngày </th>
                      <th> Thứ </th>
                      <th> Giờ vào 1 </th>
                      <th> Giờ ra 1 </th>
                      <th> Giờ vào 2 </th>
                      <th> Giờ vào 2 </th>
                      <th> Đi trể </th>
                      <th> Về sớm </th>
                      <th> Ghi chú </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @foreach ($chamcong as $cc)

                      <td> {{$cc->id}} </td>
                      <td> {{$cc->name}} </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 77.99 </td>
                      <td> $ 77.99 </td>
                      <td> $ 77.99 </td>
                      <td> $ 77.99 </td>
                      <td> $ 77.99 </td>
                      <td> May 15, 2015 </td>

                      @endforeach
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

      </div>
    </div>


@endsection
