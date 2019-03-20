<template>
<div style="position:fixed;width: 100%;background:#fff;z-index:3;">
    <div class="g_head">
        <i class="iback"><img src="../assets/img/fenxiang.svg"/></i>
        <mt-navbar v-model="selected" class="inav">
            <mt-tab-item id="1">商品</mt-tab-item>
            <mt-tab-item id="2">评论</mt-tab-item>
            <mt-tab-item id="3">详情</mt-tab-item>
        </mt-navbar>
        <i class="imore" @click="isshow=!isshow"><img src="../assets/img/more.svg"/></i>
    </div>
    <transition name="slide">
        <div class="menu-box flex" style="height: 55px;" v-show="isshow"> 
            <a href="javascript:;" class="flex flex-col flex-center router-link-active">
                <i class="fa fa-home"><img src="../assets/img/31shouyexuanzhong.png"/></i> 
                <span>首页</span>
            </a> 
            <a href="javascript:;" class="flex flex-col flex-center">
                <i class="fa fa-reorder"><img src="../assets/img/liebiao.png"/></i> 
                <span>分类</span>
            </a> 
            <a href="javascript:;" class="flex flex-col flex-center">
                <i class="fa fa-shopping-cart"><img src="../assets/img/gouwuchexuanzhong.png"/></i> 
                <span>购物车</span>
            </a> 
            <a href="javascript:;" class="flex flex-col flex-center">
                <i class="fa fa-user"><img src="../assets/img/wo.png"/></i> 
                <span>我的</span>
            </a>
        </div>
    </transition>
</div>
</template>
<script>
import "../assets/css/index.css"
export default{
    data(){
        return {
            selected:"1",
            isshow:false
        }
    }

}
</script>

<style scoped>
.mint-navbar .mint-tab-item.is-selected {
    border-bottom: 2px solid #333;
    color: #333;
    margin-bottom: 1px;
}  

.g_head{ 
    display: flex;
    background: #fff;
    color:#000;
}
.g_head .iback{
    flex:.3;
}
.g_head .iback img{
    width: 20px;
    height: 45px; 
}
.g_head .inav{
    flex:1.5;
    font-size: 16px;
}

.g_head .imore{
    flex:.3;
    padding-right:10px;
    text-align: right;
}
.g_head .imore img{
    width: 20px;
    height: 45px;
}

.menu-box {
    height: 60px;
    background: #000;
    position:absolute;
    z-index: 3;
    width: 100%;
    top:50px;
    display:flex;
    transition: all .3s ease-in-out;
    overflow: hidden;
}
.menu-box a{
    font-size: 14px;
    color: #9c9c9c;
    flex:1;
    text-align:center;
    padding-top: 5px;
}
.menu-box a i{
    display:block;
    height:29px;
    width: 25%;
}
.menu-box a i img{
    width: 100%;
    height:100%;
}

    /*进入*/
    .slide-enter{height:0px!important;}
    .slide-enter-to{height: 55px!important;}
    .slide-enter-active{transition: all .3s ease-in-out;}
    /*离开*/
    .slide-leave{height: 55px!important;} /*初始状态*/
    .slide-leave-to{height:0px!important;}
    .slide-leave-active{transition: all .3s ease-in-out;}
    
    
</style>