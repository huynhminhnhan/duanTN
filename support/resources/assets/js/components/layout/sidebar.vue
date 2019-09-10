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
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">{{item.title}}</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"  v-for="(menus, i) in item.childrenMenu" :key="i">
                        <!-- <a class="nav-link" v-bind:href="menus.url">{{menus.title}}</a> -->
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
        title : 'Hỗ trợ',
        acive : false,
        childrenMenu : [
            {title : 'Gửi yêu cầu mới',url : '/support/new'},
            {title : 'Yêu cầu mới gửi',url : '/support/request-new'},
            {title : 'Nhân viên đang xử lí',url : '/support/process'},
            {title : 'Nhân viên đã xử lí xong',url : '/support/done'},
            {title : 'Tra cứu câu hỏi',url : '/support/search'}
            ]
    },
    {
        title : 'Nhiệm vụ của tôi',
        acive : false,
        childrenMenu : [
            {title : 'Nhiệm vụ phải nhận',url : '/mission'},
            {title : 'Nhiệm vụ phải làm',url : '/mission-new'},
            {title : 'Câu hỏi chuyển đến',url : '/mission-process'},
            {title : 'Câu hỏi chuyển đi ',url : '/mission-done'},
            {title : 'Đang nghiên cứu',url : '/mission-question'}
            ]
    },
    {
        title : 'Nhiệm vụ của tôi',
        childrenMenu : [
            {title : 'Nhiệm vụ phải nhận',url : '/mission'},
            {title : 'Nhiệm vụ phải làm',url : '/mission-new'},
            {title : 'Câu hỏi chuyển đến',url : '/mission-process'},
            {title : 'Câu hỏi chuyển đi ',url : '/mission-done'},
            {title : 'Đang nghiên cứu',url : '/mission-question'}
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