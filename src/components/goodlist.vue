<template>
  <div class="goodlist">
    <div data-v-42930b63 class="list style-0">
      <a
        data-v-42930b63
        href="/product/58206.html"
        class="list-item"
        v-for="(item,idx) in goods"
        :key="idx"
      >
        <div data-v-42930b63 class="item-left">
          <img
            v-lazy="item.imgpath"
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
            <p data-v-42930b63 class="lines-2 bold product-name">{{item.text}}</p>
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
            <span data-v-42930b63 class="grey-9 font-12 instalment">低至￥{{(item.price*1.3)/12}} × 12期</span>
          </div>
          <div data-v-42930b63 class="mt-5 grey-9 font-12">
            <span data-v-42930b63>25024人评价</span>
            <!---->
            <span data-v-42930b63 class="ml-5">好评率99%</span>
          </div>
          <a data-v-42930b63 href="javascript:;" class="mt-5 font-12">
            <span data-v-42930b63 class="mr-5 bold">手机单品当日销量第{{item.di}}名</span>
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
Vue.use(Lazyload);
export default {
  data() {
    return {
      goods: [
        {
          text: "Apple iPhone X 全网通版 银色 64GB",
          price: "6099.00",
          imgpath:
            "https://img2.ch999img.com/pic/product/440x440/20180802145109436.jpg.webp",
          di: 1
        },
        {
          text: "Apple iPhone X 全网通版 银色 64GB",
          price: "6099.00",
          imgpath:
            "https://img2.ch999img.com/pic/product/440x440/20180913062828409.jpg.webp",
          di: 1
        },
        {
          text: "Apple iPhone X 全网通版 银色 64GB",
          price: "6099.00",
          imgpath:
            "https://img2.ch999img.com/pic/product/440x440/20180802145109436.jpg.webp",
          di: 1
        },
        {
          text: "Apple iPhone X 全网通版 银色 64GB",
          price: "6099.00",
          imgpath:
            "https://img2.ch999img.com/pic/product/440x440/20190212085714842.jpg.webp",
          di: 1
        },
        {
          text: "Apple iPhone X 全网通版 银色 64GB",
          price: "6099.00",
          imgpath:
            "https://img2.ch999img.com/pic/product/440x440/20170421142559575.jpg.webp",
          di: 1
        },
        {
          text: "Apple iPhone X 全网通版 银色 64GB",
          price: "6099.00",
          imgpath:
            "https://img2.ch999img.com/pic/product/440x440/20180402163209165.jpg.webp",
          di: 1
        },
        {
          text: "Apple iPhone X 全网通版 银色 64GB",
          price: "6099.00",
          imgpath:
            "https://img2.ch999img.com/pic/product/440x440/20180802145109436.jpg.webp",
          di: 1
        },
        {
          text: "Apple iPhone X 全网通版 银色 64GB",
          price: "6099.00",
          imgpath:
            "https://img2.ch999img.com/pic/product/440x440/20170421144118359.jpg.webp",
          di: 1
        }
      ]
    };
  },
  methods: {
    change(e) {
      e.target.style.color = "red";
    }
  }
};
</script>

<style scoped>
image[lazy="loading"] {
  width: 100px;
  height: 100px;
}
</style>
