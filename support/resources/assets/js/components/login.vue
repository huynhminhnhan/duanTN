<template>
<div>
    <h1>day la login</h1>
    <router-link class="nav-link" to="home">chuyen trang</router-link>
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
    name : 'login',
    components : {
        appHeader,
       appSidebar,
        appFooter,
        appRouter,
        appChild
    }
}
</script>
