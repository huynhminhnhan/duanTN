<template>
<transition name="fade">

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
                          <label for="exampleInputEmail1">Từ khóa:</label>
                          <input type="search" class="form-control" id="exampleInput" placeholder="">
                        </div>
                        <label for="exampleInput">Trạng thái:</label>
                        <b-form-checkbox-group id="checkbox-group-2" v-model="selected" name="flavour-2">
                          <b-form-checkbox value="1">Yêu cầu mới gửi</b-form-checkbox>
                          <b-form-checkbox value="2">Đang xử lý</b-form-checkbox>
                          <b-form-checkbox value="3">Đã trả lời</b-form-checkbox>
                          <b-form-checkbox value="4">Đã xử lý xong</b-form-checkbox>
                        </b-form-checkbox-group>
                        <label for="exampleInput" class="mt-2">Nơi tìm kiếm:</label>
                        <form action="">
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
                        <th> Lĩnh vực </th>
                        <th> Gửi đến </th>
                        <th> Thời gian </th>
                        <th> Trạng thái </th>
                        <th> Dịch vụ </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> cc </td>
                        <td> cc </td>
                        <td> cc </td>
                        <td> cc </td>
                        <td> cc </td>
                        <td> cc
                          
                  </td>
                      </tr>
                    </tbody>
                </table>
          </div>
          </div>
</transition>
</template>
<script>
export default {
    name : 'searchRequest',
    data() {
       return {
            title : 'Huynh minh nhan'
       } 
       
    }
}
</script>