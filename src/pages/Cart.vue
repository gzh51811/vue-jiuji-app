<template>
<div  class='cart'>
<!-- 编辑 -->
<div class='carttop' style='position:relative;z-index:10'>   
    <p class='p1'><<i data-v-35aaf6d2="" class="fa fa-angle-left font-30"></i></p>
    <p class='p2'>购物车</p>
    <p class='p3'>编辑</p>
</div>
<!-- 购物车 -->
<div data-v-32d70c04="" class="bg-card"  style='position:relative;z-index:10'><h2 data-v-32d70c04="">购物车</h2> <p data-v-32d70c04="" class="font-13" style="line-height: 18px; opacity: 0.7;">共<span data-v-32d70c04="">0</span>件商品</p></div>

<div data-v-32d70c04="" class="bg" style="background-image: url(&quot;//img2.ch999img.com/pic/topic/2018091809059840.png&quot;);"></div>
<!-- 弹窗显示无商品 -->
<div data-v-32d70c04="" class="login-tips relative flex flex-center font-12"><span data-v-32d70c04=""><i data-v-32d70c04="" class="fa fa-info-circle font-14 main-color mr-5"></i> 登录后可同步电脑与手机购物车中的商品</span> <a data-v-32d70c04="" href="####" class="">登录</a></div>
<!-- 展示商品 -->
<!-- <div class="cartrender" >
    <ul>
    
        <li v-for='(item,idx) in cartlist[0]' :key="item.cid">
            <div class='cartinput'>
               <span data-v-6bab7188="" data-v-32d70c04="" class="checkbox product-checkbox" style="border-color: rgb(204, 204, 204);"></span>
            </div>
            <div class='cartshow'>
                <img :src="item.imgurl" alt="" />
                <div class='currentlist'>
                    <p style='font-size:14px;height:36px;line-height:36px;'>{{item.name}} {{item.size}} {{item.color}}</p>
                    <div style='width:100%;height:36px;line-height:36px;'>

                    <span style='display:inline-block;color:red ;'>￥{{item.price}}</span>
                    <p style='display:inline-block;float:right;margin-right:10px;'><span class='deleteqty' style='width:20px;height:26px;line-height:26px;display:inline-block;text-align:center;border:1px solid #ccc;border-radius:12px 0 0 12px;background-color: #f5f5f5'>-</span><span style='width:40px;height:26px;line-height:26px;border-color:1px solid #000;display:inline-block;text-align:center;border:1px solid #ccc'>{{item.qty}}</span><span class='addqty' style='width:20px;height:26px;line-height:26px;display:inline-block;text-align:center;border:1px solid #ccc;border-radius: 0 12px 12px 0;background-color: #f5f5f5'>+</span></p>

                    </div>
                </div>
            </div>
        </li>
    </ul>
</div> -->
<div data-v-32d70c04="" class="cart">
    <div data-v-32d70c04="" class="cart-item white-bg" v-for='(item,idx) in cartlist[0]'><!----> <div data-v-32d70c04="" class="product"><div data-v-32d70c04="" class="product-item"><div data-v-32d70c04="" class="flex flex-between relative"><span data-v-6bab7188="" data-v-32d70c04="" class="checkbox product-checkbox" style="border-color: rgb(204, 204, 204);    width: 20px;
    height: 20px;border: 1px solid #000;border-radius:50%"></span> <a data-v-32d70c04="" href="/product/68186.html" class="product-img flex-child-noshrink"><img data-v-32d70c04="" src="https://img2.ch999img.com/pic/product/440x440/20181101141815489.jpg" class="full-width full-height"> <!----></a> <div data-v-32d70c04="" class="product-info margin-left flex flex-col flex-justify-between flex-child-grow"><p data-v-32d70c04="" class="lines-2 product-name">{{item.name}} {{item.size}} {{item.color}} </p> <!----> <div data-v-32d70c04="" class="flex flex-justify-between flex-align-center"><div data-v-32d70c04=""><!----> <p data-v-32d70c04=""><span data-v-32d70c04="" class="red">￥{{item.price}}</span> <!----></p></div> <div data-v-32d70c04="" class="edit-count flex"><a data-v-32d70c04="" href="javascript:" class="min-count disable">-</a> <span data-v-32d70c04="">{{item.qty}}</span> <a data-v-32d70c04="" href="javascript:" class="max-count">+</a></div> <!----></div> <!----></div></div> <div data-v-32d70c04="" class="product-bind"><!----> <!----> <!----> <div data-v-32d70c04="" class="bind-item"></div> <div data-v-32d70c04="" class="bind-item"></div></div></div></div></div>
</div>
<!-- 商品框 -->
<div data-v-32d70c04="" class="nothing relative flex flex-col flex-center" v-show="isblock"><i data-v-32d70c04=""></i> <p data-v-32d70c04="" class="grey-9">购物车里什么都没有，快去买点什么吧~</p> <a data-v-32d70c04="" href="/" class="router-link-active">去逛逛</a></div>



