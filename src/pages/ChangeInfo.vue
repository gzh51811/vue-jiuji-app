<template>
  <div>
    <div data-v-ac4efcf2 class="wrapper">
      <div data-v-2c18a655 data-v-ac4efcf2 class="flex-child-noshrink">
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
                  @click="goBack"
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
                >个人信息</h1>
              </div>
              <div data-v-2c18a655 class="right-side flex flex-center">
                <!---->
              </div>
              <div data-v-2c18a655 class="absolute full-width" style="top: 100%; z-index: -1;"></div>
            </div>
          </div>
        </header>
      </div>
      <div data-v-ac4efcf2>
        <div data-v-6617a368 data-v-ac4efcf2 class="cell-item-wrapper flex flex-align-center">
          <label data-v-6617a368 class="cell-label" style="width: 2.75rem;">
            <span data-v-6617a368 class="fcell-label-text">会员头像</span>
          </label>
          <div data-v-6617a368 class="flex-child-average cell-content mr-5 text-right">
            <div data-v-ac4efcf2 data-v-6617a368 class="flex flex-align-center flex-justify-end">
              <div data-v-ac4efcf2 data-v-6617a368 class="user-avatar flex flex-center">
                <img
                  data-v-091da819
                  data-v-ac4efcf2
                  src="https://img2.ch999img.com/newstatic/1381/d43534a496b0c8.png.webp"
                  width
                  height
                  class="lazy-img full-width"
                  data-v-6617a368
                >
              </div>
            </div>
          </div>
          <i data-v-6617a368 class="fa fa-angle-right grey-9 font-20 ml-5"></i>
        </div>
        <div data-v-6617a368 data-v-ac4efcf2 class="cell-item-wrapper flex flex-align-center">
          <label data-v-6617a368 class="cell-label" style="width: 2.75rem;">
            <span data-v-6617a368 class="fcell-label-text">昵称</span>
          </label>
          <div data-v-6617a368 class="flex-child-average cell-content mr-5 text-right">
            <span data-v-ac4efcf2 data-v-6617a368></span>
          </div>
          <!---->
          <i data-v-ac4efcf2 data-v-6617a368 class="icon-edit"></i>
        </div>
        <div data-v-6617a368 data-v-ac4efcf2 class="cell-item-wrapper flex flex-align-center">
          <label data-v-6617a368 class="cell-label" style="width: 2.75rem;">
            <span data-v-6617a368 class="fcell-label-text">用户名</span>
          </label>
          <div data-v-6617a368 class="flex-child-average cell-content mr-5 text-right">
            <span data-v-ac4efcf2 data-v-6617a368>{{user}}</span>
          </div>
          <i data-v-6617a368 class="fa fa-angle-right grey-9 font-20 ml-5"></i>
        </div>
        <div data-v-6617a368 data-v-ac4efcf2 class="cell-item-wrapper flex flex-align-center">
          <label data-v-6617a368 class="cell-label" style="width: 2.75rem;">
            <span data-v-6617a368 class="fcell-label-text">电子邮件</span>
          </label>
          <div data-v-6617a368 class="flex-child-average cell-content mr-5 text-right">
            <span data-v-ac4efcf2 data-v-6617a368></span>
          </div>
          <i data-v-6617a368 class="fa fa-angle-right grey-9 font-20 ml-5"></i>
        </div>
        <div data-v-6617a368 data-v-ac4efcf2 class="cell-item-wrapper flex flex-align-center">
          <label data-v-6617a368 class="cell-label" style="width: 2.75rem;">
            <span data-v-6617a368 class="fcell-label-text">手机号码</span>
          </label>
          <div data-v-6617a368 class="flex-child-average cell-content mr-5 text-right">
            <span data-v-ac4efcf2 data-v-6617a368>{{user}}</span>
          </div>
          <i data-v-6617a368 class="fa fa-angle-right grey-9 font-20 ml-5"></i>
        </div>
        <div data-v-6617a368 data-v-ac4efcf2 class="cell-item-wrapper flex flex-align-center">
          <label data-v-6617a368 class="cell-label" style="width: 2.75rem;">
            <span data-v-6617a368 class="fcell-label-text">真实姓名</span>
          </label>
          <div data-v-6617a368 class="flex-child-average cell-content mr-5 text-right">
            <span data-v-ac4efcf2 data-v-6617a368></span>
          </div>
          <!---->
          <i data-v-ac4efcf2 data-v-6617a368 class="icon-edit"></i>
        </div>
        <div data-v-6617a368 data-v-ac4efcf2 class="cell-item-wrapper flex flex-align-center">
          <label data-v-6617a368 class="cell-label" style="width: 2.75rem;">
            <span data-v-6617a368 class="fcell-label-text">性别</span>
          </label>
          <div data-v-6617a368 class="flex-child-average cell-content mr-5 text-right">
            <span data-v-ac4efcf2 data-v-6617a368></span>
          </div>
          <i data-v-6617a368 class="fa fa-angle-right grey-9 font-20 ml-5"></i>
        </div>
        <div data-v-6617a368 data-v-ac4efcf2 class="cell-item-wrapper flex flex-align-center">
          <label data-v-6617a368 class="cell-label" style="width: 2.75rem;">
            <span data-v-6617a368 class="fcell-label-text">生日</span>
          </label>
          <div data-v-6617a368 class="flex-child-average cell-content mr-5 text-right">
            <span data-v-ac4efcf2 data-v-6617a368>未设置</span>
          </div>
          <!---->
        </div>
        <div data-v-6617a368 data-v-ac4efcf2 class="cell-item-wrapper flex flex-align-center">
          <label data-v-6617a368 class="cell-label" style="width: 2.75rem;">
            <span data-v-6617a368 class="fcell-label-text">加单短信验证</span>
          </label>
          <div data-v-6617a368 class="flex-child-average cell-content mr-5 text-right">
            <div data-v-ac4efcf2 data-v-6617a368 class="flex flex-justify-end flex-align-center">
              <label data-v-ac4efcf2 class="mint-switch" data-v-6617a368>
                <input type="checkbox" class="mint-switch-input">
                <span class="mint-switch-core"></span>
                <div class="mint-switch-label"></div>
              </label>
            </div>
          </div>
          <!---->
        </div>
      </div>
      <div
        data-v-ac4efcf2
        class="my-popup-dialog flex flex-col my-popup-bottom my-popup-dialog my-popup-dialog-mpgzd"
        style="z-index: 2; height: auto; display: none;"
      >
        <div
          class="my-popup-header text-center relative flex-child-noshrink border-bottom border-top"
        >
          <div class="my-popup-header-style-one font-18">
            选择性别
            <span class="close-btn absolute flex flex-center">
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAABj0lEQVRoQ+2Z/W3DIBDFucmSbMAI6SRNJ0lHYIOmk1ER1RKKbO7rQeKISPnL5u797gGHMIWd/2jn+sMEeLaD04GXdiDGeAwhHEIIvyml20ix0tybU6gEIKKfRXTO+SOl9D0CIsZ4JqJrlfu0VcAWwIWIPmvBIyAexZf8OeevlNJlrXhiB0Y4sSb+H0DvQBnYCAifTtZc7DZqDaxZK54cLEBvJzziizYRQC8Ir3gVABoCIV4NgIJAiTcBeCGQ4s0AVgi0eBeAFqKHeDeAFKKXeAgAB3FPUh3M0EcScR/gOutWldfGIQ+FMICWEz1PtFAADgJZ+aUoE6CeHpJ1gHYB5oBEPHoHmtso1wOWS4CXbWQaYZp3uZ5TPzevAYsgyxgOxgTgEeIZuwajBkAIQMQwNTJkYlQssQOohJLGp2l2IoAe4hcQb2wWwJuA20WkvWQrThNghHivE+97uRtjfK/rdc3OIJn3rXcep27O2Xy9Xj4xlf/tSZ+Y2NzsLuStZu/xE6B3hbn40wGuQr2f796BP6+T/EBSX2mgAAAAAElFTkSuQmCC"
                alt
              >
            </span>
          </div>
          <div class="my-popup-header-style-two overflow-hide" style="display: none;">
            <span class="left grey-6">取消</span>
            <span class="right">确定</span>
          </div>
        </div>
        <div class="my-popup-content flex-child-grow relative" style="max-height: 100%;">
          <div data-v-ac4efcf2 class="sex-wrap">
            <div data-v-ac4efcf2 class="flex flex-align-center sex-item">
              <span
                data-v-654a1426
                data-v-ac4efcf2
                class="checkbox"
                style="border-color: rgb(204, 204, 204);"
              ></span>
              <span data-v-ac4efcf2 class="margin-left">男性</span>
            </div>
            <div data-v-ac4efcf2 class="flex flex-align-center sex-item">
              <span
                data-v-654a1426
                data-v-ac4efcf2
                class="checkbox"
                style="border-color: rgb(204, 204, 204);"
              ></span>
              <span data-v-ac4efcf2 class="margin-left">女性</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import "../assets/css/changeInfo.css";
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
    goBack() {
      history.go(-1);
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
