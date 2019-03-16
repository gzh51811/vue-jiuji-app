<template>
  <div class="container">
    <mt-field label="用户名" placeholder="请输入用户名" v-model="username" ref="tel"></mt-field>
    <mt-field
      label="密码"
      placeholder="请输入密码"
      type="password"
      v-model="password"
      ref="pass"
      @change.native="checkpsw"
    ></mt-field>

    <mt-field
      label="确认密码"
      placeholder="请再次确认密码"
      type="password"
      v-model="comfirmpsw"
      ref="cpass"
      @change.native="checkpsw"
    ></mt-field>

    <mt-field label="验证码" v-model="captcha">
      <img src="../assets/img/wo.png" height="45px" width="100px">
    </mt-field>
    <mt-button :type="bcolor" size="large" @click.native="aaa">注册</mt-button>
  </div>
</template>



<script type="text/javascript">
import Vue from "vue";
import "mint-ui/lib/style.css";
// import { Script } from "vm";
import { Field, Button, Switch, Toast } from "mint-ui";
Vue.component(Button.name, Button);
Vue.component(Field.name, Field);
Vue.component(Switch.name, Switch);
export default {
  data() {
    return {
      captcha: "",
      bcolor: "default"
    };
  },
  methods: {
    aaa() {},
    checkpsw() {
      //   console.log(this.$refs.pass.currentValue, this.$refs.cpass.currentValue);
      if (this.$refs.pass.currentValue && this.$refs.cpass.currentValue) {
        if (this.$refs.pass.currentValue != this.$refs.cpass.currentValue) {
          Toast("密码不一致");
        }
      }
    }
  },
  computed: {
    username: {
      get() {
        return "";
      },
      set() {
        // console.log(this.$refs.tel.currentValue, this.$refs.pass.currentValue);
        if (
          this.$refs.tel.currentValue &&
          this.$refs.pass.currentValue &&
          this.$refs.cpass.currentValue
        ) {
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
        if (
          this.$refs.tel.currentValue &&
          this.$refs.pass.currentValue &&
          this.$refs.cpass.currentValue
        ) {
          if (this.$refs.pass.currentValue == this.$refs.cpass.currentValue) {
            this.bcolor = "danger";
          } else {
            this.bcolor = "default";
          }
        } else {
          this.bcolor = "default";
        }
      }
    },
    comfirmpsw: {
      get() {
        return "";
      },
      set() {
        // console.log(this.$refs.tel.currentValue, this.$refs.pass.currentValue);
        if (
          this.$refs.tel.currentValue &&
          this.$refs.pass.currentValue &&
          this.$refs.cpass.currentValue
        ) {
          if (this.$refs.pass.currentValue == this.$refs.cpass.currentValue) {
            this.bcolor = "danger";
          } else {
            this.bcolor = "default";
          }
        } else {
          this.bcolor = "default";
        }
      }
    }
  }
};
</script>


<style>
</style>
