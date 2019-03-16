<template>
  <div class="container">
    <div data-v-7fe8556b class="login-tab flex flex-center">
      <div data-v-7fe8556b class="main-color">账号密码登录</div>
      <div data-v-7fe8556b style="margin: 0px 20px;">|</div>
      <div data-v-7fe8556b class>短信验证码登录</div>
    </div>
    <mt-field label="手机号" placeholder="请输入手机号" type="tel" v-model="phone" ref="tel"></mt-field>
    <mt-field label="密码" placeholder="请输入密码" type="password" v-model="password" ref="pass"></mt-field>
    <div class="threelogin">
      <span class="mian">3个月内免登录</span>
      <mt-switch v-model="value"></mt-switch>
    </div>

    <mt-button :type="bcolor" size="large" @click.native="aaa">登录</mt-button>

    <div data-v-7fe8556b class="flex flex-justify-between" style="margin: 20px;">
      <a data-v-7fe8556b href="javascript:;" class>新用户注册</a>
      <a data-v-7fe8556b href="javascript:;" class>忘记密码</a>
    </div>

    <div data-v-7fe8556b class="another flex flex-col flex-align-center" style="margin-top: 70px;">
      <span data-v-7fe8556b class="grey-9 font-26">第三方登录</span>
      <div data-v-7fe8556b class="flex" style="margin: 15px;">
        <a
          data-v-7fe8556b
          href="https://graph.qq.com/oauth2.0/authorize?response_type=token&amp;client_id=100302635&amp;redirect_uri=https://m.9ji.com/account/bind%3fredirect=%2Fmember"
        >
          <img
            data-v-7fe8556b
            src="//img2.ch999img.com/m/static/assets/qq.7df9dcd2828ad5eaeee0e76ce8f7d917.png"
            class="third-img"
          >
        </a>
        <!---->
      </div>
    </div>
  </div>
</template>

<script>
import Vue from "vue";
import "mint-ui/lib/style.css";
import { Field, Button, Switch } from "mint-ui";

Vue.component(Switch.name, Switch);
Vue.component(Button.name, Button);
Vue.component(Field.name, Field);

export default {
  data() {
    return {
      bcolor: "default",
      value: false
    };
  },
  methods: {
    aaa() {}
  },
  computed: {
    phone: {
      get() {
        return "";
      },
      set() {
        // console.log(this.$refs.tel.currentValue, this.$refs.pass.currentValue);
        if (this.$refs.tel.currentValue && this.$refs.pass.currentValue) {
          this.bcolor = "danger";
        } else {
          this.bcolor = "default";
        }
      }
    },
    password: {
      get() {
        return "";
      },
      set() {
        // console.log(this.$refs.tel.currentValue, this.$refs.pass.currentValue);
        if (this.$refs.tel.currentValue && this.$refs.pass.currentValue) {
          this.bcolor = "danger";
        } else {
          this.bcolor = "default";
        }
      }
    }
  }
};
</script>

<style >
.login-tab[data-v-7fe8556b] {
  margin: 30px 10px;
  align-items: center;
  display: flex;
  justify-content: center;
}
.mint-switch-input:checked + .mint-switch-core {
  border-color: #58bc58;
  background-color: #58bc58;
}
.threelogin {
  display: flex;
  height: 32px;
}
.mint-switch {
  flex: 1;
  position: relative;
}
.mint-switch-core {
  right: 0;
  top: 0;
  position: absolute;
}
.mian {
  flex: 1;
  line-height: 32px;
}
.flex-justify-between {
  -webkit-justify-content: space-between;
  justify-content: space-between;
}

.flex {
  display: -webkit-flex;
  display: flex;
}
a {
  color: #333;
  text-decoration: none;
  outline: 0;
}
.flex-align-center {
  -webkit-align-items: center;
  align-items: center;
}
.flex-col {
  -webkit-flex-direction: column;
  flex-direction: column;
}
.grey-9,
a.grey-9 {
  color: #9c9c9c;
}
.third-img[data-v-7fe8556b] {
  width: 34px;
  height: 34px;
}
</style>
