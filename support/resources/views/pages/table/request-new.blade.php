@extends('layout.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    @if($status === 0)
                  <h4 class="card-title">Yêu cầu mới gửi</h4>
                  <p class="card-description"> Những yêu cầu bạn gửi chưa được nhân viên tiếp nhận </p>
                    @elseif($status === 1)
                  <h4 class="card-title">Yêu cầu đang xử lí</h4>
                  <p class="card-description"> Những yêu cầu bạn gửi đang được nhân viên xử lí </p>
                    @elseif($status === 2)
                  <h4 class="card-title">Yêu cầu đã trả lời</h4>
                  <p class="card-description"> Những yêu cầu bạn gửi đã được nhân viên trả lời </p>
                    @elseif($status === 3)
                  <h4 class="card-title">Yêu cầu đã xử lí xong</h4>
                  <p class="card-description"> Những yêu cầu bạn gửi đã được xử lí xong </p>
                    @endif
                  {{-- <code>.table-striped</code> --}}
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th> Mã câu hỏi </th>
                        <th> Chủ đề </th>
                        <th> Gửi đến </th>
                        <th> Thời gian </th>
                        <th> Trạng thái </th>
                        <th> Dịch vụ </th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($Question as $q)
                      <tr>
                        <td>{{$q->id}}</td>
                        <td> {{$q->idDepartment}} </td>
                        <td>
                            {{$q->idDepartment}}
                        </td>
                        <td> {{$q->created_at}} </td>
                        <td> 
                        @if($q->Status === 0)
                        <p> Chưa tiếp nhận</p>
                        @elseif($q->Status === 1)
                        <p> Đang xử lí</p>
                        @elseif($q->Status === 2)
                        <p> Đã trả lời</p>
                        @elseif($q->Status === 3)
                        <p> Đã xử xong</p>
                        @endif
                        </td>
                        <td> {{$q->id}} </td>

                      </tr>
                      @empty
                       Chưa có câu hỏi 
                      @endforelse
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection