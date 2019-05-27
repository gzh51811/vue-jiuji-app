<template>
  <div>
    <div data-v-a9173dba class="wrapper">
      <div data-v-2c18a655 data-v-a9173dba class="flex-child-noshrink">
        <!---->
        <header data-v-2c18a655 class="header">
          <div data-v-2c18a655 class="wrapper">
            <!---->
            <div
              data-v-2c18a655
              class="main flex flex-justify-between relative"
              style="background-color: rgb(255, 255, 255);"
            >
              <div data-v-2c18a655 class="left-side">
                <a
                  data-v-2c18a655
                  href="javascript:;"
                  class="back-button flex flex-center"
                  style="color: rgb(51, 51, 51); padding-left: 0px;"
                  @click="goback"
                >
                  <i data-v-2c18a655 class="fa fa-angle-left font-30"></i>
                  <span data-v-2c18a655 class="back-text font-16"></span>
                </a>
              </div>
              <div data-v-2c18a655 class="title flex flex-center" style="left: 44px; right: 44px;">
                <h1
                  data-v-2c18a655
                  class="lines-1 font-17 normal"
                  style="color: rgb(51, 51, 51);"
                >账户设置</h1>
              </div>
              <div data-v-2c18a655 class="right-side flex flex-center">
                <a
                  data-v-2c18a655
                  href="javascript:;"
                  class="menu-btn flex flex-center grey-6"
                  style="color: rgb(51, 51, 51);"
                >
                  <i data-v-2c18a655 class="fa fa-ellipsis-h font-24"></i>
                </a>
              </div>
              <div data-v-2c18a655 class="absolute full-width" style="top: 100%; z-index: -1;"></div>
            </div>
          </div>
        </header>
      </div>
      <div data-v-a9173dba class="card-item">
        <a
          data-v-a9173dba
          href="javascript:;"
          class="member-info flex flex-align-center flex-justify-between"
        >
          <div data-v-a9173dba class="flex flex-align-center">
            <img
              data-v-091da819
              data-v-a9173dba
              :src="this.iconUrl"
              width
              height
              class="lazy-img avatar flex-child-noshrink"
              @click="goToChange"
            >

            <div data-v-001aa8d4 class="no-login" @click.capture="routergo" v-show="log">
              <a data-v-001aa8d4 href="javascript:;" class>登录</a>
              <span data-v-001aa8d4>|</span>
              <a data-v-001aa8d4 href="javascript:;" class>注册</a>
            </div>

            <div data-v-a9173dba class="flex flex-col flex-justify" v-show="!log">
              <h4 data-v-a9173dba class="font-18 lines-1">{{user}}</h4>
              <div data-v-a9173dba class="flex margin-top">
                <div data-v-a9173dba class="flex flex-center">
                  <img
                    data-v-091da819
                    data-v-a9173dba
                    src="https://img2.ch999img.com/newstatic//916/76b7bebb5d76d8.png.webp"
                    width
                    height
                    class="lazy-img level-icon"
                  >
                </div>
                <div data-v-a9173dba class="flex flex-center margin-left">
                  <img
                    data-v-091da819
                    data-v-a9173dba
                    src="https://img2.ch999img.com/newstatic//912/4448465aaa206c.png.webp"
                    width
                    height
                    class="lazy-img other-icon"
                  >
                  <span data-v-a9173dba class="font-13 black">未绑定</span>
                </div>
              </div>
            </div>
          </div>
          <i data-v-a9173dba class="fa fa-angle-right grey-9 font-20"></i>
        </a>
        <!---->
        <a
          data-v-a9173dba
          href="javascript:;"
          class="item flex flex-justify-between flex-align-center"
        >
          <span data-v-a9173dba class="font-16">收货地址管理</span>
          <i data-v-a9173dba class="fa fa-angle-right grey-9 font-20"></i>
        </a>
      </div>
      <div data-v-a9173dba>
        <h4 data-v-a9173dba class="item-title">账户管理</h4>
        <div data-v-a9173dba class="card-item">
          <a
            data-v-a9173dba
            href="javascript:;"
            class="item flex flex-justify-between flex-align-center border-bottom"
          >
            <span data-v-a9173dba class="font-16">账号绑定</span>
            <div data-v-a9173dba class="flex flex-center">
              <span data-v-a9173dba class="main-color">
                <!---->
              </span>
              <i data-v-a9173dba class="fa fa-angle-right grey-9 font-20"></i>
            </div>
          </a>
          <a
            data-v-a9173dba
            href="javascript:;"
            class="item flex flex-justify-between flex-align-center border-bottom"
          >
            <span data-v-a9173dba class="font-16">登录密码</span>
            <div data-v-a9173dba class="flex flex-center">
              <span data-v-a9173dba class="main-color">
                <!---->
              </span>
              <i data-v-a9173dba class="fa fa-angle-right grey-9 font-20"></i>
            </div>
          </a>
          <a
            data-v-a9173dba
            href="javascript:;"
            class="item flex flex-justify-between flex-align-center border-bottom"
          >
            <span data-v-a9173dba class="font-16">支付密码</span>
            <div data-v-a9173dba class="flex flex-center">
              <span data-v-a9173dba class="main-color">
                <!---->
              </span>
              <i data-v-a9173dba class="fa fa-angle-right grey-9 font-20"></i>
            </div>
          </a>
          <a
            data-v-a9173dba
            href="javascript:;"
            class="item flex flex-justify-between flex-align-center border-bottom"
          >
            <span data-v-a9173dba class="font-16">我的特权</span>
            <div data-v-a9173dba class="flex flex-center">
              <span data-v-a9173dba class="main-color">
                <!---->
              </span>
              <i data-v-a9173dba class="fa fa-angle-right grey-9 font-20"></i>
            </div>
          </a>
        </div>
      </div>
      <div data-v-a9173dba>
        <h4 data-v-a9173dba class="item-title">系统设置</h4>
        <div data-v-a9173dba class="card-item">
          <a
            data-v-a9173dba
            href="javascript:;"
            class="item flex flex-justify-between flex-align-center border-bottom"
          >
            <span data-v-a9173dba class="font-16">人脸识别</span>
            <div data-v-a9173dba class="flex flex-center">
              <span data-v-a9173dba class="main-color">
                <!---->
              </span>
              <i data-v-a9173dba class="fa fa-angle-right grey-9 font-20"></i>
            </div>
          </a>
        </div>
      </div>
      <div data-v-a9173dba>
        <h4 data-v-a9173dba class="item-title">关于九机</h4>
        <div data-v-a9173dba class="card-item">
          <a
            data-v-a9173dba
            href="javascript:;"
            class="item flex flex-justify-between flex-align-center border-bottom"
          >
            <span data-v-a9173dba class="font-16">隐私协议</span>
            <div data-v-a9173dba class="flex flex-center">
              <span data-v-a9173dba class="main-color">
                <!---->
              </span>
              <i data-v-a9173dba class="fa fa-angle-right grey-9 font-20"></i>
            </div>
          </a>
          <a
            data-v-a9173dba
            href="javascript:;"
            class="item flex flex-justify-between flex-align-center border-bottom"
          >
            <span data-v-a9173dba class="font-16">意见反馈</span>
            <div data-v-a9173dba class="flex flex-center">
              <span data-v-a9173dba class="main-color">
                <!---->
              </span>
              <i data-v-a9173dba class="fa fa-angle-right grey-9 font-20"></i>
            </div>
          </a>
          <a
            data-v-a9173dba
            href="javascript:;"
            class="item flex flex-justify-between flex-align-center border-bottom"
          >
            <span data-v-a9173dba class="font-16">关于我们</span>
            <div data-v-a9173dba class="flex flex-center">
              <span data-v-a9173dba class="main-color">
                <!---->
              </span>
              <i data-v-a9173dba class="fa fa-angle-right grey-9 font-20"></i>
            </div>
          </a>
          <a
            data-v-a9173dba
            href="javascript:;"
            class="item flex flex-justify-between flex-align-center border-bottom"
          >
            <span data-v-a9173dba class="font-16">下载APP</span>
            <div data-v-a9173dba class="flex flex-center">
              <span data-v-a9173dba class="main-color">
                <!---->
              </span>
              <i data-v-a9173dba class="fa fa-angle-right grey-9 font-20"></i>
            </div>
          </a>
          <a
            data-v-a9173dba
            href="javascript:;"
            class="item flex flex-justify-between flex-align-center border-bottom"
          >
            <span data-v-a9173dba class="font-16">全国服务热线</span>
            <div data-v-a9173dba class="flex flex-center">
              <span data-v-a9173dba class="main-color">
                <i data-v-a9173dba class="fa fa-volume-control-phone"></i> 400-008-3939
              </span>
              <!---->
            </div>
          </a>
        </div>
      </div>
      <a
        data-v-a9173dba
        href="javascript:"
        class="logout main-bgcolor font-16"
        @click="logOut"
        v-show="!log"
      >退出登录</a>
    </div>
  </div>
