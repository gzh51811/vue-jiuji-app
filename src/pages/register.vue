<template>
  <div class="container">
    <goodshead></goodshead>
    <mt-field
      label="用户名"
      placeholder="请输入用户名"
      v-model="username"
      ref="tel"
      @change.native="checkuser"
    ></mt-field>

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

    <mt-field label="验证码" v-model="newyzm">
      <span
        style="width:70px;height:25px;line-height:25px;display:block;background-color:orange;font-size:20px;color:blue;font-weight:bolder;text-align:center;"
        @click="randomyzm"
      >{{yzm}}</span>
    </mt-field>
    <mt-button :type="bcolor" size="large" @click.native="reg" class="regbtn">注册</mt-button>
  </div>
</template>



<script type="text/javascript">
import "../assets/css/index.css";
import goodshead from "./goodshead.vue";
import Vue from "vue";
import "mint-ui/lib/style.css";
// import { Script } from "vm";
import { Field, Button, Switch, Toast } from "mint-ui";
Vue.component(Button.name, Button);
Vue.component(Field.name, Field);
Vue.component(Switch.name, Switch);
export default {
  components: {
    goodshead
  },
  data() {
    return {
      captcha: "",
      bcolor: "default",
      yzm: "",
      newyzm: ""
    };
  },
  methods: {
    reg() {
      // e.target.focus()
      if (this.$refs.pass.currentValue && this.$refs.cpass.currentValue) {
        if (this.newyzm.toLowerCase() == this.yzm.toLowerCase()) {
          let telnum = this.$refs.tel.currentValue;
          let psw = this.$refs.pass.currentValue;

          var params = new URLSearchParams();
          params.append("username", telnum); //你要传给后台的参数值 key/value
          params.append("psw", psw);
          params.append("what", 1);
          this.$axios({
            method: "post",
            url: "http://localhost:5201/register.php",
            data: params
          }).then(res => {
            // console.log(res);
            if (res.data.code == 0) {
              this.$refs.pass.currentValue = "";
              this.$refs.cpass.currentValue = "";
            } else if (res.data.code == 1) {
              this.$router.push({ name: "Mine" });
            }
          });
        } else {
          Toast("验证码错误");
        }
      } else {
        Toast("不能为空");
      }
    },
    checkuser() {
      let telnum = this.$refs.tel.currentValue;

      var params = new URLSearchParams();
      params.append("username", telnum); //你要传给后台的参数值 key/value
      params.append("what", 0);
      this.$axios({
        method: "post",
        url: "http://localhost:5201/register.php",
        data: params
      }).then(res => {
        // console.log(res);
      });
    },
    checkpsw() {
      //   console.log(this.$refs.pass.currentValue, this.$refs.cpass.currentValue);
      if (this.$refs.pass.currentValue && this.$refs.cpass.currentValue) {
        if (this.$refs.pass.currentValue != this.$refs.cpass.currentValue) {
          Toast("密码不一致");
        } else {
          this.pswok = true;
        }
      }
    },
    randomyzm() {
      var res = "";
      var str =
        "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
      for (var i = 0; i < 4; i++) {
        res += str[Math.floor(Math.random() * 62)];
      }
      this.yzm = res;
    }
  },
  beforeMount() {
    var res = "";
    var str = "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    for (var i = 0; i < 4; i++) {
      res += str[Math.floor(Math.random() * 62)];
    }
    this.yzm = res;
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
.regbtn {
  width: 94%;
  margin-left: 3%;
  margin-top: 20px;
}
</style>
