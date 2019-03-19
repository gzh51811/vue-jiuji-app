<template>

    <div class="container">
 
        <mt-tabbar v-model="selected"  >
          <mt-tab-item  v-for="(nav,idx) in navs" :key="nav.name" :id="nav.nid" @click.native="change(nav,idx,$event) "   :class="{active : activeIndex == idx}" ref='changeimg'>
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
                // img:'https://img2.ch999img.com/newstatic/1379/bd96f9d987b5c1.png',
                // imgactive:'https://img2.ch999img.com/newstatic/1379/bd96fc7ad0b956.png',
                img:require('../assets/img/home1.png'),
                imgactive:require('../assets/img/home2.png'),
                isok:true
            },
            {
                nid:'tab2',
                text:'分类',
                name:'Classify',
                // img:'https://img2.ch999img.com/newstatic/1381/bd97081045bc9e.png',
                // imgactive:'https://img2.ch999img.com/newstatic/1382/bd9717836a2719.png',
                img:require('../assets/img/classify1.png'),
                imgactive:require('../assets/img/classify2.png'),
                isok:false
            },
            {
                nid:'tab3',
                text:'消息',
                name:'Message',
                // img:'https://img2.ch999img.com/newstatic/1377/bd9722f5aec894.png',
                // imgactive:'https://img2.ch999img.com/newstatic/1377/bd9722f5aec894.png',
                img:require('../assets/img/message.png'),
                imgactive:require('../assets/img/message.png'),
                isok:false
            },
            {
                nid:'tab4',
                text:'购物车',
                name:'Cart',
                // img:'https://img2.ch999img.com/newstatic/1381/bd972dc1c12d89.png',
                // imgactive:'https://img2.ch999img.com/newstatic/1383/bd97314ec13fb2.png',
                img:require('../assets/img/cart1.png'),
                imgactive:require('../assets/img/cart2.png'),
                isok:false
            },
            {
                nid:'tab5',
                text:'我的',
                name:'Mine',
                // img:'https://img2.ch999img.com/newstatic/1379/bd9734285e276a.png',
                // imgactive:'https://img2.ch999img.com/newstatic/1382/bd973a33f93fa4.png',
                img:require('../assets/img/mine1.png'),
                imgactive:require('../assets/img/mine2.png'),
                isok:false
            }],
            activeIndex:0,
            selected:[],
            activeIndex:''
        }
    },
     
    methods:{
        change(nav,index,e){    

            
            // 点击切换样式
            // this.active=index;


            //点击切换颜色图片(用了路由不能用这个方式)
        //     this.navs.map(i=>{
        //       i.isok=false
        //       return {...i}
        //      })
        //      this.navs[index].isok = true;
            // 路由跳转
            this.$router.push({name:nav.name});

              
    }
           
    },

    created(){
    // console.log(6666,this.$route.name);
        // let currentidx='';
        for(let i=0;i<this.navs.length;i++){
            this.navs[i].isok=false;
            
            if(this.navs[i].name === this.$route.name){
                this.activeIndex = i;
                this.navs[i].isok = true;
                break;
            }
        }
        

    }


}
</script>

<style scoped>
<<<<<<< HEAD
    .container .mint-tab-item-label span{
        font-size:16px;
    }
    .active{
        color: red;
=======
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
    .tab-bar-box{
    border-top:1px  solid #000 !important;
>>>>>>> c8ded54db629206da20b846844a1c8e764d10f19
    }
</style>
