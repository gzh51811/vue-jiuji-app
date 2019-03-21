<template>
  <div>
    <div class="app-wrap">
      <!---->
      <div data-v-001aa8d4 class="wrapper full-height">
        <div data-v-35aaf6d2 data-v-001aa8d4 class="flex-child-noshrink">
          <div data-v-35aaf6d2 style="height: 44px; transition: height 0.2s ease 0s;"></div>
          <header data-v-35aaf6d2 class="header fixed">
            <div data-v-35aaf6d2 class="wrapper">
              <!---->
              <div
                data-v-35aaf6d2
                class="main flex flex-justify-between relative"
                style="background-color: rgba(0, 0, 0, 0); background-image: url(&quot;https://img2.ch999img.com/newstatic//1378/8741cf24cb3aca.png&quot;);"
              >
                <div data-v-35aaf6d2 class="left-side">
                  <!---->
                </div>
                <div
                  data-v-35aaf6d2
                  class="title flex flex-center"
                  style="left: 44px; right: 44px;"
                >
                  <!---->
                  <h3
                    data-v-001aa8d4
                    data-v-35aaf6d2
                    class="white font-18 normal"
                    style="opacity: 0;"
                  ></h3>
                </div>
                <div data-v-35aaf6d2 class="right-side flex flex-center">
                  <a
                    data-v-001aa8d4
                    href="javascript:;"
                    class="full-height padding-right flex flex-center white"
                    data-v-35aaf6d2
                  >
                    <span data-v-001aa8d4 @click="gosetting">设置</span>
                    <i data-v-001aa8d4 class="fa fa-cog font-18" style="margin-left: 5px;"></i>
                  </a>
                  <!---->
                </div>
              </div>
              <div data-v-35aaf6d2 class="menu-box flex" style="height: 0px;">
                <a data-v-35aaf6d2 href="/" class="flex flex-col flex-center router-link-active">
                  <i data-v-35aaf6d2 class="fa fa-home"></i>
                  <span data-v-35aaf6d2>首页</span>
                </a>
                <a data-v-35aaf6d2 href="./category" class="flex flex-col flex-center">
                  <i data-v-35aaf6d2 class="fa fa-reorder"></i>
                  <span data-v-35aaf6d2>分类</span>
                </a>
                <a data-v-35aaf6d2 href="./cart" class="flex flex-col flex-center">
                  <i data-v-35aaf6d2 class="fa fa-shopping-cart"></i>
                  <span data-v-35aaf6d2>购物车</span>
                </a>
                <a
                  data-v-35aaf6d2
                  href="javascript:;"
                  class="flex flex-col flex-center router-link-exact-active router-link-active"
                >
                  <i data-v-35aaf6d2 class="fa fa-user"></i>
                  <span data-v-35aaf6d2>我的</span>
                </a>
              </div>
            </div>
          </header>
        </div>
        <div
          data-v-001aa8d4
          class="bg"
          style="background-image: url(&quot;https://img2.ch999img.com/newstatic//1378/8741cf24cb3aca.png&quot;);"
        ></div>
        <!---->
        <div data-v-001aa8d4 class="member-box">
          <div data-v-001aa8d4 class="member-info flex flex-align-center">
            <a data-v-001aa8d4 href="javascript:;">
              <img
                data-v-1620e4da
                data-v-001aa8d4
                src="https://img2.ch999img.com//images/usericon.png.webp"
                width
                height
                class="lazy-img avatar"
              >
            </a>
            <!-- 登录状态修正 -->
            <!---->
            <div data-v-001aa8d4 class="no-login" @click.capture="routergo" v-show="log">
              <a data-v-001aa8d4 href="javascript:;" class>登录</a>
              <span data-v-001aa8d4>|</span>
              <a data-v-001aa8d4 href="javascript:;" class>注册</a>
            </div>

            <div data-v-001aa8d4 class="flex flex-col flex-justify" v-show="!log">
              <h4 data-v-001aa8d4 class="font-18">{{user}}</h4>
              <div data-v-001aa8d4 class="flex margin-top">
                <div data-v-001aa8d4 class="flex flex-center">
                  <a data-v-001aa8d4 href="javascript:;">
                    <img
                      data-v-1620e4da
                      data-v-001aa8d4
                      src="https://img2.ch999img.com/newstatic//916/76b7bebb5d76d8.png.webp"
                      width
                      height
                      class="lazy-img level-icon"
                    >
                  </a>
                </div>
                <a data-v-001aa8d4 href="javascript:;" class="flex flex-center margin-left">
                  <img
                    data-v-1620e4da
                    data-v-001aa8d4
                    src="https://img2.ch999img.com/newstatic//912/4448465aaa206c.png.webp"
                    width
                    height
                    class="lazy-img other-icon"
                  >
                  <span data-v-001aa8d4 class="font-13 black">未绑定</span>
                </a>
              </div>
              <!---->
            </div>
          </div>
          <div data-v-001aa8d4 class="property flex">
            <a
              data-v-001aa8d4
              href="javascript:;"
              class="property-item flex-child-average flex flex-col flex-center"
            >
              <p data-v-001aa8d4>0</p>
              <p data-v-001aa8d4 class="font-13">账户余额</p>
            </a>
            <a
              data-v-001aa8d4
              href="javascript:;"
              class="property-item flex-child-average flex flex-col flex-center"
            >
              <p data-v-001aa8d4>0</p>
              <p data-v-001aa8d4 class="font-13">优惠券</p>
            </a>
            <a
              data-v-001aa8d4
              href="javascript:;"
              class="property-item flex-child-average flex flex-col flex-center"
            >
              <p data-v-001aa8d4>0</p>
              <p data-v-001aa8d4 class="font-13">积分</p>
            </a>
            <a
              data-v-001aa8d4
              href="javascript:;"
              class="property-item flex-child-average flex flex-col flex-center"
            >
              <p data-v-001aa8d4>0</p>
              <p data-v-001aa8d4 class="font-13">九机币</p>
            </a>
          </div>
        </div>
        <!---->
        <div data-v-f0a08906 data-v-001aa8d4>
          <div data-v-f0a08906 class="menu-box">
            <div data-v-f0a08906 class="menu-title flex flex-justify-between flex-align-center">
              <h4 data-v-f0a08906 class="font-16">我的订单</h4>
              <a
                data-v-f0a08906
                href="javascript:;"
                class="full-height flex flex-center grey-9"
                style="color: rgb(156, 156, 156);"
              >
                <span data-v-f0a08906 style="margin-right: 8px;">全部订单</span>
                <i data-v-f0a08906 class="fa fa-angle-right font-24"></i>
              </a>
            </div>
            <div data-v-f0a08906 class="menu flex flex-wrap border-bottom">
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1383/b35d3926831d6c.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">待付款</span>
                <!---->
              </a>
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1377/b35da66dc4c871.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">待收货</span>
                <!---->
              </a>
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1381/b35db88b48d48d.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">待评价</span>
                <!---->
              </a>
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1378/b35e002dc9dcf7.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">维修订单</span>
                <!---->
              </a>
            </div>
          </div>
          <div data-v-f0a08906 class="menu-box">
            <div data-v-f0a08906 class="menu-title flex flex-justify-between flex-align-center">
              <h4 data-v-f0a08906 class="font-16">我的信息</h4>
              <!---->
            </div>
            <div data-v-f0a08906 class="menu flex flex-wrap border-bottom">
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1381/c61023404cb7f4.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">我的活动</span>
                <!---->
              </a>
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1380/b35e984b375ff9.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">收藏商品</span>
                <!---->
              </a>
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1377/b35eba19f22b8b.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">浏览记录</span>
                <!---->
              </a>
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1380/b35fab0b3f66fb.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">电子保修卡</span>
                <!---->
              </a>
            </div>
          </div>
          <div data-v-f0a08906 class="menu-box">
            <div data-v-f0a08906 class="menu-title flex flex-justify-between flex-align-center">
              <h4 data-v-f0a08906 class="font-16">常用功能</h4>
              <a
                data-v-f0a08906
                href="javascript:;"
                class="full-height flex flex-center grey-9"
                style="color: rgb(156, 156, 156);"
              >
                <span data-v-f0a08906 style="margin-right: 8px;">更多功能</span>
                <i data-v-f0a08906 class="fa fa-angle-right font-24"></i>
              </a>
            </div>
            <div data-v-f0a08906 class="menu flex flex-wrap border-bottom">
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1379/b35f1767604d34.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">领劵中心</span>
                <!---->
              </a>
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1378/b35ef212a7f78a.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">会员俱乐部</span>
                <!---->
              </a>
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1381/b35edebdee2746.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">发票管理</span>
                <!---->
              </a>
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1382/b35e4873e35302.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">保修政策</span>
                <!---->
              </a>
            </div>
          </div>
          <div data-v-f0a08906 class="menu-box">
            <div data-v-f0a08906 class="menu-title flex flex-justify-between flex-align-center">
              <h4 data-v-f0a08906 class="font-16">联系我们</h4>
              <!---->
            </div>
            <div data-v-f0a08906 class="menu flex flex-wrap border-bottom">
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1378/b35ff1ae8633fc.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">我的投诉</span>
                <!---->
              </a>
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1379/b3600553a428f4.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">我的咨询</span>
                <!---->
              </a>
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1379/b3602a8440771d.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">联系客服</span>
                <!---->
              </a>
              <a data-v-f0a08906 href="javascript:;" class="menu-item flex flex-col flex-center">
                <img
                  data-v-1620e4da
                  data-v-f0a08906
                  src="https://img2.ch999img.com/newstatic//1377/b4b3fc2d343e9f.png.webp"
                  width
                  height
                  class="lazy-img"
                >
                <span data-v-f0a08906 class="font-13">帮助中心</span>
                <!---->
              </a>
            </div>
          </div>
        </div>
        <div data-v-e91a6b2c data-v-001aa8d4>
          <div data-v-e91a6b2c style="height: 50px;"></div>
        </div>
        <foot style="position: fixed;bottom: 0;width: 100%;"></foot>
      </div>
    </div>
  </div>
