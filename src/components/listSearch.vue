<template>
  <div id="search">
    <div>
      <img class="img1" src="../assets/img/fenxiang.svg" @click="goto">
      <mt-search class="searchout" v-model="value" placeholder="搜索" cancel-text :show="false">
        <!-- :result.sync="result" -->
      </mt-search>
    </div>
    <span :class="{searchImg:true,active:idx}" @click="change">
      <img src="../assets/img/searchImg1.png" alt>
    </span>
    <span :class="{searchImg:true,active:(!idx)}" style="width:29px;height:29px;" @click="change">
      <img src="../assets/img/searchIng2.png" alt>
    </span>
  </div>
</template>

<script>
import Vue from "vue";
import "mint-ui/lib/style.css";
import { Search } from "mint-ui";
Vue.component(Search.name, Search);
export default {
  data() {
    return {
      value: "",
      //  result:['3333','r']
      idx: true
    };
  },
  methods: {
    change() {
      this.idx = !this.idx;
    },
    goto() {
      this.$router.push({ path: "/classify" });
    }
  }
};
</script>

<style >
#search {
  width: 100%;
  height: 50px;
  overflow: hidden;
}
.mint-searchbar {
  background: white;
  width: 300px;
}
.mint-searchbar-inner,
.mint-searchbar-core {
  background: #ccc;
  border-radius: 25px;
}
.mint-searchbar-cancel {
  color: #ccc;
}
.img1 {
  float: left;
  width: 20px;
  height: 20px;
  margin-top: 14px;
}
.searchout {
  float: left;
  width: 310px;
  padding: 0px;
  margin: 0px;
  /* margin-right: 30px; */
}
.mint-searchbar {
  width: 310px;
}
.searchImg {
  position: relative;
  z-index: 22;
  right: 0;
  top: 15px;
  display: none;
}
.searchImg img {
  width: 23px;
  height: 23px;
}
.active {
  display: inline-block;
}
</style>