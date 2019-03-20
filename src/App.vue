<template>
<div class='appcontainer'>
<!-- <search></search> -->
<router-view></router-view>
<!-- <footer></footer> -->

</div>
</template>

<script>
import Vue from 'vue';
import axios from "axios";
// 把axios设置到Vue的原型对象上，方便在任意组件中使用
Vue.prototype.$axios = axios;

export default {

}
</script>

<style>

</style>
