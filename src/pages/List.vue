<template>
  <div>
    <div id="flex">
      <listSearch></listSearch>
      <filterList :goodschange.sync="goods"></filterList>
    </div>
    <div style="width:100%;height:138px"></div>
    <goodlist :goodschange.sync="goods"></goodlist>
  </div>
</template> 

<script>
import goodlist from "../components/goodlist.vue";
import listSearch from "../components/listSearch.vue";
import filterList from "../components/filterList.vue";
export default {
  data() {
    return {
      goods: []
    };
  },
  methods: {
    // changeGoods(goods) {
    //   this.goods = goods;
    //   this.$forceUpdate();
    // }
  },
  components: {
    goodlist,
    listSearch,
    filterList
  }
};
</script>

<style scoped>
#flex {
  width: 100%;
  position: fixed;
  top: 0;
  background: #fff;
  z-index: 12342;
}
</style>
