<template>
  <div id="search2">
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
#search2 {
  width: 100%;
  height: 52px;
  display: flex;
  flex-direction: column;
}
/*!important*/
#search2 .mint-search-list {
  height: 30px;
}
#search2.mint-tab-item-label {
  color: #fff;
}
#search2 .mint-searchbar {
  width: 375px;
  background: white;
}
#search2 .mint-searchbar-inner,
.mint-searchbar-core {
  background: #ccc;
  border-radius: 25px;
}
#search2 .mint-searchbar-cancel {
  color: white;
}
</style>
