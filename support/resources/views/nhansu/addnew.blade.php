@extends('layout.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
                    <div class="card">
                            <div class="card-body">
                         
                            @if(isset($data)) 
                            <h5 class="card-title">Sửa dữ liệu chấm công</h5>
                           {{-- // start update  --}}
                           {{-- {{ route('edit_chamcong') }} --}}
                            <form class="forms-sample" action="{{ route('edit_cham_cong') }}" name="import"  role="form" enctype="multipart/form-data" method="POST">
                            @csrf 
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Họ và tên</label>
                                    <input type="text" disabled class="form-control" id="name_nv_ed" name="name_nv" value="{{$data['name']}}"  placeholder="Nhập họ và tên">
                                    <input type="hidden" class="form-control" name="id_nv" value="{{$data['user_id']}}"  value="" id="id_nv"  >
                                    <input type="hidden" class="form-control" name="id_chamcong" value="{{$data['id_chamcong']}}"  value="" id="id_nv"  >
                                    <div class="list_resurl d-none">
                                        
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                        <label>Ngày</label>
                                        <input type="text" name="ngay" value="{{$data['ngay']}}"  class="form-control" id="" placeholder="Ngày chấm công">
                                </div>
                                <div class="form-group col-md-12">
                                            <label>Giờ vào 1</label>
                                            <input type="time" name="giovao_1" value="{{$data['gio_vao1']}}" class="form-control" id="" placeholder="Giờ vào 1">
                                </div>
                                <div class="form-group col-md-12">
                                        <label>Giờ ra 1</label>
                                        <input type="time" name="giora_1"  value="{{$data['gio_ra1']}}" class="form-control" id="" placeholder="Giờ ra 1">
                                </div>
                                <div class="form-group col-md-12">
                                        <label>Giờ vào 2</label>
                                         <input type="time" name="giovao_2" value="{{$data['gio_vao2']}}" class="form-control" id="" placeholder="Giờ vào 2">
                                </div>
                                <div class="form-group col-md-12">
                                   
                                        <label>Giờ ra 2</label>
                                        <input type="time" name="giora_2" value="{{$data['gio_ra2']}}"  class="form-control" id="" placeholder="Giờ ra 2">
                                </div>
                                <div class="form-group col-md-12">
                                        <label for="exampleTextarea1">Ghi chú</label>
                                        <textarea name="ghichu" class="form-control" id="" rows="2"> {{$data['ghi_chu']}} </textarea>
                                      </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                                    <button type="reset" class="btn btn-light">Reset</button>
                                </div>
                            </div>
                        </form>
                           {{-- end update  --}}
                       
                        @else
                            {{-- // add  --}}
                            <h5 class="card-title">Thêm mới dữ liệu chấm công</h5>
                            <form class="forms-sample" action="{{ route('add_chamcong') }}" name="import"  role="form" enctype="multipart/form-data" method="POST">
                                        @csrf 
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label>Họ và tên</label>
                                                <input type="text" class="form-control" id="name_nv" name="name_nv" value=""  placeholder="Nhập họ và tên">
                                                <input type="hidden" class="form-control" name="id_nv" value="" id="id_nv"  >
                                                <div class="list_resurl d-none">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                    <label>Ngày</label>
                                                    <input type="date" name="ngay" class="form-control" id="" placeholder="Ngày chấm công">
                                            </div>
                                            <div class="form-group col-md-12">
                                                        <label>Giờ vào 1</label>
                                                        <input type="time" name="giovao_1" class="form-control" id="" placeholder="Giờ vào 1">
                                            </div>
                                            <div class="form-group col-md-12">
                                                    <label>Giờ ra 1</label>
                                                    <input type="time" name="giora_1" class="form-control" id="" placeholder="Giờ ra 1">
                                            </div>
                                            <div class="form-group col-md-12">
                                                    <label>Giờ vào 2</label>
                                                     <input type="time" name="giovao_2" class="form-control" id="" placeholder="Giờ vào 2">
                                            </div>
                                            <div class="form-group col-md-12">
                                               
                                                    <label>Giờ ra 2</label>
                                                    <input type="time" name="giora_2" class="form-control" id="" placeholder="Giờ ra 2">
                                            </div>
                                            <div class="form-group col-md-12">
                                                    <label for="exampleTextarea1">Ghi chú</label>
                                                    <textarea name="ghichu" class="form-control" id="" rows="2"></textarea>
                                                  </div>
                                            <div class="form-group col-md-12">
                                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                                <button type="reset" class="btn btn-light">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                        {{-- end add  --}}
                                        @endif
                                        
                            </div>
                          </div>
            </div>
          </div>
        </div>
<script type="text/javascript">
    $("#name_nv").on("change",function(){
        $name_nv = $(this).val();
        
        if($name_nv.length == 0) {
            $(".list_nv").html('');
            return;
            
        }
        $.ajax({
                url: "{{ route('serch_name_ajax') }}",
                type: 'POST',
                data: {
                    "name_nv" : $name_nv,
                    "_token": "{{ csrf_token() }}"
                } 
            }).done(function(data) {
               
                $(".list_resurl").html('');
                if(data == '<ul class="list_nv"></ul>') {
                    
                    $(".list_resurl").html('<span> Không tìm thấy tên nhân viên  <span>');
                }
                else {
                    $(".list_resurl").removeClass('d-none');
                    $(".list_resurl").append(data);
                }
               
              
            });
            
       
    });
    $("body").on("click",".user_id",function(e){
        $(this).parent().hide();
        $id = $(this).attr("href");
        $("#id_nv").val($id);
        $name = $(this).text();
        $("#name_nv").val($name);
        e.preventDefault();
    }); 
</script>
@endsection

