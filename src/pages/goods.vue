<template>
    <div class="container">
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
                <i class="fa fa-home"></i> 
                <span>首页</span>
            </a> 
            <a href="javascript:;" class="flex flex-col flex-center">
                <i class="fa fa-reorder"></i> 
                <span>分类</span>
            </a> 
            <a href="javascript:;" class="flex flex-col flex-center">
                <i class="fa fa-shopping-cart"></i> 
                <span>购物车</span>
            </a> 
            <a href="javascript:;" class="flex flex-col flex-center">
                <i class="fa fa-user"></i> 
                <span>我的</span>
            </a>
            </div>
        </transition>

        <div class="gcenter">
            <mt-swipe :auto="0" :show-indicators="false" style="background:#fff;">
                <mt-swipe-item :key="0" name="0">
                    <video volume="0.5" src="https://img2.ch999img.com/pic/product/opic/20181228143538520.mp4" poster="https://img2.ch999img.com/pic/product/440x440/20190308180221753.jpg" class="video" style="width: 100%;"></video>
                    <div  class="gesture-mask">
                        <svg  viewBox="0 0 1024 1024" width="50" height="50" class="play-btn" style="fill: rgb(255, 255, 255);">
                            <path  d="M512.718 1.549C230.377 1.549 1.494 230.432 1.494 512.774S230.377 1024 512.718 1024s511.224-228.884 511.224-511.226S795.06 1.55 512.718 1.55z m0 971.325c-254.108 0-460.102-205.996-460.102-460.102S258.61 52.67 512.718 52.67 972.82 258.665 972.82 512.772 766.826 972.874 512.718 972.874z m232.06-496.332c-79.556-54.133-223.815-135.157-305.959-185.36-33.678-21.239-61.996-12.71-64.717 24.8-1.971 100.468 0 294.317 0 396.523 1.711 38.08 35.282 43.101 64.419 27.812 82.05-49.71 223.071-135.147 305.536-185.11-0.54-0.327 62.614-35.06 0.72-78.665z" p-id="5260"></path>
                        </svg>
                    </div>
                </mt-swipe-item>
                <mt-swipe-item v-for="(item,idx) in dbanner" :key="idx+1" name="idx">
                    <img :src="item.imgurl" width="" height="" class="lazy-img">
                </mt-swipe-item>                
            </mt-swipe>
            <!-- 轮播图选择 -->
            <div class="flex flex-justify-between" style="padding-top: 2px;background:#fff;">
                <div style="width: 77px;"></div> 
                <div class="flex flex-center">
                    <div class="swipe-btn relative btn-unselected">
                        <img src="//img2.ch999img.com/m/static/assets/play-btn-bg.556d32dd8ed74af68a44ee79d2397bd3.png" alt="" class="play-btn-bg absolute"> 
                        <img src="" class="play-btn absolute play-btn-selected"> 
                        <img src="" class="play-btn absolute play-btn-unselected"> 
                        <span class="play-btn-text relative" style="margin-left: 12px;">视频</span>
                    </div> 
                    <div class="swipe-btn relative text-center btn-unselected">
                        <img src="//img2.ch999img.com/m/static/assets/play-btn-bg.556d32dd8ed74af68a44ee79d2397bd3.png" alt="" class="play-btn-bg absolute"> 
                        <span class="play-btn-text relative" style="margin-left: 12px;">图片</span>
                    </div> 
                    <div class="swipe-btn relative text-center btn-unselected">
                        <img src="//img2.ch999img.com/m/static/assets/play-btn-bg.556d32dd8ed74af68a44ee79d2397bd3.png" alt="" class="play-btn-bg absolute"> 
                        <span class="play-btn-text relative" style="margin-left: 12px;">实拍</span>
                    </div>
                </div> 
                <div class="product-swipe-page">
                    <span class="page-box">6/10</span>
                </div>
            </div>

            <!-- 图片 -->
            <div class="banner-box">
                <a href="javascript:;">
                    <img src="https://img2.ch999img.com//pic/edt/ad/20190308/20190308221632_4013.png" class="banner-img" style="width: 100%;">
                </a>
            </div>
            <!-- 价格 -->
            <div class="product-wrapper basic-info">
                <p class="product-title">
                    <span><strong>Apple iPhone XR 全网通版 黑色 64GB 双卡双待六种配色6.1英寸LCD屏幕</strong></span>
                </p> 
                <p class="product-profile red">
                    <span>【九机周年庆3.8-3.17】官网最高直降1300！</span> 
                </p> 
                <div class="product-price-box red">
                    <span class="mark">¥ </span>  
                    <span> 5199.00</span>
                </div>
                <div class="mt-5 option-row flex flex-content-between">
                    <a href="/product/price-trend/68436" class="btn-o">
                        <i class="icon icon-trends"></i>价格走势
                    </a> 
                    <a href="javascript:" class="btn-o">
                        <i class="icon icon-notice"></i>降价通知
                    </a> 
                    <a href="javascript:;" class="btn-o">
                        <i class="icon icon-pk"></i>机型对比</a>
                    <a href="javascript:" class="btn-o">
                        <i class="icon icon-open"></i>开箱展示
                    </a>
                </div>
            </div>

            <div> 
            <div class="spec-params-wrapper white-bg margin-top">
                <div class="module-box spec-params">
                    <div class="module-header flex flex-justify-between flex-align-center">
                            <div class="module-title flex flex-align-center small" style="width:65px;color:#999;">
                                <span style="padding-right:14px">规</span><span style="padding:14px">格</span>
                            </div> 
                            <div class="module-content flex flex-align-center">
                                <div>
                                    <div class="spec-params-container" style="width: 1118px;">
                                        <div  class="spec-params-item flex flex-col flex-center">
                                            <img  src="https://img2.ch999img.com/pic/product/70x70/20180803153357141.png"> 
                                            <p class="key text">屏幕尺寸</p> 
                                            <p class="val text">6.1 英寸</p>
                                        </div>
                                        <div class="spec-params-item flex flex-col flex-center">
                                            <img src="https://img2.ch999img.com/pic/product/70x70/20180803153248164.png"> 
                                            <p class="key text">主屏分辨率</p> 
                                            <p class="val text">1792 x 828 像素分辨率</p>
                                        </div>
                                        <div 
                                        class="spec-params-item flex flex-col flex-center">
                                            <img src="https://img2.ch999img.com/pic/product/70x70/20180803153435742.png"> 
                                            <p class="key text">机身内存</p> 
                                            <p class="val text">64GB</p>
                                        </div>
                                        <div class="spec-params-item flex flex-col flex-center">
                                            <img src="https://img2.ch999img.com/pic/product/70x70/20180803153447276.png"> 
                                            <p class="key text">运行内存</p> 
                                            <p class="val text">3GB</p>
                                        </div>
                                        <div class="spec-params-item flex flex-col flex-center">
                                            <img src="https://img2.ch999img.com/pic/product/70x70/20180803153142471.png"> 
                                            <p class="key text">CPU型号</p> 
                                            <p class="val text">A12 仿生</p>
                                        </div>
                                        <div class="spec-params-item flex flex-col flex-center">
                                            <img src="https://img2.ch999img.com/pic/product/70x70/20180803153323547.png"> 
                                            <p class="key text">核心数</p> 
                                            <p class="val text">六核</p>
                                        </div>
                                        <div class="spec-params-item flex flex-col flex-center">
                                            <img src="https://img2.ch999img.com/pic/product/70x70/20180803153203987.png"> 
                                            <p class="key text">SIM卡规格</p> 
                                            <p class="val text">两个Nano SIM卡</p>
                                        </div>
                                        <div class="spec-params-item flex flex-col flex-center">
                                            <img src="https://img2.ch999img.com/pic/product/70x70/20180803153342880.png"> 
                                            <p class="key text">后置摄像头像素</p> 
                                            <p class="val text">1200万像素</p>
                                        </div>
                                        <div class="spec-params-item flex flex-col flex-center">
                                            <img src="https://img2.ch999img.com/pic/product/70x70/20180803153610643.png"> 
                                            <p class="key text">指纹识别</p> 
                                            <p class="val text">不支持</p>
                                        </div>
                                        <div class="spec-params-item flex flex-col flex-center">
                                            <img src="https://img2.ch999img.com/pic/product/70x70/20180803153513113.png"> 
                                            <p class="key text">快速充电</p> 
                                            <p class="val text">支持（需使用快速充电器）</p>
                                        </div>
                                        <div class="spec-params-item flex flex-col flex-center">
                                            <img src="https://img2.ch999img.com/pic/product/70x70/20180803153542542.png"> 
                                            <p class="key text">数据接口</p> 
                                            <p class="val text">Lightning</p>
                                        </div>
                                        <div class="spec-params-item flex flex-col flex-center">
                                            <img src="https://img2.ch999img.com/pic/product/70x70/20180803153730820.png"> 
                                            <p class="key text">标配电池</p> 
                                            <p class="val text">2942mAh</p></div>
                                        <div class="spec-params-item flex flex-col flex-center">
                                            <img src="https://img2.ch999img.com/pic/product/70x70/2018080315372063.png"> 
                                            <p class="key text">电池设计</p> 
                                            <p class="val text">内置电池</p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>  
                    </div>
                </div> 
                <div class="module-box-wrapper no-padding margin-top white-bg">
                    <div>
                        <div class="service-box" style="height: 55px;padding-top: 15px;">
                            <div class="flex service-box-inner">
                                <a href="javascript:;" class="flex-child-average flex flex-center" style="border-right:1px solid #ccc;">
                                    <div>
                                        <p class="service-item-title grey-9">一手优品</p> 
                                        <p class="service-item-description flex flex-align-end" style="margin-top: 8px;">
                                            <span class="font-12">￥</span> 
                                            <span class="font-16">5199</span> 
                                            <span class="font-12">.00</span> 
                                        </p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="flex-child-average flex flex-center" style="border-right:1px solid #ccc;">
                                    <div>
                                        <p class="service-item-title grey-9">二手良品</p> 
                                        <p class="service-item-description flex flex-align-end" style="margin-top: 8px;">
                                            <span class="font-12">￥</span> 
                                            <span class="font-16">4499</span> 
                                            <span class="font-12">.00</span> 
                                        </p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="flex-child-average flex flex-center">
                                    <div>
                                        <p class="service-item-title grey-9">租机体验</p> 
                                        <p class="service-item-description flex flex-align-end" style="margin-top: 8px;">
                                            <span class="font-12">￥</span> 
                                            <span class="font-16">11</span> 
                                            <span class="font-12">.19</span> 
                                            <span class="font-12">/日 起</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>  
                    </div>
                </div> 
                <div class="margin-top">
                    <div class="module-box-wrapper white-bg promotions">
                        <div class="module-box">
                            <div class="module-header flex flex-justify-between flex-align-center">
                                <div class="module-title flex flex-align-center small">
                                    <span>促</span>
                                    <span>销</span>
                                    <span>活</span>
                                    <span>动</span>
                                </div> 
                                <div class="module-content flex flex-align-center"></div> 
                                <div class="module-operation"> 
                                    <a href="javascript:;" class="grey-9 flex flex-center font-12">  
                                        <i class="more ml-5"></i>
                                    </a> 
                                </div>
                            </div> 
                            <div>
                                <div class="margin-top lines-1">
                                    <span class="text-mark">建行满减</span> 
                                    <span>线上下单选择到店取货，再减300元</span>
                                </div> 
                                <div class="margin-top lines-1">
                                    <span class="text-mark">库分期</span> 
                                    <span>免息分期享不停</span>
                                </div> 
                                <div class="margin-top">
                                    <span class="text-mark mark-inline">暖心回馈</span>
                                    <span class="text-mark mark-inline">特价</span>
                                    <span class="text-mark mark-inline">优惠套餐</span>
                                </div>
                            </div> 
                        </div>
                    </div> 
                    <div class="module-box-wrapper" style="background-color: rgb(250, 242, 217);">
                        <div class="module-box force-red-font">
                            <div class="module-header flex flex-justify-between flex-align-center">
                                <div class="module-title flex flex-align-center small">
                                    <span>以</span>
                                    <span>旧</span>
                                    <span>换</span>
                                    <span>新</span>
                                </div> 
                                <div class="module-content flex flex-align-center">
                                    <span>急速到账购新机</span>
                                </div> 
                                <div class="module-operation">
                                    <a href="https://m.9ji.com//api/common.aspx?act=addCart&amp;jump=2&amp;ppid=68436" class="grey-9 flex flex-center font-12">  
                                        <i class="fa fa-angle-right grey-9 ml-5 font-18"></i>
                                    </a>  
                                </div>
                            </div>  
                        </div>
                    </div> 
                    <div class="module-box-wrapper white-bg">
                        <div class="module-box">
                            <div class="module-header flex flex-justify-between flex-align-center">
                                <div class="module-title flex flex-align-center small">
                                    <span>销</span>
                                    <span>量</span>
                                    <span>排</span>
                                    <span>行</span>
                                </div> 
                                <div class="module-content flex flex-align-center">
                                    <span>手机单品当日销量第1名</span>
                                </div> 
                                <div class="module-operation">
                                    <a href="https://m.9ji.com/product/hot/rank?cid=2" class="grey-9 flex flex-center font-12"> 
                                        <i class="fa fa-angle-right grey-9 ml-5 font-18"></i>
                                    </a>
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
        </div>  
        
    </div> 
