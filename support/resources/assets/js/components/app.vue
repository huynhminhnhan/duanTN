<template>
   
<div class="container-scroller">
<!-- <router-view></router-view> -->
<app-header></app-header>
<div class="container-fluid page-body-wrapper">
<app-sidebar></app-sidebar>
   <div class="main-panel">
<!-- <div v-if=""></div> -->
<div>
<app-router></app-router>
</div>
<div>
    <app-children></app-children>
</div>
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
import appRouter from './router';
import appChild from './children';




export default {
    name : 'app',
    components : {
        appHeader,
        appSidebar,
        appFooter,
        appRouter,
        appChild
    }
}
</script>