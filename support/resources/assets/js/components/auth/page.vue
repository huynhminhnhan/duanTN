<template>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
        <div class="col-lg-4 mx-auto">
           
           <router-view></router-view>
            
            <ul class="auth-footer">
            <li>
                <a href="#">Conditions</a>
            </li>
            <li>
                <a href="#">Help</a>
            </li>
            <li>
                <a href="#">Terms</a>
            </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p>
        </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    </div>
</template>
<script >
export default {
    name : 'page',
    data() {
       return {
            title : ''
       } 
       
    }
}
</script>