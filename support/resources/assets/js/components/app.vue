<template>
   
<div class="container-scroller">

<app-header></app-header>
<div class="container-fluid page-body-wrapper">
<app-sidebar></app-sidebar>
   <div class="main-panel">
<div>
  <transition name="child-fade" mode="out-in">
        <router-view></router-view>
    </transition> 
</div>
<div>
</div>
<app-footer></app-footer>
   </div>
</div>
</div>

</template>

<script>

import appHeader from './layout/header';
import appFooter from './layout/footer';
import appSidebar from './layout/sidebar';

export default {
    name : 'app',
    components : {
        appHeader,
        appSidebar,
        appFooter,
       
    }
}
</script>