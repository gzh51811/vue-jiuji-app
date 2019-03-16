<template>
    <div class="container">
        <div class="head">
            <i class="iback"><img src="../assets/img/fenxiang.svg" alt="" /></i>
            <mt-navbar v-model="selected" class="inav">
                <mt-tab-item id="1">商品</mt-tab-item>
                <mt-tab-item id="2">评论</mt-tab-item>
                <mt-tab-item id="3">详情</mt-tab-item>
            </mt-navbar>
            <i class="imore"><img src="../assets/img/more.svg" alt="" /></i>
        </div>
        

            <!-- tab-container -->
            <mt-tab-container v-model="selected">
              <mt-tab-container-item id="1">
                <mt-cell>1</mt-cell>
              </mt-tab-container-item>
              <mt-tab-container-item id="2">
                <mt-cell>2</mt-cell>
              </mt-tab-container-item>
              <mt-tab-container-item id="3">
                <mt-cell>3</mt-cell>
              </mt-tab-container-item>
            </mt-tab-container>
    </div>
</template>
<script type="text/javascript">

export default{
    data(){
        return {
            selected:[]
        }
    }
}
</script>
<style scoped>
    .head{
        display: flex;
        background: #fff;
        color:#000;
    }
    .head .iback{
        flex:.3;
    }
    .head .iback img{
        width: 20px;
        height: 45px;
    }
    .head .inav{
        flex:1.5;
        font-size: 16px;
    }
    .mint-navbar .mint-tab-item.is-selected {
        border-bottom: 5px solid #333;
        color: #333;
        margin-bottom: -3px;
    }
    .head .imore{
        flex:.3;
        padding-right:10px;
        text-align: right;
    }
    .head .imore img{
        width: 20px;
        height: 45px;
    }

    
</style>