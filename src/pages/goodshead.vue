<template>
  <div class="container">
    <div class="g_head" style='background:#f8f8f8;height:44px'>
      <i class="iback" @click="gobacklast">
        <img src="../assets/img/fenxiang.svg" style='width:24px;height:24px;margin-top:5px'>
      </i>
      <mt-navbar v-model="selected" class="inav" style='background:#f8f8f8'>
        <mt-tab-item id="1">
          <span>{{regorlog}}</span>
          <span style='display:inline-block;line-height:8px'>客服咨询</span>
        </mt-tab-item>
      </mt-navbar>
      <i class="imore" @click="isshow=!isshow">
        <img src="../assets/img/more.jpg" style='width:24px;height:24px;margin-top:5px'>
      </i>
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
  </div>
</template>
<script type="text/javascript">
export default {
  data() {
    return {
      selected: [],
      isshow: false,
      regorlog: ""
    };
  },
  methods: {
    gobacklast() {
      history.go(-1);
    }
  },
  beforeMount() {
    // console.log(this.$route.name);
    if (this.$route.name == "Login") {
      this.regorlog = "登录";
    } else if (this.$route.name == "register") {
      this.regorlog = "注册";
    }
  }
};
</script>
<style scoped>
.mint-navbar .mint-tab-item.is-selected {
  color: #333;
  margin-bottom: -3px;
}
.mint-tab-item-label span {
  font-size: 20px;
}
.menu-box {
  height: 60px;
  background: #000;
  display: flex;
  transition: all 0.3s ease-in-out;
  overflow: hidden;
}
.menu-box a {
  font-size: 14px;
  color: #9c9c9c;
  flex: 1;
  text-align: center;
  padding-top: 5px;
}
.menu-box a i {
  display: block;
  height: 29px;
  background: url(../assets/img/31shouyexuanzhong.png) no-repeat center;
  background-size: contain;
}
.menu-box a:nth-of-type(2) i {
  background: url(../assets/img/liebiao.png) no-repeat center;
  background-size: contain;
}
.menu-box a:nth-of-type(3) i {
  background: url(../assets/img/gouwuchexuanzhong.png) no-repeat center;
  background-size: contain;
}
.menu-box a:nth-of-type(4) i {
  background: url(../assets/img/wo.png) no-repeat center;
  background-size: contain;
}
/*进入*/
.slide-enter {
  height: 0px !important;
}
.slide-enter-to {
  height: 55px !important;
}
.slide-enter-active {
  transition: all 0.3s ease-in-out;
}
/*离开*/
.slide-leave {
  height: 55px !important;
} /*初始状态*/
.slide-leave-to {
  height: 0px !important;
}
.slide-leave-active {
  transition: all 0.3s ease-in-out;
}

.mint-swipe {
  height: 150px;
}
</style>