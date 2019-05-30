<template>
  <div data-v-cce66a92 class="touch-wrap">
    <div data-v-cce66a92 class="dialog-mask" style="z-index: 20;"></div>
    <div
      data-v-cce66a92
      class="popup-layer-wrapper popup-layer relative"
      style="z-index: 20;height: 575px;  transition: all 300ms ease 0s; transform: translate3d(0px, 0px, 0px);"
    >
      <div data-v-cce66a92 class="popup-header">
        <!-- @click="show"  -->
        <a data-v-4849158c href="javascript:;" class="btn-popup-close fa fa-times" @click="kaiguan"></a>
        <div data-v-4849158c class="buy-product-header border-bottom">
          <p data-v-4849158c class="buy-product-price red">{{price}}.00</p>
          <p data-v-4849158c class="grey-9 font-12">商品编号：68436</p>
          <p
            data-v-4849158c
            class="grey-6 font-12"
            style="line-height: 1.33; text-align: justify; margin-top: 5px;"
          >已选：{{color}} {{size}}</p>
          <div data-v-4849158c class="buy-img-box pointer white-bg">
            <img
              data-v-1620e4da
              data-v-4849158c
              :src="mylist[currentcolor]&&mylist[currentcolor].imagePath"
              width
              height
              class="lazy-img"
            >
          </div>
        </div>
      </div>
      <div data-v-cce66a92 style="height: 470px; padding-bottom: 40px;">
        <div
          data-v-cce66a92
          class="popup-scroller buy-product-content"
          style="height: 470px; overscroll-behavior: contain contain;"
        >
          <div data-v-4849158c class="buy-product-module">
            <div data-v-4849158c class="buy-module-title">
              <span data-v-4849158c class="sku-title">颜色</span>
            </div>
            <div data-v-4849158c class="buy-module-content flex flex-wrap">
              <div
                data-v-4849158c
                class="svg-btn"
                v-for="(item,idx) in mylist"
                :key="idx"
                @click.stop="mycolor(idx)"
              >
                <a
                  data-v-4849158c
                  :class="{active:currentcolor==idx}"
                  href="javascript:"
                  class="btn-buy btn-small"
                >{{item.value}}</a>
              </div>
            </div>
          </div>
          <div data-v-4849158c class="buy-product-module">
            <div data-v-4849158c class="buy-module-title">
              <span data-v-4849158c class="sku-title">容量</span>
            </div>
            <div data-v-4849158c class="buy-module-content flex flex-wrap">
              <div
                data-v-4849158c
                class="svg-btn"
                v-for="(item,idx) in mysize"
                :key="idx"
                @click.stop="thissize(idx)"
              >
                <a
                  data-v-4849158c
                  :class="{active:currentsize==idx}"
                  href="javascript:"
                  class="btn-buy btn-small"
                >{{item.value}}</a>
              </div>
            </div>
          </div>
          <div data-v-4849158c class="buy-product-module">
            <div data-v-4849158c class="buy-module-title">
              <span data-v-4849158c class="sku-title">版本</span>
            </div>
            <div data-v-4849158c class="buy-module-content flex flex-wrap">
              <a
                data-v-4849158c
                href="javascript:;"
                v-for="(item,idx) in relation"
                :key="idx"
                @click.stop="myrelation(idx)"
                :class="{active:currentrelation==idx}"
                class="btn-buy btn-avge2"
              >{{item.value}}</a>
              <!-- <a data-v-4849158c="" href="javascript:;" class="btn-buy btn-avge2">iPhone XS Max</a>
                            <a data-v-4849158c="" href="javascript:;" class="btn-buy btn-avge2 active">iPhone XR</a>
              <a data-v-4849158c="" href="javascript:;" class="btn-buy btn-avge2">iPhone X</a>-->
            </div>
          </div>
          <div data-v-4849158c class="buy-product-module">
            <div data-v-4849158c class="buy-module-title">
              <span data-v-4849158c class="sku-title">套餐</span>
            </div>
            <div data-v-4849158c class="buy-module-content flex flex-wrap">
              <a data-v-4849158c href="javascript:;" class="btn-buy btn-avge2 active">官方标配</a>
              <a data-v-4849158c href="javascript:;" class="btn-buy btn-avge2">推荐套餐</a>
              <a data-v-4849158c href="javascript:;" class="btn-buy btn-avge2">原装快充套装</a>
              <a data-v-4849158c href="javascript:;" class="btn-buy btn-avge2">品牌快充套装</a>
              <a data-v-4849158c href="javascript:;" class="btn-buy btn-avge2">智能音响套餐</a>
            </div>
          </div>
          <div data-v-4849158c class="buy-product-module">
            <div data-v-4849158c class="buy-module-title border-top">
              <span data-v-4849158c class="sku-title">门店库存</span>
            </div>
            <div data-v-4849158c class="buy-module-content flex flex-wrap">
              <a data-v-4849158c href="javascript:;" class="btn-buy btn-avge2">
                花都区
                <span data-v-4849158c class="ml-5" style="color: rgb(242, 28, 28);">充足</span>
              </a>
            </div>
          </div>
          <div data-v-4849158c class="buy-product-main-title border-top flex flex-justify-between">
            <span data-v-4849158c>九机服务</span>
            <a data-v-4849158c href="https://m.9ji.com/event/736.html" class="font-12">服务介绍</a>
          </div>
          <div data-v-4849158c class="buy-product-module">
            <div
              data-v-4849158c
              class="buy-module-title ellipsis grey-9"
              style="margin-right: 20px;"
            >
              <img
                data-v-4849158c
                src="https://img2.ch999img.com/newstatic/766/37d4d0a0cdfe72.png"
                class="service-icon"
              >
              <span data-v-4849158c class="black">电池保</span>
            </div>
            <div data-v-4849158c class="buy-module-content flex flex-wrap">
              <a
                data-v-4849158c
                href="javascript:;"
                class="btn-buy btn-avge2 lines-1"
                style="padding: 0px;"
              >电池保 2年 ¥109</a>
            </div>
          </div>
          <div data-v-4849158c class="buy-product-module">
            <div
              data-v-4849158c
              class="buy-module-title ellipsis grey-9"
              style="margin-right: 20px;"
            >
              <img
                data-v-4849158c
                src="https://img2.ch999img.com/newstatic/771/37d4d40bebb64c.png"
                class="service-icon"
              >
              <span data-v-4849158c class="black">碎屏保</span>
            </div>
            <div data-v-4849158c class="buy-module-content flex flex-wrap">
              <a
                data-v-4849158c
                href="javascript:;"
                class="btn-buy btn-avge2 lines-1"
                style="padding: 0px;"
              >碎屏保 1年 ¥299</a>
              <a
                data-v-4849158c
                href="javascript:;"
                class="btn-buy btn-avge2 lines-1"
                style="padding: 0px;"
              >碎屏保 2年 ¥479</a>
            </div>
          </div>
          <div data-v-4849158c class="buy-product-module">
            <div
              data-v-4849158c
              class="buy-module-title ellipsis grey-9"
              style="margin-right: 20px;"
            >
              <img
                data-v-4849158c
                src="https://img2.ch999img.com/newstatic/770/37d4d10f78b054.png"
                class="service-icon"
              >
              <span data-v-4849158c class="black">屏背保服务</span>
            </div>
            <div data-v-4849158c class="buy-module-content flex flex-wrap">
              <a
                data-v-4849158c
                href="javascript:;"
                class="btn-buy btn-avge2 lines-1"
                style="padding: 0px;"
              >屏背保服务 1年 ¥369</a>
              <a
                data-v-4849158c
                href="javascript:;"
                class="btn-buy btn-avge2 lines-1"
                style="padding: 0px;"
              >屏背保服务 2年 ¥579</a>
            </div>
          </div>
          <div data-v-4849158c class="buy-product-module">
            <div
              data-v-4849158c
              class="buy-module-title ellipsis grey-9"
              style="margin-right: 20px;"
            >
              <img
                data-v-4849158c
                src="https://img2.ch999img.com/newstatic/770/37d4d5e4d01efc.png"
                class="service-icon"
              >
              <span data-v-4849158c class="black">延长保</span>
            </div>
            <div data-v-4849158c class="buy-module-content flex flex-wrap">
              <a
                data-v-4849158c
                href="javascript:;"
                class="btn-buy btn-avge2 lines-1"
                style="padding: 0px;"
              >延长保 1年 ¥99</a>
              <a
                data-v-4849158c
                href="javascript:;"
                class="btn-buy btn-avge2 lines-1"
                style="padding: 0px;"
              >延长保 2年 ¥149</a>
            </div>
          </div>
          <div data-v-4849158c class="buy-product-module">
            <div
              data-v-4849158c
              class="buy-module-title ellipsis grey-9"
              style="margin-right: 20px;"
            >
              <img
                data-v-4849158c
                src="https://img2.ch999img.com/newstatic/771/37d4d7704d69ce.png"
                class="service-icon"
              >
              <span data-v-4849158c class="black">意外保</span>
            </div>
            <div data-v-4849158c class="buy-module-content flex flex-wrap">
              <a
                data-v-4849158c
                href="javascript:;"
                class="btn-buy btn-avge2 lines-1"
                style="padding: 0px;"
              >意外保 1年 ¥409</a>
              <a
                data-v-4849158c
                href="javascript:;"
                class="btn-buy btn-avge2 lines-1"
                style="padding: 0px;"
              >意外保 2年 ¥639</a>
            </div>
          </div>
          <div
            data-v-4849158c
            class="buy-module-count flex flex-justify-between flex-align-center border-top border-bottom"
          >
            <div data-v-4849158c>
              数量
              <span data-v-4849158c class="red font-12 ml-5">限购3件</span>
            </div>
            <div data-v-4849158c class="buy-module-content flex flex-wrap">
              <a
                data-v-4849158c
                href="javascript:;"
                class="btn-tiny btn-minus disable"
                @click="reduceNum"
              >
                <i data-v-4849158c aria-hidden="true" class="fa fa-minus"></i>
              </a>
              <span data-v-4849158c class="product-number">{{g_qty}}</span>
              <a data-v-4849158c href="javascript:;" class="btn-tiny btn-plus" @click="addNum">
                <i data-v-4849158c aria-hidden="true" class="fa fa-plus"></i>
              </a>
            </div>
          </div>
          <div data-v-4849158c class="buy-product-module">
            <div data-v-4849158c class="buy-module-title">配置</div>
            <div data-v-4849158c class="buy-module-content mt-5">
              <span data-v-4849158c class="buy-content-text">充电器x1，数据线x1，耳机x1（内置2942mAh电池）</span>
            </div>
          </div>
        </div>
      </div>
      <div data-v-cce66a92 class="popup-btns-row" style="height: 40px;">
        <div data-v-4849158c>
          <div data-v-4849158c class="popup-btns-row">
            <a data-v-4849158c href="javascript:;" @click="addCar">加入购物车</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      currentcolor: 1,
      currentsize: 0,
      currentrelation: 2,
      price: 5199.0,
      g_qty: this.gqty
    };
  },
  props: [
    "datalist",
    "mylist",
    "mysize",
    "change",
    "color",
    "size",
    "relation",
    "gqty"
  ],
  methods: {
    thissize(idx) {
      this.currentsize = idx;
      this.selectprice();
      this.$emit("update:size", this.mysize[idx].value);
    },
    mycolor(idx) {
      this.currentcolor = idx;
      this.selectprice();
      this.$emit("update:color", this.mylist[idx].value);
    },
    myrelation(idx) {
      this.currentrelation = idx;
    },
    kaiguan() {
      this.$emit("update:change", !this.change);
    },
    selectprice() {
      switch (this.currentcolor) {
        case 0:
          if (this.currentsize == 0) {
            this.price = 5199.0;
          } else if (this.currentsize == 1) {
            this.price = 5599.0;
          } else if (this.currentsize == 2) {
            this.price = 6599.0;
          }
          break;
        case 1:
          if (this.currentsize == 0) {
            this.price = 5299.0;
          } else if (this.currentsize == 1) {
            this.price = 5599.0;
          } else if (this.currentsize == 2) {
            this.price = 6599.0;
          }
          break;
        case 2:
          if (this.currentsize == 0) {
            this.price = 5260.0;
          } else if (this.currentsize == 1) {
            this.price = 5650.0;
          } else if (this.currentsize == 2) {
            this.price = 6599.0;
          }
          break;
        case 3:
          if (this.currentsize == 0) {
            this.price = 5260.0;
          } else if (this.currentsize == 1) {
            this.price = 5599.0;
          } else if (this.currentsize == 2) {
            this.price = 6550.0;
          }
          break;
        case 4:
          if (this.currentsize == 0) {
            this.price = 5260.0;
          } else if (this.currentsize == 1) {
            this.price = 5699.0;
          } else if (this.currentsize == 2) {
            this.price = 6550.0;
          }
          break;
        case 5:
          if (this.currentsize == 0) {
            this.price = 5260.0;
          } else if (this.currentsize == 1) {
            this.price = 5699.0;
          } else if (this.currentsize == 2) {
            this.price = 6599.0;
          }
          break;
        case 6:
          if (this.currentsize == 0) {
            this.price = 5199.0;
          } else if (this.currentsize == 1) {
            this.price = 5599.0;
          } else if (this.currentsize == 2) {
            this.price = 6599.0;
          }
          break;
      }
    },
    addNum() {
      if (this.g_qty >= 3) {
        this.$emit("update:gqty", 3);
      } else {
        this.$emit("update:gqty", this.g_qty++);
      }
    },
    reduceNum() {
      if (this.g_qty <= 1) {
        this.$emit("update:gqty", 1);
      } else {
        this.$emit("update:gqty", this.g_qty--);
      }
    },
    addCar() {
      // console.log('g_name:',this.relation[this.currentrelation].value,'qty:',this.g_qty,'g_color:',this.color,'g_size:',this.size)
      // console.log(mylist[currentcolor].imagePath)
    var user = JSON.parse(localStorage.getItem("user"));
    user=user.username;
      this.$axios
        .get("http://localhost:5201/api/goods.php", {
          params: {
            m: "addCar",
            g_name: this.relation[this.currentrelation].value,
            qty: this.g_qty,
            g_color: this.color,
            g_size: this.size,
            g_price: this.price,
            g_imgurl: this.mylist[this.currentcolor].imagePath,
            tel:user
          }
        })
        .then(res => {
          // console.log(res.data);
          this.kaiguan();
        });
    }
  },
  mounted() {
    this.selectprice();
  }
};
</script>
