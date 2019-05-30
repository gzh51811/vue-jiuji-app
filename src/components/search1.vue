<template>
  <div id="search1" @click="toSearch">
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
  },
  methods:{
    toSearch(){
      this.$router.push('/search')
    }
  }
};
</script>

<style >
#search1 {
  width: 100%;
  display: flex;
  height: 52px;
  flex-direction: column;
  background: #e61a01 !important;
}
#search1 .mint-searchbar {
  width: 375px;
  background: red;
}
#search1 .mint-searchbar-core {
  background: darkred !important;
  border-radius: 25px;
}
#search1 .mint-search-list {
  height: 30px;
}
#search1 .mint-tab-item-label {
  color: #fff;
}

#search1 .mint-searchbar-inner,
.mint-searchbar-core {
  background: darkred;
  border-radius: 25px;
  margin-top: 3px;
  height: 30px;
}
#search1 .mint-searchbar-cancel {
  color: white;
}
</style>