</template>
    
<script>
import "../assets/css/mine.css";
import foot from "../components/footer.vue";
export default {
  components: {
    foot
  },
  data() {
    return {
      log: true,
      user: ""
    };
  },
  methods: {
    routergo(e) {
      // console.log(e.target.innerHTML);
      if (e.target.innerHTML == "登录") {
        this.$router.push({ name: "Login" });
      } else if (e.target.innerHTML == "注册") {
        this.$router.push({ name: "register" });
      }
      // this.$router.push({ name: "Login" });
    },
    gosetting() {
      this.$router.push({ name: "setting" });
    }
  },
  beforeCreate() {
    // console.log(JSON.parse(localStorage.getItem("user")));

    var obj = JSON.parse(localStorage.getItem("user"));
    if (obj) {
      var logintime = obj.logintime;
      // console.log(obj.logintime * 1000 - new Date());
      if (obj.logintime * 1000 - new Date() <= 0) {
        localStorage.removeItem("user");
      } else {
        var params = new URLSearchParams();
        params.append("token", obj.token);
        params.append("username", obj.username);
        this.$axios({
          method: "post",
          url: "http://localhost:5201/checklogin.php",
          data: params
        }).then(res => {
          // console.log(res.data.code);
          if (res.data.code == 1) {
            // this.$router.push({ name: "Mine" });
            this.log = false;
            this.user = res.data.username;
          }
        });
      }
    }
    // else {
    //   this.log = true;
    //   this.user = "";
    // }
  }
};
</script>

<style>
header {
  width: 100%;
  height: 1.173333rem;
}
.white,
a.white {
  color: #fff;
}

.padding-right {
  padding-right: 0.266667rem;
}
.right-side[data-v-35aaf6d2] {
  height: 1.173333rem;
  font-size: 0.373333rem;
  position: absolute;
  right: 0;
  z-index: 2;
  text-decoration: none;
}
a:hover {
  text-decoration: none;
}
.setting {
  line-height: 1.173333rem;
}
.full-height {
  height: 100%;
}
.bg[data-v-001aa8d4] {
  background-size: cover;
  width: 100%;

  height: 2.586667rem;
  position: absolute;
  top: 0;
  left: 0;
  background-repeat: no-repeat;
  background-position: top;
}
</style>
