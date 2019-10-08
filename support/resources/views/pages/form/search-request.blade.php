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
                      <h4 class="card-title">MY SUPPORT</h4>
                      <p class="card-description"> TÌM KIẾM </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="tukhoa">Từ khóa:</label>
                          <input type="search" class="form-control" id="tukhoa" placeholder="Nhập từ khóa tìm câu hỏi">
                        </div>
                        
                      </form>
                        <label for="exampleInput" class="mt-2 mr-5">Trạng thái:</label>
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Yêu cầu mới gửi</label>
                          </div>
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Đang xử lý</label>
                          </div>
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">Đã trả lời</label>
                          </div>
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">Đã xử lý xong</label>
                          </div>
                        </form>
                        <form>
                        <label for="exampleInput" class="mt-2 mr-4">Nơi tìm kiếm:</label>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Nội dung câu hỏi</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Phần trao đổi</label>
                          </div>
                      </form>
                        <button type="submit" class="btn btn-success mr-2 mt-2">Tìm kiếm</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-md-12 d-flex align-items-stretch grid-margin">
               <table class="table table-striped">
                    <thead>
                      <tr>
                          <th> Mã câu hỏi </th>
                          <th> Tiêu đề </th>
                          <th> Gửi đến </th>
                          <th> Thời gian </th>
                          <th> Trạng thái </th>
                          <th> Dịch vụ </th>
                      </tr>
                    </thead>
                    <tbody id="dulieu">

                     
                    </tbody>
                </table>
          </div>
          </div>
          </div>

<script>
  $(document).ready(function(){

   $('#tukhoa').keyup(function(){ //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
    var query = $(this).val(); //lấy gía trị ng dùng gõ
    // console.log(query);
    if(query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
    {
     var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
     $.ajax({
      url:"{{ route('search') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
      method:"POST", // phương thức gửi dữ liệu.
      data:{query:query, _token:_token},

      success:function(data){ //dữ liệu nhận về
    
      // console.log(data);
      var json = JSON.parse(data);
      console.log(json);
      $('tbody').html("");

      for(response of json ){
        // console.log(response);
        $('tbody').append("<tr><td> "+ response.id +"</td> <td>"+ response.Title+"</td><td>"+response.description+"</td><td>"+response.created_at+"</td><td>"+response.Status+"</td> <td>"+response.name_cata+"</td></tr>")
      }
     }
   });
   }
 });
 });
</script>
        {{-- <tr><td> "+ dulieu.id +"</td> <td>'.$dulieu['Title'].'</td><td>'.$dulieu['description'].'</td><td>'.$dulieu['created_at'].'</td><td>'.$dulieu['Title'].'</td> <td>'.$dulieu['name_cata'].'</td></tr> --}}
@endsection