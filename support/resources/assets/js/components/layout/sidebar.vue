<template>

     
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <!-- <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="profile image"> -->
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
          
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" v-link="'/'">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Trang Chủ</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">HỖ TRỢ</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse show" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" route-link="'/new-request'">Gửi yêu cầu mới</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/request-new">Yêu cầu mới gửi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/handling">Nhân viên đang xử lý</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/answered">Nhân viên đã trả lời</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/done-handling">Nhân viên đã xử lý xong</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/search-question">Tra cứu câu hỏi</a>
                    </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">NHIỆM VỤ CỦA TÔI</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic1">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nhiệm vụ phải nhận</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nhiệm vụ phải làm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Câu hỏi chuyển đến</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Câu hỏi chuyển đi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đang nghiêm cứu</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">NHIỆM VỤ CHUNG</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic2">
                    <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Xem yêu cầu mới</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Xem yêu cầu chưa tiếp nhận</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đang xử lý</a>
                    </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">NỘI BỘ</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic3">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Xem chấm công</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Xem lịch trực</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tạo đơn xin phép</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ghi phạt nội bộ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Xem bảng lương</a>
                        </li>
                    </ul>
                </div>
            </li>
            
          </ul>
        </nav>
        
   

</template>
<script >
export default {
    name : 'appSidebar',
    data() {
       return {
            title : 'Huynh minh nhan'
       } 
       
    }
}
</script>