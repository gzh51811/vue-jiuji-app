<template>
  <div id="searchBar" class="searchBar">
    <div data-v-40e81ac4 data-v-42930b63 class="sort sticky">
      <!---->
      <div
        data-v-42930b63
        data-v-40e81ac4
        class="sort-bar flex flex-justify-between flex-align-center"
      >
        <div data-v-42930b63 data-v-40e81ac4 class="sort-item flex-child-average" @click="change">
          <div data-v-42930b63 data-v-40e81ac4 class="sort-item-text flex flex-center">
            <div
              data-v-42930b63
              data-v-40e81ac4
              class="main-color bold clikcss"
              :class="{focss:(idx==0)}"
            >综合</div>
            <span :class="{s1:true, s2:a1}">
              <i
                :class="{focss:(idx==0)}"
                data-v-42930b63
                data-v-40e81ac4
                class="sort-icon fa fa-caret-down ml-5 font-12 main-color clikcss"
              ></i>
            </span>

            <div :class="{active:a1}">
              <div data-v-42930b63 data-v-40e81ac4 class="sort-option border-top border-bottom">
                <div
                  @click="change00"
                  data-v-42930b63
                  data-v-40e81ac4
                  class="sort-option-item flex flex-align-center flex-justify-between main-color check2"
                  :class="{check1:!a0}"
                >
                  <p data-v-42930b63 data-v-40e81ac4>综合排序</p>
                  <i
                    data-v-42930b63
                    data-v-40e81ac4
                    class="fa fa-check font-12"
                    :class="{check0:a0}"
                  ></i>
                </div>
                <div
                  @click="change01"
                  data-v-42930b63
                  data-v-40e81ac4
                  class="sort-option-item flex flex-align-center flex-justify-between check2"
                  :class="{check1:a0}"
                >
                  <p data-v-42930b63 data-v-40e81ac4>按销量排序</p>
                  <i
                    data-v-42930b63
                    data-v-40e81ac4
                    class="fa fa-check font-12"
                    :class="{check0:!a0}"
                  ></i>
                  <!---->
                </div>
                <div data-v-42930b63 data-v-40e81ac4 class="sort-musk" style="height:560%"></div>
              </div>
            </div>

            <!---->
            <!---->
          </div>
          <!---->
        </div>
        <div data-v-42930b63 data-v-40e81ac4 class="sort-item flex-child-average">
          <!---->
          <div @click="change1" :class="{focss:(idx==1)}">
            <div data-v-42930b63 data-v-40e81ac4 class="sort-item-text flex flex-center">
              <span data-v-42930b63 data-v-40e81ac4 class>价格</span>
              <div
                data-v-42930b63
                data-v-40e81ac4
                class="sort-direction flex flex-col flex-center ml-5"
              >
                <i
                  data-v-42930b63
                  data-v-40e81ac4
                  class="sort-up fa fa-sort-up font-12 clikcss"
                  :class="{focss:(idx==1)&&!idx1}"
                ></i>
                <i
                  :class="{focss:(idx==1)&&idx1}"
                  data-v-42930b63
                  data-v-40e81ac4
                  class="fa fa-sort-down font-12 clikcss"
                ></i>
              </div>
            </div>
          </div>
        </div>
        <div data-v-42930b63 data-v-40e81ac4 class="sort-item flex-child-average">
          <!---->
          <div @click="change2" :class="{focss:(idx==2)}">
            <div data-v-42930b63 data-v-40e81ac4 class="sort-item-text flex flex-center">
              <span data-v-42930b63 data-v-40e81ac4 class>新品优先</span>
              <!---->
            </div>
          </div>
        </div>
        <div data-v-42930b63 data-v-40e81ac4 class="sort-item flex flex-center flex-child-average">
          <p data-v-42930b63 data-v-40e81ac4>筛选</p>
        </div>
      </div>
      <div data-v-42930b63 data-v-40e81ac4 class="fast-sort flex">
        <div data-v-42930b63 data-v-40e81ac4 class="fast-sort-item">
          <div
            @click="changeIdx2_1"
            data-v-42930b63
            data-v-40e81ac4
            class="fast-sort-item-label flex flex-center"
            :class="{focss2:(idx2==1)}"
          >
            <span data-v-42930b63 data-v-40e81ac4 class="screening-title-name lines-1">品牌</span>
            <i
              data-v-42930b63
              data-v-40e81ac4
              class="sort-icon fa fa-caret-down ml-5 flex-child-noshrink"
              :class="{s3:(idx2==1)}"
            ></i>
          </div>
          <div
            data-v-42930b63
            data-v-40e81ac4
            class="sort-option border-top active"
            :class="{s4:(idx4==1)}"
          >
            <div
              data-v-42930b63
              data-v-40e81ac4
              class="flex sort-option-wrapper flex-wrap flex-align-start"
            >
              <div
                data-v-42930b63
                data-v-40e81ac4
                data-coll="2-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0_0"
                class="sort-option-item flex flex-align-center flex-justify-between"
                @click="change6(1)"
              >
                <p data-v-42930b63 data-v-40e81ac4 :class="{focss:g[1]}">苹果</p>
                <i
                  data-v-42930b63
                  data-v-40e81ac4
                  class="fa fa-check font-12 main-color"
                  :class="{active:!g[1]}"
                ></i>
              </div>
              <div
                data-v-42930b63
                data-v-40e81ac4
                data-coll="2-1_7-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0_0"
                class="sort-option-item flex flex-align-center flex-justify-between"
                @click="change6(2)"
              >
                <p data-v-42930b63 data-v-40e81ac4 :class="{focss:g[2]}">华为</p>
                <i
                  data-v-42930b63
                  data-v-40e81ac4
                  class="fa fa-check font-12 main-color"
                  :class="{active:!g[2]}"
                ></i>
              </div>
              <div
                data-v-42930b63
                data-v-40e81ac4
                data-coll="2-1_1255-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0_0"
                class="sort-option-item flex flex-align-center flex-justify-between"
                @click="change6(3)"
              >
                <p data-v-42930b63 data-v-40e81ac4 :class="{focss:g[3]}">荣耀</p>
                <i
                  data-v-42930b63
                  data-v-40e81ac4
                  class="fa fa-check font-12 main-color"
                  :class="{active:!g[3]}"
                ></i>
              </div>
              <div
                data-v-42930b63
                data-v-40e81ac4
                data-coll="2-1_9-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0_0"
                class="sort-option-item flex flex-align-center flex-justify-between"
                @click="change6(4)"
              >
                <p data-v-42930b63 data-v-40e81ac4 :class="{focss:g[4]}">小米</p>
                <i
                  data-v-42930b63
                  data-v-40e81ac4
                  class="fa fa-check font-12 main-color"
                  :class="{active:!g[4]}"
                ></i>
                <!---->
              </div>
              <div
                data-v-42930b63
                data-v-40e81ac4
                data-coll="2-1_11-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0_0"
                class="sort-option-item flex flex-align-center flex-justify-between"
                @click="change6(5)"
              >
                <p data-v-42930b63 data-v-40e81ac4 :class="{focss:g[5]}">OPPO</p>
                <i
                  data-v-42930b63
                  data-v-40e81ac4
                  class="fa fa-check font-12 main-color"
                  :class="{active:!g[5]}"
                ></i>
                <!---->
              </div>
              <div
                data-v-42930b63
                data-v-40e81ac4
                data-coll="2-1_14-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0_0"
                class="sort-option-item flex flex-align-center flex-justify-between"
                @click="change6(6)"
              >
                <p data-v-42930b63 data-v-40e81ac4 :class="{focss:g[6]}">vivo</p>
                <i
                  data-v-42930b63
                  data-v-40e81ac4
                  class="fa fa-check font-12 main-color"
                  :class="{active:!g[6]}"
                ></i>
                <!---->
              </div>
              <div
                data-v-42930b63
                data-v-40e81ac4
                data-coll="2-1_2-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0_0"
                class="sort-option-item flex flex-align-center flex-justify-between"
                @click="change6(7)"
              >
                <p data-v-42930b63 data-v-40e81ac4 :class="{focss:g[7]}">三星</p>
                <i
                  data-v-42930b63
                  data-v-40e81ac4
                  class="fa fa-check font-12 main-color"
                  :class="{active:!g[7]}"
                ></i>
              </div>
              <div
                data-v-42930b63
                data-v-40e81ac4
                data-coll="2-1_8-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0_0"
                class="sort-option-item flex flex-align-center flex-justify-between"
                @click="change6(8)"
              >
                <p data-v-42930b63 data-v-40e81ac4 :class="{focss:g[8]}">魅族</p>
                <i
                  data-v-42930b63
                  data-v-40e81ac4
                  class="fa fa-check font-12 main-color"
                  :class="{active:!g[8]}"
                ></i>
              </div>
              <div
                data-v-42930b63
                data-v-40e81ac4
                data-coll="2-1_1155-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0_0"
                class="sort-option-item flex flex-align-center flex-justify-between"
                @click="change6(9)"
              >
                <p data-v-42930b63 data-v-40e81ac4 :class="{focss:g[9]}">美图手机</p>
                <i
                  data-v-42930b63
                  data-v-40e81ac4
                  class="fa fa-check font-12 main-color"
                  :class="{active:!g[9]}"
                ></i>
              </div>
              <div
                data-v-42930b63
                data-v-40e81ac4
                data-coll="2-1_77-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0_0"
                class="sort-option-item flex flex-align-center flex-justify-between"
                @click="change6(10)"
              >
                <p data-v-42930b63 data-v-40e81ac4 :class="{focss:g[10]}">其他</p>
                <i
                  data-v-42930b63
                  data-v-40e81ac4
                  class="fa fa-check font-12 main-color"
                  :class="{active:!g[10]}"
                ></i>
              </div>
            </div>
            <div data-v-42930b63 data-v-40e81ac4 class="flex fast-sort-btn border-top">
              <a data-v-42930b63 data-v-40e81ac4 class="flex-child-average" @click="resetting">重置</a>
              <a
                data-v-42930b63
                data-v-40e81ac4
                class="flex-child-average main-bgcolor white"
                @click="change5"
              >确定</a>
            </div>
          </div>
          <div
            data-v-42930b63
            data-v-40e81ac4
            class="sort-musk active"
            :class="{s4:(idx4==1)}"
            @click="change5"
          ></div>
          <!---->
          <!---->
        </div>
        <div data-v-42930b63 data-v-40e81ac4 class="fast-sort-item" @click="change5">
          <div
            @click="changeIdx2_2"
            data-v-42930b63
            data-v-40e81ac4
            class="fast-sort-item-label flex flex-center"
            :class="{focss2:(idx2==2)}"
          >
            <span data-v-42930b63 data-v-40e81ac4 class="screening-title-name lines-1">运行内存</span>
            <i
              data-v-42930b63
              data-v-40e81ac4
              class="sort-icon fa fa-caret-down ml-5 flex-child-noshrink"
              :class="{s3:(idx2==2)}"
            ></i>
          </div>
          <!---->
          <!---->
        </div>
        <div data-v-42930b63 data-v-40e81ac4 class="fast-sort-item" @click="change5">
          <div
            @click="changeIdx2_3"
            data-v-42930b63
            data-v-40e81ac4
            class="fast-sort-item-label flex flex-center"
            :class="{focss2:(idx2==3)}"
          >
            <span data-v-42930b63 data-v-40e81ac4 class="screening-title-name lines-1">机身内存</span>
            <i
              data-v-42930b63
              data-v-40e81ac4
              class="sort-icon fa fa-caret-down ml-5 flex-child-noshrink"
              :class="{s3:(idx2==3)}"
            ></i>
          </div>
          <!---->
          <!---->
        </div>
        <div data-v-42930b63 data-v-40e81ac4 class="fast-sort-item" @click="change5">
          <div
            @click="changeIdx2_4"
            data-v-42930b63
            data-v-40e81ac4
            class="fast-sort-item-label flex flex-center"
            :class="{focss2:(idx2==4)}"
          >
            <span data-v-42930b63 data-v-40e81ac4 class="screening-title-name lines-1">屏幕尺寸范围</span>
            <i
              data-v-42930b63
              data-v-40e81ac4
              :class="{s3:(idx2==4)}"
              class="sort-icon fa fa-caret-down ml-5 flex-child-noshrink"
            ></i>
          </div>
          <!---->
          <!---->
        </div>
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
      </div>
    </div>
  </div>
