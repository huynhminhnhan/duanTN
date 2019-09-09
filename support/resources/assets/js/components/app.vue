<template>
   
<div class="container-scroller">
<!-- <router-view></router-view> -->
<app-header></app-header>
<div class="container-fluid page-body-wrapper">
<app-sidebar></app-sidebar>
   <div class="main-panel">

 <transition :name="transitionName">
            <router-view></router-view>
        </transition>
<app-footer></app-footer>
   </div>
</div>
</div>

</template>

<script>
// import { routes }  from '../router/index';
import appHeader from './layout/header';
import appFooter from './layout/footer';
import appSidebar from './layout/sidebar';


export default {
    name : 'app',
    components : {
        appHeader,
       appSidebar,
        appFooter
    }
}
</script>