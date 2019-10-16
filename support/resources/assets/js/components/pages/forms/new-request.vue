<template>
<!-- <transition name="slide"> -->
    <div class="row" >
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <h4 class="card-title" style="font-size: 60px">Form Gửi Yêu Cầu Mới</h4>
          <p class="card-description"> Gửi các yêu cầu bạn thắc mắc </p>
            <form class="forms-sample" @submit="checkform" name="callback"  role="form" enctype="multipart/form-data">
           
              <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Chọn phòng ban</label>
                <select class="form-control" v-model="department" id="exampleFormControlSelect1">
                  <option>Choose...</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>      
              </div>
              <div class="form-group col-md-6">
                <label for="title">Chủ đề</label>
                <select class="form-control" v-model="cataquestion" id="title">
                  <option>Choose...</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>                 
              </div>
              <div class="form-group col-md-6">
                <label for="tieude">Tiêu đề yêu cầu</label>
                <input type="text" class="form-control" id="tieude" v-model="content" placeholder="Nhập tiêu đề">
              </div>
              
              <div class="form-group col-md-6">
                <label>File upload</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" v-model="images" placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <div class="form-group col-md-12">
                <label for="noidung">Nội dung</label>
                <textarea class="form-control" id="noidung" v-model="images" cols="2" rows="2"></textarea>
              </div>
              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button type="reset" class="btn btn-light">Reset</button>
              </div>
              </div>
      <input type='text' v-model="title">
      <p>Message is: {{ title }}</p>
            </form>

          </div>
        </div>

      </div>
    </div>
    <!-- </transition> -->
</template>
<script>
export default {
    name : 'newRequest',
    
    data() {
       return {
            title : 'hhhhhhhh',
            abc: ''
        }
    },
    methods: {
      checkform(e) {
        axios.post('/new-request',
        {
          title: this.title,
        }
        ).then(response => {
          this.abc=response.data
        })

        
        e.preventDefault();
      }

    }
    
      
}


</script>