<!-- 为你优先 -->
<div data-v-0db50fbe="" data-v-32d70c04="">
    <div data-v-0db50fbe="" class="recommend"><div data-v-0db50fbe="" class="title-image"><img data-v-0db50fbe="" src="https://img2.ch999img.com/newstatic/767/3174479e1a14d5.png" class="full-width"></div> <ul data-v-0db50fbe="" class="flex flex-justify-between flex-wrap"><li data-v-0db50fbe=""><div data-v-0db50fbe="" class="recommend-item"><a data-v-0db50fbe="" href="/product/68397.html"><img data-v-0db50fbe="" src="https://img2.ch999img.com/pic/product/440x440/20181112161914466.jpg"></a> <p data-v-0db50fbe="" class="lines-2 mt-5 recommend-name">Apple iPhone XS Max (A2104) 全网通版金色 64GB </p> <div data-v-0db50fbe="" class="flex flex-justify-between flex-align-center margin-top"><span data-v-0db50fbe="" class="red font-16">￥7899.00</span> <a data-v-0db50fbe="" href="javascript:"><i data-v-0db50fbe="" class="icon-cart"></i></a></div></div></li><li data-v-0db50fbe=""><div data-v-0db50fbe="" class="recommend-item"><a data-v-0db50fbe="" href="/product/67868.html"><img data-v-0db50fbe="" src="https://img2.ch999img.com/pic/product/440x440/20180913060744616.jpg"></a> <p data-v-0db50fbe="" class="lines-2 mt-5 recommend-name">Apple iPhone XS (A2100) 全网通版金色 64GB </p> <div data-v-0db50fbe="" class="flex flex-justify-between flex-align-center margin-top"><span data-v-0db50fbe="" class="red font-16">￥7299.00</span> <a data-v-0db50fbe="" href="javascript:"><i data-v-0db50fbe="" class="icon-cart"></i></a></div></div></li><li data-v-0db50fbe=""><div data-v-0db50fbe="" class="recommend-item"><a data-v-0db50fbe="" href="/product/58206.html"><img data-v-0db50fbe="" src="https://img2.ch999img.com/pic/product/440x440/20180802145109436.jpg"></a> <p data-v-0db50fbe="" class="lines-2 mt-5 recommend-name">Apple iPhone X（A1865） 全网通版银色 64GB </p> <div data-v-0db50fbe="" class="flex flex-justify-between flex-align-center margin-top"><span data-v-0db50fbe="" class="red font-16">￥6099.00</span> <a data-v-0db50fbe="" href="javascript:"><i data-v-0db50fbe="" class="icon-cart"></i></a></div></div></li><li data-v-0db50fbe=""><div data-v-0db50fbe="" class="recommend-item"><a data-v-0db50fbe="" href="/product/73669.html"><img data-v-0db50fbe="" src="https://img2.ch999img.com/pic/product/440x440/2019022820191626.jpg"></a> <p data-v-0db50fbe="" class="lines-2 mt-5 recommend-name">三星 Galaxy S10 (SM-G9730) 全网通版碳晶黑 8GB+128GB </p> <div data-v-0db50fbe="" class="flex flex-justify-between flex-align-center margin-top"><span data-v-0db50fbe="" class="red font-16">￥5999.00</span> <a data-v-0db50fbe="" href="javascript:"><i data-v-0db50fbe="" class="icon-cart"></i></a></div></div></li><li data-v-0db50fbe=""><div data-v-0db50fbe="" class="recommend-item"><a data-v-0db50fbe="" href="/product/68396.html"><img data-v-0db50fbe="" src="https://img2.ch999img.com/pic/product/440x440/20180913062755703.jpg"></a> <p data-v-0db50fbe="" class="lines-2 mt-5 recommend-name">Apple iPhone XR(A2108) 全网通版白色 64GB </p> <div data-v-0db50fbe="" class="flex flex-justify-between flex-align-center margin-top"><span data-v-0db50fbe="" class="red font-16">￥5199.00</span> <a data-v-0db50fbe="" href="javascript:"><i data-v-0db50fbe="" class="icon-cart"></i></a></div></div></li><li data-v-0db50fbe=""><div data-v-0db50fbe="" class="recommend-item"><a data-v-0db50fbe="" href="/product/57646.html"><img data-v-0db50fbe="" src="https://img2.ch999img.com/pic/product/440x440/20170913033540501.jpg"></a> <p data-v-0db50fbe="" class="lines-2 mt-5 recommend-name">Apple iPhone 8 Plus（A1864） 全网通版金色 64GB </p> <div data-v-0db50fbe="" class="flex flex-justify-between flex-align-center margin-top"><span data-v-0db50fbe="" class="red font-16">￥4760.00</span> <a data-v-0db50fbe="" href="javascript:"><i data-v-0db50fbe="" class="icon-cart"></i></a></div></div></li><li data-v-0db50fbe=""><div data-v-0db50fbe="" class="recommend-item"><a data-v-0db50fbe="" href="/product/57642.html"><img data-v-0db50fbe="" src="https://img2.ch999img.com/pic/product/440x440/20170913035331849.jpg"></a> <p data-v-0db50fbe="" class="lines-2 mt-5 recommend-name">Apple iPhone 8（A1863） 全网通版金色 64GB </p> <div data-v-0db50fbe="" class="flex flex-justify-between flex-align-center margin-top"><span data-v-0db50fbe="" class="red font-16">￥3899.00</span> <a data-v-0db50fbe="" href="javascript:"><i data-v-0db50fbe="" class="icon-cart"></i></a></div></div></li><li data-v-0db50fbe=""><div data-v-0db50fbe="" class="recommend-item"><a data-v-0db50fbe="" href="/product/43928.html"><img data-v-0db50fbe="" src="https://img2.ch999img.com/pic/product/440x440/201704211441298.jpg"></a> <p data-v-0db50fbe="" class="lines-2 mt-5 recommend-name">Apple iPhone 7 Plus（A1661） 全网通版玫瑰金色 32GB </p> <div data-v-0db50fbe="" class="flex flex-justify-between flex-align-center margin-top"><span data-v-0db50fbe="" class="red font-16">￥3599.00</span> <a data-v-0db50fbe="" href="javascript:"><i data-v-0db50fbe="" class="icon-cart"></i></a></div></div></li><li data-v-0db50fbe=""><div data-v-0db50fbe="" class="recommend-item"><a data-v-0db50fbe="" href="/product/43947.html"><img data-v-0db50fbe="" src="https://img2.ch999img.com/pic/product/440x440/20150910060620766.jpg"></a> <p data-v-0db50fbe="" class="lines-2 mt-5 recommend-name">Apple iPhone 6s Plus（A1699） 全网通版玫瑰金色 32GB </p> <div data-v-0db50fbe="" class="flex flex-justify-between flex-align-center margin-top"><span data-v-0db50fbe="" class="red font-16">￥2750.00</span> <a data-v-0db50fbe="" href="javascript:"><i data-v-0db50fbe="" class="icon-cart"></i></a></div></div></li><li data-v-0db50fbe=""><div data-v-0db50fbe="" class="recommend-item"><a data-v-0db50fbe="" href="/product/66624.html"><img data-v-0db50fbe="" src="https://img2.ch999img.com/pic/product/440x440/20180711100241606.jpg"></a> <p data-v-0db50fbe="" class="lines-2 mt-5 recommend-name">华为 nova 3 （PAR-AL00） 全网通版亮黑色 6GB+128GB </p> <div data-v-0db50fbe="" class="flex flex-justify-between flex-align-center margin-top"><span data-v-0db50fbe="" class="red font-16">￥2599.00</span> <a data-v-0db50fbe="" href="javascript:"><i data-v-0db50fbe="" class="icon-cart"></i></a></div></div></li></ul></div>
