@extends('layout.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
              <div class="col-md-12">
                <div class="card">
                        <div class="card-body">
                            
                            <div class="cart-header" style="display: flex;
                            justify-content: space-between;
                            align-items: center;">
                                    <h4 class="card-title">Quản lí chấm công </h4>
                                    
                        <button type="button" class="btn btn-outline-primary"> <a href="{{ route('themchamcong') }}">Thêm mới chấm công</a> </button>
                            </div>
                            <input class="form-control mt-3 mb-3" id="search" type="text" placeholder="Tìm kiếm chấm công..có thể tìm theo tên, ngày , giờ , ghi chú">
                            <div class="table-responsive">
                          {{-- <p class="card-description"> Add class <code>.table-hover</code> </p> --}}
                          <table class="table table-hover" id="my_list" width="100%">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Họ và tên</th>
                                <th>ngày</th>
                                <th>Giờ vào 1</th>
                                <th>Giờ ra 1</th>
                                <th>Giờ vào 2</th>
                                <th>Giờ ra 2</th>
                                <th>Ghi chú</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key=> $item)

                               
                              <tr>
                              <td>{{$item->id_user}}</td>
                              <td> <a href="editchamcong/{{$item->id_chamcong}}">{{$item->name}}</a> </td>
                              <td>{{$item->ngay}}</td>
                                <td>{{$item->gio_vao1}}</td>
                                <td>{{$item->gio_ra1}}</td>
                                <td>{{$item->gio_vao2}}</td>
                                <td > {{$item->gio_ra2}} </td>
                                <td>{{$item->ghi_chu}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        </div>
                      </div>
                      {!! $panigation !!}
                      {{-- <ul class="pagination">
                          @if($arr_panigation)
                      <li class="page-item"><a class="page-link" href="{{$arr_panigation['prev']}}">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="{{$arr_panigation['next']}}">Next</a></li>
                                @endif
                           
                          </ul> --}}
                    </div> 
                    {{-- end col --}}
          </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
             $("#search").on("keyup",function(){
                var value = $(this).val().toLowerCase();
                $("#my_list tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
            </script>
@endsection
