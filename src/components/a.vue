<template>

    <div class="container">
 
        <mt-tabbar v-model="selected"  >
          <mt-tab-item  v-for="(nav,idx) in navs" :key="nav.name" :id="nav.nid" @click.native="change(nav,idx,$event) "   :class="{active : active == idx}" ref='changeimg'>
          <!-- 小图标 -->
            <img slot="icon"  :src="nav.isok?nav.imgactive:nav.img">
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
                img:'https://img2.ch999img.com/newstatic/1379/bd96f9d987b5c1.png',
                imgactive:'https://img2.ch999img.com/newstatic/1379/bd96fc7ad0b956.png',
                isok:true
            },
            {
                nid:'tab2',
                text:'分类',
                name:'Classify',
                img:'https://img2.ch999img.com/newstatic/1381/bd97081045bc9e.png',
                imgactive:'https://img2.ch999img.com/newstatic/1382/bd9717836a2719.png',
                isok:false
            },
            {
                nid:'tab3',
                text:'消息',
                name:'Message',
                img:'https://img2.ch999img.com/newstatic/1377/bd9722f5aec894.png',
                imgactive:'https://img2.ch999img.com/newstatic/1377/bd9722f5aec894.png',
                isok:false
            },
            {
                nid:'tab4',
                text:'购物车',
                name:'Cart',
                img:'https://img2.ch999img.com/newstatic/1381/bd972dc1c12d89.png',
                imgactive:'https://img2.ch999img.com/newstatic/1383/bd97314ec13fb2.png',
                isok:false
            },
            {
                nid:'tab5',
                text:'我的',
                name:'Mine',
                img:'https://img2.ch999img.com/newstatic/1379/bd9734285e276a.png',
                imgactive:'https://img2.ch999img.com/newstatic/1382/bd973a33f93fa4.png',
                isok:false
            }],
            activeIndex:0,
            selected:[],
            active:''
        }
    },
     
    methods:{
        change(nav,index,e){    

            
            // 点击切换样式
            this.active=index;


            //点击切换颜色图片
            this.navs.map(i=>{
              i.isok=false
              return {...i}
             })
             this.navs[index].isok = true;
            // 路由跳转
            this.$router.push({name:nav.name});
            console.log(this.$router)
             // this.$router.push({name:nav.name});
              
         }
            // console.log('App:',this);
            // this.$router.push({name:nav.name})
            // this.$router.push({path:nav.path})      
    }
}
</script>

<style scoped>
    .active{
        color:red !important;
        background:#fff !important;
    }
    .container .mint-tabbar{
        background:#fff;

    }
    .container .mint-tab-item-label span{
        font-size:16px;
    }
</style>
