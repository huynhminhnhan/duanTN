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
          <p class="profile-name">{{title}}</p>
          <p class="designation">Premium user</p>
        </div>
      </a>
    </li>
  
    <li class="nav-item nav-category">Main Menu</li>
    <li class="nav-item">
      <router-link class="nav-link" to="/">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Trang Chủ</span>
      </router-link>
    </li>
      <!-- <li class="nav-item" v-for="(item, i) in menu" :key="i">{{item.title}} </li> -->
    <li class="nav-item" @click="activeMenu" v-for="(item, i) in menu" :key="i">
      <a class="nav-link" data-toggle="collapse" v-bind:href="'#'+item.url" aria-expanded="false" v-bind:aria-controls="item.url">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">{{item.title}}</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" v-bind:id="item.url">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"  v-for="(menus, i) in item.childrenMenu" :key="i">
                <router-link class="nav-link" v-bind:to="menus.url">{{menus.title}}</router-link>
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
        title : 'Huynh minh nhan',
        menu : [{
        title : 'Hỗ trợ', url: 'support',
        acive : false,
        childrenMenu : [
            {title : 'Gửi yêu cầu mới',url : '/support/new'},
            {title : 'Yêu cầu mới gửi',url : '/support/request-new'},
            {title : 'Nhân viên đang xử lí',url : '/support/process'},
            {title : 'Nhân viên đã xử lí xong',url : '/support/done'},
            {title : 'Tra cứu câu hỏi',url : '/support/search'},
            
            ]
    },
    {
        title : 'Nhiệm vụ của tôi',  url: 'mission',
        childrenMenu : [
            {title : 'Nhiệm vụ phải nhận',url : '/mission/me/must-receive'},
            {title : 'Nhiệm vụ phải làm',url : '/mission/me/must-does'},
            {title : 'Câu hỏi chuyển đến',url : '/mission/me/move-in'},
            {title : 'Câu hỏi chuyển đi ',url : '/mission/me/move'},
            {title : 'Đang nghiên cứu',url : '/mission/me/research'}
            ]
    },
    {
        title : 'Nhiệm vụ chung', url: 'mission-my',
        childrenMenu : [
            {title : 'Xem yêu cầu mới',url : '/mission/see-new'},
            {title : 'Chưa tiếp nhận',url : '/mission/not-yet'},
            {title : 'Đang xử lý',url : '/mission/processing'},
            {title : 'Đã trả lời',url : '/mission/answered'},
            ]
    },
    {
        title : 'Nội bộ', url: 'mission-internal',
        childrenMenu : [
            {title : 'Xem chấm công',url : '/mission/timekeeping'},
            {title : 'Xem lịch trực',url : '/mission/calendar'},
            {title : 'Tạo đơn xin nghỉ phép',url : '/mission/permission-form'},
            {title : 'Ghi phạt nội bô',url : '/mission/punish'},
            {title : 'Xem bảng lương',url : '/mission/salary'},
            ]
    }
    ]
       }
      
     
    },
       methods : {
       activeMenu: function() {
         for (let item of this.menu) {
           item.active == true;
            //  console.log(item);
         }
         // return this.title = 'change';
        
       }
     }
   
}

 
  
</script>