<template>
  <div id="search">
    <mt-search v-model="value" cancel-text="取消" placeholder="搜索" :show="true" class="search">
      <!-- :result.sync="result" -->
    </mt-search>
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
      value: ""
      //  result:['3333','r']
    };
  }
};
</script>

<style >
.mint-searchbar {
  background: red;
}
.mint-searchbar-inner,
.mint-searchbar-core {
  background: darkred;
  border-radius: 25px;
}
.mint-searchbar-cancel {
  color: white;
}
</style>
