<template>
  <mt-tabbar v-model="selected" @click.native='a'>
  <mt-tab-item id="tab1">
    <img slot="icon" src="../assets/logo.png">
    <span>首页</span>
  </mt-tab-item>
  <mt-tab-item id="tab2">
    <img slot="icon" src="../assets/logo.png">
    <span>分类</span>
  </mt-tab-item>
  <mt-tab-item id="tab3">
    <img slot="icon" src="../assets/logo.png">
    <span>消息</span>
  </mt-tab-item>
  <mt-tab-item id="tab4">
    <img slot="icon" src="../assets/logo.png">
   <span>购物车</span>
  </mt-tab-item>
  <mt-tab-item id="tab5">
    <img slot="icon" src="../assets/logo.png">
    <span>我的</span>
  </mt-tab-item>
</mt-tabbar>
</template>

<script>
import Vue from 'vue'
import 'mint-ui/lib/style.css'
import { Tabbar, TabItem } from 'mint-ui';
Vue.component(Tabbar.name, Tabbar);
Vue.component(TabItem.name, TabItem);
export default {
  name: 'HelloWorld',
  props: {
    // msg: String
  },
  data(){
    return{
      selected:false
    }
  },
  methods:{
    a(e){
      console.log(e.target);
      // for()
      e.target.style.color='red';
    }

  }
  
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .mint-tabbar .mint-tab-item-label span{
    font-size: 14px ;
    font-weight: bold;
  }

</style>
