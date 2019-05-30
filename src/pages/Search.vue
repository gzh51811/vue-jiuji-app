<template>
<div>
  <body class="jiuji">
    <div class="app-wrap">
        <ul data-v-59915c8b class="wrapper grey-f-bg">
            <div data-v-2c18a655 data-v-59915c8b class="flex-child-noshrink">          
                <header data-v-2c18a655 class="header">
                    <div data-v-2c18a655 class="wrapper">
                        <div data-v-2c18a655 class="main flex flex-justify-between relative bb" style="background-color: rgba(255, 255, 255, 0.95);">
                            <div data-v-2c18a655 class="left-side" @click="goBack">
                                <a data-v-2c18a655 href="javascript:;" class="back-button flex flex-center" style="color: rgb(51, 51, 51); padding-left: 0px;">
                                    <i data-v-2c18a655 class="fa fa-angle-left font-30" style="padding-left: 12px;"></i>
                                    <span data-v-2c18a655 class="back-text font-16"></span>
                                </a>
                            </div>
                            <div
                                data-v-2c18a655
                                class="title flex flex-center"
                                style="left: 44px; right: 44px;"
                            >
                            <form
                                data-v-59915c8b
                                data-v-2c18a655
                                action="javascript:return true;"
                                class="search-form flex flex-align-center"
                            >
                                <i data-v-59915c8b data-v-2c18a655 class="fa fa-search grey-9 font-13"></i>
                                <div data-v-59915c8b data-v-2c18a655 class="relative full-height full-width">
                                    <input data-v-59915c8b data-v-2c18a655 placeholder="华为 P30" ref="mysearch"/>
                                </div>
                            </form>
                            </div>
                            <div data-v-2c18a655 class="right-side flex flex-center" @click="toSearch">
                                <a data-v-59915c8b data-v-2c18a655 href="javascript:;" class="search-btn">搜索</a>
                            </div>
                            <div data-v-2c18a655 class="absolute full-width" style="top: 100%; z-index: -1;"></div>
                        </div>
                    </div>
                </header>
            </div>
            <div data-v-59915c8b class="cell-title white-bg grey-9">热门搜索</div>
            <div data-v-59915c8b class="hot-search white-bg">
                <a data-v-59915c8b href="javascript:" class="hot-item">华为 P30</a>
                <a data-v-59915c8b href="javascript:" class="hot-item">荣耀 20</a>
                <a data-v-59915c8b href="javascript:" class="hot-item">一加手机7</a>
                <a data-v-59915c8b href="javascript:" class="hot-item">华为 Mate 20</a>
                <a data-v-59915c8b href="javascript:" class="hot-item">红米 K20</a>
                <a data-v-59915c8b href="javascript:" class="hot-item">AirPods 2代</a>
            </div>
            <div data-v-59915c8b class="hot-rank white-bg">
                <a
                    data-v-59915c8b
                    href="https://m.9ji.com/product/hot/rank?from=sou"
                    class="rank-item flex flex-align-center flex-justify-between"
                >
                    <div data-v-59915c8b class="left-box flex flex-align-center">
                        <i data-v-59915c8b class="fa fa-search" style="margin-right: 5px;"></i>
                        <span data-v-59915c8b class="lines-1 flex-child-average">手机热销排行榜</span>
                        <em data-v-59915c8b class="label">榜单</em>
                    </div>
                    <i data-v-59915c8b class="fa fa-angle-right font-16 grey-9"></i>
                </a>
                <a
                    data-v-59915c8b
                    href="https://m.9ji.com/product/76955.html?from=sou"
                    class="rank-item flex flex-align-center flex-justify-between"
                >
                    <div data-v-59915c8b class="left-box flex flex-align-center">
                        <i data-v-59915c8b class="fa fa-search" style="margin-right: 5px;"></i>
                        <span data-v-59915c8b class="lines-1 flex-child-average">一加手机7 Pro火热销售</span>
                        <em data-v-59915c8b class="label">新品</em>
                    </div>
                    <i data-v-59915c8b class="fa fa-angle-right font-16 grey-9"></i>
                </a>
            </div> 
        </ul>
    </div>
    <div
        data-v-c213bd7c
        class="progress"
        style="width: 0%; height: 2px; background-color: rgb(26, 173, 25); opacity: 0;"
    ></div>
  </body>
</div>
</template>
<script>
import "../assets/css/search.css";
export default {
    methods:{
        toSearch(){
            let findGoods = this.$refs.mysearch.value;
            if(findGoods == '华为'){
                this.$router.push('/list/2')
            }else if(findGoods == '苹果'){
                this.$router.push('/list/1')
            }
            console.log(findGoods)
        },
        goBack(){
            this.$router.go(-1)
        }
    }
};
</script>
<style lang="scss" scoped>
.search-form[data-v-59915c8b] {
    padding: 0 53px 0 15px;
}
.flex-center {
    margin-right: 12px;
}
</style>