</template>
<script type="text/javascript">
import "../css/11.css";


export default{
    data(){
        return {
            dbanner:[{
                imgurl:"https://img2.ch999img.com/pic/product/440x440/20180913063022561.jpg.webp"
                    },{
                        imgurl:"https://img2.ch999img.com/pic/product/440x440/20180927140611812.jpg.webp"
                    },{
                        imgurl:"https://img2.ch999img.com/pic/product/440x440/20180913063024876.jpg.webp"
                    },{
                        imgurl:"https://img2.ch999img.com/pic/product/800x800/20190104220112822.jpg.webp"
                    },{
                        imgurl:"https://img2.ch999img.com/pic/product/800x800/20190104220114828.jpg.webp"
                    },{
                        imgurl:"https://img2.ch999img.com/pic/product/800x800/20190104220113800.jpg.webp"
                    },{
                        imgurl:"https://img2.ch999img.com/pic/product/800x800/20190218113042328.jpg.webp"
                    },{
                        imgurl:"https://img2.ch999img.com/pic/product/800x800/20190104220116794.jpg.webp"
                    }],    
            selected:"1",
            isshow:false
        }
    },




}
</script>

<!-- CSS3弹性盒布局方式https://www.jianshu.com/p/5856c4ae91f2 -->
<style scoped>
    .container{
        display:flex;
        background:#efefef;
        flex-direction:column;
    }
    .contain .gcenter{
        flex:1;
    }
    .mint-navbar .mint-tab-item.is-selected {
        border-bottom: 2px solid #333;
        color: #333;
        margin-bottom: 1px;
    }
    .menu-box {
        height: 60px;
        background: #000;
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
        background:url(../assets/img/31shouyexuanzhong.png) no-repeat center;
        background-size:contain;
    }
    .menu-box a:nth-of-type(2) i{
        background:url(../assets/img/liebiao.png) no-repeat center;
        background-size:contain;
    }
    .menu-box a:nth-of-type(3) i{
        background:url(../assets/img/gouwuchexuanzhong.png) no-repeat center;
        background-size:contain;
    }
    .menu-box a:nth-of-type(4) i{
        background:url(../assets/img/wo.png) no-repeat center;
        background-size:contain;
    } 
    /*进入*/
    .slide-enter{height:0px!important;}
    .slide-enter-to{height: 55px!important;}
    .slide-enter-active{transition: all .3s ease-in-out;}
    /*离开*/
    .slide-leave{height: 55px!important;} /*初始状态*/
    .slide-leave-to{height:0px!important;}
    .slide-leave-active{transition: all .3s ease-in-out;}
    
    .mint-swipe,.mint-swipe img,.video{
        height:349px;
        text-align: center;
    }

    .video-box{position:relative;background:#000;}
    .video-box:-webkit-full-screen{width:100%;height:100%;}
    .video{width:100%;height:100%;display:block;}
    .video::-webkit-media-controls{display:none!important;}
    .video-logo{position:absolute;top:20px;left:20px;}
    .gesture-mask{position:absolute;top:0;right:0;bottom:0;left:0;display:-webkit-flex;display:flex;-webkit-justify-content:center;justify-content:center;-webkit-align-items:center;align-items:center;z-index:1;}
    .ie9 .play-btn{position:absolute;left:50%;top:50%;margin-left:-10px;margin-top:-10px;}
    .control{background-image:linear-gradient(transparent,rgba(0,0,0,.8));position:absolute;left:0;bottom:0;width:100%;z-index:2;}
    .control,.toggle-play{height:50px;display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;}
    .toggle-play{width:50px;-webkit-justify-content:center;justify-content:center;}
    .progress-bar{display:-webkit-flex;display:flex;-webkit-flex-grow:1;flex-grow:1;-webkit-align-items:center;align-items:center;}
    .video-time{color:#fff;font-size:14px;}
    .bar{background:#eee;height:5px;-webkit-flex-grow:1;flex-grow:1;margin:0 10px;cursor:pointer;transition:height .1s ease;opacity:.9;border-radius:3px;position:relative;}
    .bar:hover{height:10px;}
    .buffered-percent{background:#ccc;}
    .bar-percent,.buffered-percent{position:absolute;top:0;left:0;height:100%;border-radius:3px;}
    .progress-head{position:absolute;width:10px;height:10px;border-radius:100%;right:-2px;top:-2.5px;background:#fff;transition:all .2s ease;}
    .bar:hover .progress-head{top:0;}
    .progress-head:hover{-webkit-transform:scale(1.3);transform:scale(1.3);}
    .tools{display:-webkit-flex;display:flex;position:relative;}
    .volume{width:40px;height:50px;display:-webkit-flex;display:flex;-webkit-justify-content:center;justify-content:center;-webkit-align-items:center;align-items:center;}
    .volume-control{background:rgba(0,0,0,.9);width:30px;height:90px;position:absolute;bottom:50px;right:55px;}
    .volume-runway{width:4px;height:70px;margin:10px auto;background:#eee;position:relative;}
    .volume-thumb{width:10px;height:10px;border-radius:100%;left:-3px;position:absolute;}
    .full-screen{width:40px;height:50px;display:-webkit-flex;display:flex;-webkit-justify-content:center;justify-content:center;-webkit-align-items:center;align-items:center;margin-right:10px;}
















    .product-wrapper.basic-info {
        padding-bottom: 10px;
        color:#333;
    }
    a {
        color: #333;
        text-decoration: none;
        outline: 0;
    }
    .product-wrapper {
        padding: 13px 10px;
        background: #fff;
    }
   .product-wrapper .product-title {
        font-size: 16px;
        line-height: 1.5;
    }
    .red, a.red {
        color: #f21c1c;
    }
    .btn-o{
        width: 25%;
        font-size: 14px;
        padding-left:10px;
    }
    .product-wrapper .product-profile {
        line-height: 1.5;
        margin-top: 5px;
        font-size: 14px;
    }
    .product-wrapper .product-price-box {
        font-size: 28px;
        line-height: 25px;
        margin: 12px 0 18px;
    }
    .product-wrapper .product-price-box .mark {
        margin-right: -3px;
        font-size: 16px;
    }

    .icon{
        display: inline-block;
        height: 14px;
        width: 14px;
        margin-right: 3px;
        vertical-align: bottom;
    }
    /*.icon.icon-trends {
        background: url();
        background-size: contain;
    }*/

</style>
