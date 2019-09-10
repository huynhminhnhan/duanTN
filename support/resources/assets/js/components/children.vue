<template>
    <transition name="child-fade" mode="out-in">
        <router-view></router-view>
    </transition> 
</template>
<script>
export default {
    name : 'index',
    data() {
       return {
            title : 'Huynh minh nhan'
       } 
       
    }
}
</script>