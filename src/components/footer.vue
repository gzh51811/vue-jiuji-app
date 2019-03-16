<template>
  <div class="container">
    <mt-tabbar v-model="selected">
      <mt-tab-item  v-for="(nav,idx) in navs" :key="nav.name" :id="idx" @click.native="change">
        <img slot="icon" :src="nav.img">
        <!-- <el-badge value="4" class="item" v-if="nav.name=='Cart'">
            {{nav.text}}
        </el-badge> -->
        <span>{{nav.text}}</span>
      </mt-tab-item>
    </mt-tabbar>
  </div>
</template>

<script>
import Vue from 'vue';
import 'mint-ui/lib/style.css'
export default {
    data(){
         return {
            navs:[{
                nid:'tab1',
                text:'首页',
                name:'Home',
                img:'https://img2.ch999img.com/newstatic/1379/bd96f9d987b5c1.png'
            },
            {
                nid:'tab2',
                text:'分类',
                name:'List',
                img:'https://img2.ch999img.com/newstatic/1381/bd97081045bc9e.png'
            },
            {
                nid:'tab3',
                text:'消息',
                name:'Goods',
                img:'https://img2.ch999img.com/newstatic/1377/bd9722f5aec894.png'
            },
            {
                nid:'tab4',
                text:'购物车',
                name:'Cart',
                img:'https://img2.ch999img.com/newstatic/1381/bd972dc1c12d89.png'
            },
            {
                nid:'tab5',
                text:'我的',
                name:'Mine',
                img:'https://img2.ch999img.com/newstatic/1379/bd9734285e276a.png'
            }],
            activeIndex:0,
            selected:[],
            addclass:''
        }
    },
    methods:{
        change(e){         
            e.target.style.color = 'red';
        },
    }

}
</script>

<style scoped>
    .container .mint-tab-item-label span{
        font-size:16px;
    }
    .active{
        color: red;
    }
</style>
