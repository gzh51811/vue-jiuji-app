<template>
  <div class="goodlist">
    <mt-spinner type="fading-circle" color="#26a2ff" :size="60" class="ins" :class="{inss:aaa}"></mt-spinner>
    <div data-v-42930b63 class="list style-0" v-if="hackReset" :class="{inss:!aaa}">
      <a
        data-v-42930b63
        href="javasrcipt:;"
        class="list-item"
        v-for="(item,idx) in goodschange"
        :key="idx"
        @click="goto(item.cid)"
      >
        <div data-v-42930b63 class="item-left">
          <img
            v-lazy="item.imagePath"
            data-v-1620e4da
            data-v-42930b63
            width
            height
            class="lazy-img product-img"
          >
          <!---->
          <!---->
        </div>
        <div data-v-42930b63 class="item-right">
          <div data-v-42930b63 class="flex flex-align-center mt-5">
            <!---->
            <p data-v-42930b63 class="lines-2 bold product-name">{{item.productName}}</p>
          </div>
          <div data-v-42930b63 class="product-tag mt-5">
            <ul data-v-42930b63 class="tag-list">
              <li data-v-42930b63 class="tag-item">A11仿生</li>
              <li data-v-42930b63 class="tag-item">IP67防水</li>
              <li data-v-42930b63 class="tag-item">5.8英寸</li>
              <li data-v-42930b63 class="tag-item">OLED屏幕</li>
            </ul>
          </div>
          <div data-v-42930b63 class="flex flex-align-center mt-5 font-16">
            <b data-v-42930b63 class="red bold">
              <span data-v-42930b63 class="font-12">￥</span>
              {{item.price}}
            </b>
            <!---->
            <!---->
          </div>
          <div data-v-42930b63 class="product-stage flex mt-5 flex-align-center">
            <span data-v-42930b63 class="tag-text">分期</span>
            <span
              data-v-42930b63
              class="grey-9 font-12 instalment"
            >低至￥{{Math.floor((item.price*1.2)/12)}} × 12期</span>
          </div>
          <div data-v-42930b63 class="mt-5 grey-9 font-12">
            <span data-v-42930b63>25024人评价</span>
            <!---->
            <span data-v-42930b63 class="ml-5">好评率99%</span>
          </div>
          <a data-v-42930b63 href="javascript:;" class="mt-5 font-12">
            <span data-v-42930b63 class="mr-5 bold">手机单品当日销量第{{item.cid}}名</span>
            <i data-v-42930b63 aria-hidden="true" class="font-14 fa fa-angle-right grey-9"></i>
          </a>
          <div data-v-42930b63 class="link-box mt-5">
            <a data-v-42930b63 href="javascript:;" class="tag-link lines-1">一手优品 ￥{{item.price*0.9}}</a>
            <a
              data-v-42930b63
              href="javascript:;"
              class="tag-link lines-1"
            >二手良品 ￥{{item.price*0.75}}</a>
          </div>
        </div>
      </a>
    </div>
  </div>
</template>

<script>
import Vue from "vue";
import "mint-ui/lib/style.css";
import { Lazyload } from "mint-ui";
import axios from "axios";
import { Spinner } from "mint-ui";
import { timeout } from "q";
Vue.component(Spinner.name, Spinner);
Vue.use(Lazyload);
export default {
  props: ["goodschange"],
  data() {
    return {
      hackReset: true,
      aaa: true
    };
  },
  methods: {
    goto(cid) {
      this.$router.push({ path: "goods/" + cid });
    }
  },
  created() {
    var { id } = this.$route.params;
    this.$axios
      .get("http://localhost:5201/goodslist.php", {
        params: {
          id,
          status: "initialize"
        }
      })
      .then(res => {
        this.$emit("update:goodschange", res.data);
      });
  },
  watch: {
    goodschange: {
      handler(newValue, oldValue) {
        for (let i = 0; i < newValue.length; i++) {
          if (oldValue[i] != newValue[i]) {
            this.aaa = false;
            this.hackReset = false;
            this.$nextTick(() => {
              this.hackReset = true;
            });
            setTimeout(() => {
              this.aaa = true;
            }, 1500);
            break;
          }
        }
      },
      deep: true
    }
  }
};
</script>

<style scoped>
image[lazy="loading"] {
  width: 100px;
  height: 100px;
}
.isFixed {
  position: fixed;
  background-color: #fff;
  top: 0;
  z-index: 999;
}
.ins {
  position: relative;
  display: block;
  margin-top: 100px;
  top: 50%;
  left: 50%;
  transform: translate(-30px, -30px);
}
.inss {
  display: none;
}
</style>