</template>

<script>
import Vue from "vue";
import "mint-ui/lib/style.css";
import { Popup } from "mint-ui";
import { constants } from "fs";
Vue.component(Popup.name, Popup);
export default {
  data() {
    return {
      a1: true,
      a0: false,
      idx: 0,
      idx1: true,
      idx2: 0,
      idx4: 0,
      g: [
        true,
        true,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false
      ]
    };
  },
  methods: {
    change() {
      this.a1 = !this.a1;
    },
    change00() {
      this.idx = 0;
      this.idx1 = true;
      this.a0 = false;
    },
    change01() {
      this.idx = 0;
      this.idx1 = true;
      this.a0 = true;
    },
    change1() {
      var { id } = this.$route.params;
      if (this.idx2 == "1") {
        if (!this.idx1) {
          if (this.g[1] && this.g[2]) {
            var status = "xuanzheiw";
          } else if (this.g[1] && !this.g[2]) {
            var status = "xuanzhei";
          } else if (!this.g[1] && this.g[2]) {
            var status = "xuanzhew";
          } else {
            return;
          }
        } else {
          if (this.g[1] && this.g[2]) {
            var status = "xuanzheiws";
          } else if (this.g[1] && !this.g[2]) {
            var status = "xuanzheis";
          } else if (!this.g[1] && this.g[2]) {
            var status = "xuanzhews";
          } else {
            return;
          }
        }
      } else {
        if (this.idx1) {
          var status = "jiagebig";
        } else {
          var status = "jiagesmall";
        }
      }
      this.$axios
        .get("http://localhost:5201/src/api/goodslist.php", {
          params: {
            id,
            status
          }
        })
        .then(res => {
          this.$emit("update:goodschange", res.data);
        });
      this.idx = 1;
      this.idx1 = !this.idx1;
    },
    change2() {
      this.idx = 2;
      this.idx1 = true;
    },
    changeIdx2_1() {
      this.idx2 = 1;
      this.idx4 = 1;
    },
    changeIdx2_2() {
      this.idx2 = 2;
    },
    changeIdx2_3() {
      this.idx2 = 3;
    },
    changeIdx2_4() {
      this.idx2 = 4;
    },
    change5() {
      this.idx4 = 0;
      var { id } = this.$route.params;
      if (this.idx2 == "1") {
        if (!this.idx1) {
          if (this.g[1] && this.g[2]) {
            var status = "xuanzheiw";
          } else if (this.g[1] && !this.g[2]) {
            var status = "xuanzhei";
          } else if (!this.g[1] && this.g[2]) {
            var status = "xuanzhew";
          } else {
            return;
          }
        } else {
          if (this.g[1] && this.g[2]) {
            var status = "xuanzheiws";
          } else if (this.g[1] && !this.g[2]) {
            var status = "xuanzheis";
          } else if (!this.g[1] && this.g[2]) {
            var status = "xuanzhews";
          } else {
            return;
          }
        }
      } else {
        if (this.idx1) {
          var status = "jiagebig";
        } else {
          var status = "jiagesmall";
        }
      }
      this.$axios
        .get("http://localhost:5201/src/api/goodslist.php", {
          params: {
            id,
            status
          }
        })
        .then(res => {
          this.$emit("update:goodschange", res.data);
        });
    },
    change6(i) {
      this.g[i] = !this.g[i];
      this.$forceUpdate();
    },
    resetting() {
      let f = this.g.map(item => (item = false));
      this.g = f;
      this.$forceUpdate();
    }
  }
};
</script>

<style scoped>
#searchBar .active {
  display: none;
}
#searchBar .s1 {
  transition: all 0.5s ease;
}
#searchBar .s2 {
  transform-origin: 8px 8px;
  transform: rotate(180deg);
}
#searchBar .s3 {
  transform-origin: 4px 5px;
  transform: rotate(180deg);
}
#searchBar .s4 {
  display: block;
}

#searchBar .clikcss {
  font-weight: 500;
  color: #000;
}
#searchBar .focss {
  font-weight: 700;
  color: #f21c1c;
}
#searchBar .check0 {
  display: none;
}

#searchBar .check2 {
  color: #000;
}
#searchBar .check1 {
  color: #f21c1c;
}
#searchBar .focss2 {
  border: 1px solid #f21c1c;
  background-color: #fff;
  color: #f21c1c;
}
#searchBar .fast-sort .sort-option[data-v-42930b63] {
  top: 130px;
  padding: 0;
}
</style>