@extends('layout.master')
@section('content')
{{-- ============= Sinh viên ============= --}}
  @php 
    if((session()->get('AccountInfor')['roles'][0])== 'student'){
      $functionCount = 'coutQuestionUser';
    }else{
      $functionCount = 'coutEmployee';
    }
    $qs_new = $number->$functionCount((session()->get('AccountInfor')['user_id']),0);
    $qs_handling = $number->$functionCount((session()->get('AccountInfor')['user_id']),1);
    $qs_answered = $number->$functionCount((session()->get('AccountInfor')['user_id']),2);
    $qs_done = $number->$functionCount((session()->get('AccountInfor')['user_id']),3);
  @endphp
@if(in_array('student',session()->get('AccountInfor')['roles']))
<div class="main-panel">
    <div class="content-wrapper">
      <!-- Page Title Header Starts-->
      <div class="row page-title-header">
        <div class="col-12">
          <div class="page-header">
            <h4 class="page-title">Trang Chủ</h4>
            
          </div>
        </div>
       
      </div>

     {{-- thong báo --}}
     <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="content-welcome">
              <h3>Xin chào! Bạn đã đăng nhập vào Fsupport.</h3>
              <p> Đây là website giải đáp thắc mắc và hỗ trợ sinh viên của Fpt polyechnic</p>
              <div class="support-box column-hh">
                <h4>Hãy bắt đầu</h4>
                <a class="button-question" href="/new-request">Đặt câu hỏi</a>
                <p>hoặc <a href="tel:0939981634"> gọi</a> trực tiếp cho nhân viên của trường</p>
                <p style="margin-top:0">qua số điện thoại <a href="tel:0939981634"> 0939981634</a></p>
              </div>
              <div class="support-box column-hh">
                <h4>Các Bước Tiếp Theo</h4>
                <ul>
                  <li>Chờ nhân viên tiếp nhận câu hỏi</li>
                  <li>Sau khhi được tiếp nhận sẽ có thông báo ở mail và xem <a href="/support/handling">tại đây</a></li>
                  <li>Xem lại các câu hỏi đã được xử lí <a href="/support/done-handling">tại đây</a></li>
                </ul>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     {{-- end thong bao  --}}
      <!-- Page Title Header Ends-->
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row row-a-text">
                <div class="col-lg-3 col-md-6">
                  <div class="d-flex">
                    <div class="wrapper">
                    <h3 class="mb-0 font-weight-semibold">{{$qs_new}}</h3>
                      <h5 class="mb-0 font-weight-medium text-primary"> <a href="/support/request-new"> Yêu cầu mới gửi </a> </h5>
                      {{-- <p class="mb-0 text-muted">+14.00(+0.50%)</p> --}}
                    </div>
                    <div class="wrapper my-auto ml-auto">
                      <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                  <div class="d-flex">
                    <div class="wrapper">
                    <h3 class="mb-0 font-weight-semibold">{{$qs_handling}}</h3>
                      <h5 class="mb-0 font-weight-medium text-primary"> <a href="/support/handling"> Yêu cầu đang xử lí</a></h5>
                      {{-- <p class="mb-0 text-muted">+138.97(+0.54%)</p> --}}
                    </div>
                    <div class="wrapper my-auto ml-auto  ">
                      <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                  <div class="d-flex">
                    <div class="wrapper">
                    <h3 class="mb-0 font-weight-semibold">{{$qs_answered}}</h3>
                      <h5 class="mb-0 font-weight-medium text-primary"><a href="/support/answered"> Nhân viên đã trả lời</a></h5>
                      {{-- <p class="mb-0 text-muted">+57.62(+0.76%)</p> --}}
                    </div>
                    <div class="wrapper my-auto ml-auto ">
                      <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                  <div class="d-flex">
                    <div class="wrapper">
                    <h3 class="mb-0 font-weight-semibold">{{$qs_done}}</h3>
                      <h5 class="mb-0 font-weight-medium text-primary"> <a href="/support/done-handling"> Câu hỏi đã xử lí xong</a></h5>
                      {{-- <p class="mb-0 text-muted">+138.97(+0.54%)</p> --}}
                    </div>
                    <div class="wrapper my-auto ml-auto">
                      <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-0">Câu hỏi của bạn</h4>
              <div class="scroll-one">
              @forelse($viewquestion as $qsv)
              {{-- {{dd($qs)}} --}}
              @php 
              $idstt = $qsv->Status;
              $trangthai = '';
                if($idstt == 1){
                  $trangthai = 'Đang xử lí';
                }
                if($idstt == 0){
                  $trangthai = 'Chưa tiếp nhập';
                }
                if($idstt == 2){
                  $trangthai = 'Đã trả lời';
                }
                if($idstt == 3){
                  $trangthai = 'Đã xử lí xong';
                }
              @endphp
              <div class="d-flex py-2 border-bottom position-re">
                <div class="wrapper">
                  <small class="text-muted">{{$qsv->created_at}}</small>
                  <p class="font-weight-semibold text-gray mb-0 text-cut-qs">{{$qsv->Title}}</p>
                </div>
                <small class="text-muted position-ab"> {{$trangthai}}</small>
                <small class="text-muted ml-auto"><a href="/question/{{$qsv->id_question}}"> Xem</a></small>
              </div>
              @empty
                <div class="d-flex py-2 mt-2">
                  <div class="wrapper">
                    {{-- <small class="text-muted">Mar 14, 2019</small> --}}
                    <p class="font-weight-semibold text-gray mb-0">Bạn chưa có câu hỏi nào</p>
                  </div>
                  <small class="text-muted ml-auto"><a href="/new-request"> Hỏi</a></small>
                </div>
              @endforelse
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body d-flex flex-column">
              <div class="wrapper">
                <h4 class="card-title mb-0">Lịch sử hoạt động</h4>
                <div class="scroll-one">
                @forelse($viewquestion as $lsqs)
                @php 

                @endphp
                <div class="d-flex py-2 border-bottom position-re">
                    <div class="wrapper">
                      <small class="text-muted">{{$lsqs->created_at}}</small>
                    <p class="font-weight-semibold text-gray mb-0 cut-text-ls">{{$lsqs->Title}}</p>
                    </div>
                    <small class="text-muted position-ab">Gửi câu hỏi</small>
                    <small class="text-muted ml-auto"><a href="/question/{{$lsqs->id_question}}"> Xem</a></small>
                </div>
                {{-- rep --}}
                @php
                $aws = $aw->getAnswerFlQs($lsqs->id_question, (session()->get('AccountInfor')['user_id']));   
                @endphp
                  @forelse($aws as $an)
                    <div class="d-flex py-2 border-bottom position-re ml-2">
                        <div class="wrapper">
                        <small class="text-muted">{{$an->created_at}}</small>
                        <p class="font-weight-semibold text-gray mb-0">{!!$an->Content_Answer!!}</p>
                        </div>
                        <small class="text-muted position-ab">Trả lời</small>
                    </div>
                    @empty
                    <div class="d-flex py-2 border-bottom position-re ml-3">
                        <div class="wrapper">
                          {{-- <small class="text-muted">time</small> --}}
                          <p class="  text-gray mb-0 mt-1">Chưa được trả lời</p>
                        </div>
                        {{-- <small class="text-muted position-ab"> <a href="/question/{{$lsqs->id_question}}">Trả lời</a> </small> --}}
                    </div>
                    @endforelse
                @empty
                <div class="d-flex py-2 border-bottom position-re">
                    <div class="wrapper">
                      {{-- <small class="text-muted">time</small> --}}
                      <p class="font-weight-semibold text-gray mb-0">Không có hoạt động nào gần đây</p>
                    </div>
                    <small class="text-muted ml-auto"><a href="/new-request"> Hỏi</a></small>
                </div>
                @endforelse

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    @else 
  {{--=====================================================================================
    =======================================================================================
Nhân viên
    =======================================================================================
    ======================================================================================= --}}
    <div class="main-panel">
        <div class="content-wrapper">
          <!-- Page Title Header Starts-->
          <div class="row page-title-header">
            <div class="col-12">
              <div class="page-header">
                <h4 class="page-title">Trang Chủ</h4>
                
              </div>
            </div>
           
          </div>
         
         {{-- thong báo --}}
         <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="content-welcome">
                  <h3>Xin chào! Bạn đã đăng nhập vào Fsupport.</h3>
                  <p> Đây là website giải đáp thắc mắc và hỗ trợ sinh viên của Fpt polyechnic</p>
                  <div class="support-box column-hh">
                    <h4>Hãy bắt đầu</h4>
                    <a class="button-question" href="/mission/request">Tiếp nhận câu hỏi</a>
                    <p>Có bất cứ thắc mắc về hệ thống vui lòng <a href="tel:0939981634"> gọi</a> trực tiếp cho <br> nhân viên thiết kế qua số điện thoại <a href="tel:0939981634"> 0939981634</a> </p>
                    {{-- <p style="margin-top:0">qua số điện thoại <a href="tel:0939981634"> 0939981634</a></p> --}}
                  </div>
                  <div class="support-box column-hh">
                    <h4>Các Bước Hướng Dẫn Sử Dụng</h4>
                    <ul>
                      <li>Tiếp nhận câu hỏi từ sinh viên</li>
                      <li>Trả lời những thắc mắc từ sinh viên</li>
                      <li>Đóng câu hỏi sau khi hoàn thành dứt điểm</li>
                    </ul>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         {{-- end thong bao  --}}
          <!-- Page Title Header Ends-->
          @php

          $qs_new = $number->coutAll(0);
          @endphp

          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row row-a-text">
                    <div class="col-lg-3 col-md-6">
                      <div class="d-flex">
                        <div class="wrapper">
                        <h3 class="mb-0 font-weight-semibold">{{$qs_new}}</h3>
                          <h5 class="mb-0 font-weight-medium text-primary"> <a href="/mission/request-new">Câu hỏi mới gửi</a> </h5>
                          {{-- <p class="mb-0 text-muted">+14.00(+0.50%)</p> --}}
                        </div>
                        <div class="wrapper my-auto ml-auto">
                          <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                      <div class="d-flex">
                        <div class="wrapper">
                        <h3 class="mb-0 font-weight-semibold">{{$qs_handling}}</h3>
                          <h5 class="mb-0 font-weight-medium text-primary"> <a href="/mission/handling">Câu hỏi đang xử lí</a></h5>
                          {{-- <p class="mb-0 text-muted">+138.97(+0.54%)</p> --}}
                        </div>
                        <div class="wrapper my-auto ml-auto  ">
                          <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                      <div class="d-flex">
                        <div class="wrapper">
                        <h3 class="mb-0 font-weight-semibold">{{$qs_answered}}</h3>
                          <h5 class="mb-0 font-weight-medium text-primary"><a href="/mission/answered">Câu hỏi đã trả lời</a></h5>
                          {{-- <p class="mb-0 text-muted">+57.62(+0.76%)</p> --}}
                        </div>
                        <div class="wrapper my-auto ml-auto ">
                          <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                      <div class="d-flex">
                        <div class="wrapper">
                        <h3 class="mb-0 font-weight-semibold">{{$qs_done}}</h3>
                          <h5 class="mb-0 font-weight-medium text-primary"> <a href="/mission/done-handling"> Câu hỏi đã xử lí xong</a></h5>
                          {{-- <p class="mb-0 text-muted">+138.97(+0.54%)</p> --}}
                        </div>
                        <div class="wrapper my-auto ml-auto">
                          <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Câu hỏi của bạn</h4>
                  <div class="scroll-one">
                  @forelse($viewquestion as $qsv)
                  {{-- {{dd($qs)}} --}}
                  @php 
                  $idstt = $qsv->Status;
                  $trangthai = '';
                    if($idstt == 1){
                      $trangthai = 'Đang xử lí';
                    }
                    if($idstt == 0){
                      $trangthai = 'Chưa tiếp nhập';
                    }
                    if($idstt == 2){
                      $trangthai = 'Đã trả lời';
                    }
                    if($idstt == 3){
                      $trangthai = 'Đã xử lí xong';
                    }
                  @endphp
                  <div class="d-flex py-2 border-bottom position-re">
                    <div class="wrapper">
                      <small class="text-muted">{{$qsv->created_at}}</small>
                      <p class="font-weight-semibold text-gray mb-0 text-cut-qs">{{$qsv->Title}}</p>
                    </div>
                    <small class="text-muted position-ab"> {{$trangthai}}</small>
                    <small class="text-muted ml-auto"><a href="/question/{{$qsv->id_question}}"> Xem</a></small>
                  </div>
                  @empty
                    <div class="d-flex py-2 mt-2">
                      <div class="wrapper">
                        {{-- <small class="text-muted">Mar 14, 2019</small> --}}
                        <p class="font-weight-semibold text-gray mb-0">Bạn chưa có câu hỏi nào</p>
                      </div>
                      <small class="text-muted ml-auto"><a href="/mission/new-request"> Tiếp nhận</a></small>
                    </div>
                  @endforelse
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <div class="wrapper">
                    <h4 class="card-title mb-0">Lịch sử hoạt động</h4>
                    <div class="scroll-one">
                    @forelse($viewquestion as $lsqs)
                    @php 
    
                    @endphp
                    <div class="d-flex py-2 border-bottom position-re">
                        <div class="wrapper">
                          <small class="text-muted">{{$lsqs->created_at}}</small>
                        <p class="font-weight-semibold text-gray mb-0 cut-text-ls">{{$lsqs->Title}}</p>
                        </div>
                        <small class="text-muted position-ab">Gửi câu hỏi</small>
                        <small class="text-muted ml-auto"><a href="/question/{{$lsqs->id_question}}"> Xem</a></small>
                    </div>
                    {{-- rep --}}
                    @php
                    $aws = $aw->getAnswerFlQs($lsqs->id_question, (session()->get('AccountInfor')['user_id']));   
                    @endphp
                      @forelse($aws as $an)
                        <div class="d-flex py-2 border-bottom position-re ml-2">
                            <div class="wrapper">
                            <small class="text-muted">{{$an->created_at}}</small>
                            <p class="font-weight-semibold text-gray mb-0">{!!$an->Content_Answer!!}</p>
                            </div>
                            <small class="text-muted position-ab">Trả lời</small>
                        </div>
                        @empty
                        <div class="d-flex py-2 border-bottom position-re ml-3">
                            <div class="wrapper">
                              {{-- <small class="text-muted">time</small> --}}
                              <p class="  text-gray mb-0 mt-1">Chưa được trả lời</p>
                            </div>
                            {{-- <small class="text-muted position-ab"> <a href="/question/{{$lsqs->id_question}}">Trả lời</a> </small> --}}
                        </div>
                        @endforelse
                    @empty
                    <div class="d-flex py-2 border-bottom position-re">
                        <div class="wrapper">
                          {{-- <small class="text-muted">time</small> --}}
                          <p class="font-weight-semibold text-gray mb-0">Không có hoạt động nào gần đây</p>
                        </div>
                        <small class="text-muted ml-auto"><a href="/new-request"> Hỏi</a></small>
                    </div>
                    @endforelse
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>


    @endif
    
@endsection