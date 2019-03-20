<template>
  <div id="goodsclassify">
    <search></search>
    <ListRight></ListRight>

    <footers></footers>
  </div>
</template>

<script>
import Vue from "vue";
import "mint-ui/lib/style.css";
import search from "./search.vue";
import ListRight from "./ListLeft.vue";
import footers from "./footer.vue";
import { Lazyload } from "mint-ui";
Vue.use(Lazyload);
export default {
  data() {
    return {
      value: ""
      //  result:['3333','r']
    };
  },
  components: {
    search,
    ListRight,
    footers
  }
};
</script>

<style scoped>
</style>