</div>
<!-- 结算栏 -->


</div>
</template>

<script>
import {mapState,mapMutations} from 'vuex';
export default {
    data(){
        return{
            isblock:''
        }
    },
    components:{
        
    },
    computed:{
        ...mapState([
             //映射computed.cartlist为this.$store.state.cartlist
            'cartlist'
        ])

    },
    created(){
        console.log(this)
        console.log(689,this.$store);
        this.$axios.get('http://localhost:5201/cartlist.php',{
                params:{
                    
                }
            }).then(res=>{
                let  {data:{list}}=res;
                this.$store.dispatch('cartrender',list);
                console.log('购物车渲染',list);

                // console.log('cartlist',this.$store.state.cartlist[0].length);
                if(this.$store.state.cartlist[0].length>0){
                    this.isblock=false;

                }
                else if(this.$store.state.cartlist[0].length==0){
                    this.isblock=true;

                }
                
                console.log('888888',this.isblock)
        });

        
    }

}
</script>

<style scoped  lang='scss'>
.carttop{
    height: 40px;
    display:flex;
    // background:#F92627;
    
    p{
        height: 40px;
        flex:1;
        justify-content: center;
        display:flex;
        float: left;
        font-size: 14px;
        color:#fff;
        font-weight:bold;
        line-height:40px;
    }
    p:nth-of-type(1){
        justify-content:flex-start;
        font-weight:bold;
        font-size:18px;


    }
    p:nth-of-type(2){
         font-size:16px;
         margin-left:10px;
        
    }
    p:nth-of-type(3){
        justify-content:flex-end;
        margin-right:10px;
    }
}
.cartrender{
    width:348px;
    margin:0 auto;
    ul{
       width:348px;
       li{
            height:90px;
            margin-bottom:10px;
            
            background:#fff;
            box-shadow: 0 2px 10px 0 rgba(0,0,0,.08);
            div{
                float:left;
            }
            .cartinput{
                width:60px;
            }
            .cartinput>input{
                width:20px;
                height:20px;
                line-height:90px;
                text-align:center;
                border:1px solid #000;
                border-radius:50%;
            }
            .cartshow{
                img{
                    display:block;
                    float:left;
                    width:70px;
                    height:70px;
                }
                .currentlist{
                    float:right;
                    width:216px;
                }
            }
       } 
    }
    

}

</style>