</template>

<script>
import "../assets/css/info.css";
import goodshead from "./goodshead.vue";
// import setting from "../components/setting.vue";
export default {
  components: {
    goodshead
  },
  data() {
    return {
      log: true,
      user: "",
      iconUrl: "https://img2.ch999img.com//images/usericon.png.webp"
    };
  },
  methods: {
    goback() {
      history.go(-1);
    },
    goToChange() {
      this.$router.push({ name: "ChangeInfo" });
    },
    routergo(e) {
      // console.log(e.target.innerHTML);
      if (e.target.innerHTML == "登录") {
        this.$router.push({ name: "Login" });
      } else if (e.target.innerHTML == "注册") {
        this.$router.push({ name: "register" });
      }
      // this.$router.push({ name: "Login" });
    },
    logOut() {
      localStorage.removeItem("user");
      this.user = "";
      this.$router.push({ name: "Mine" });
    }
  },
  mounted() {
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
          if (res.data.code == 1) {
            this.log = false;
            this.user = res.data.username;
          }
          if (!this.log) {
            this.iconUrl =
              "https://img2.ch999img.com/newstatic/1381/d43534a496b0c8.png.webp";
          } else {
            this.iconUrl =
              "https://img2.ch999img.com//images/usericon.png.webp";
          }
        });
      }
    }
  }
};
</script>

<style>
</style>
