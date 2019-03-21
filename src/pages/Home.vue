<template>
  <div id="jiuji" style="position:relative;">
    <!-- search -->
    <search style="position:fixed;top:0px;z-index:10"></search>
    <!-- 导航选项卡 -->
    <mt-navbar v-model="selected" style="position:fixed;top:52px;z-index:10;width: 100%;">
      <mt-tab-item
        v-for="(item,idx) in top"
        :id="idx+1"
        @click.native="change(idx,$event)"
        ref="currentcss"
        :class="{currenttab:selected==idx+1}"
        :key="idx"
      >
        <!-- :class='currenttab:selected==idx' -->
        {{item}}
      </mt-tab-item>
    </mt-navbar>

    <!-- 切换动态组件 -->
    <keep-alive>
      <component :is="tab" style="margin-top:98px"></component>
    </keep-alive>
    <!-- 底部内容 -->
    <foot></foot>
  </div>
</template>

<script>
import Vue from "vue";
import search from "../components/search1.vue";
import foot from "../components/footer.vue";
import recommend1 from "../components/recommend1.vue";
import recommend2 from "../components/recommend2.vue";
import recommend3 from "../components/recommend3.vue";
import recommend4 from "../components/recommend4.vue";
import recommend5 from "../components/recommend5.vue";
import { Navbar, TabItem } from "mint-ui";
Vue.component(Navbar.name, Navbar);
Vue.component(TabItem.name, TabItem);
import { Swipe, SwipeItem } from "mint-ui";
Vue.component(Swipe.name, Swipe);
Vue.component(SwipeItem.name, SwipeItem);
export default {
  components: {
    foot,
    search,
    recommend1,
    recommend2,
    recommend3,
    recommend4,
    recommend5
  },
  data() {
    return {
      selected: 0,
      top: ["推荐", "限时购", "以旧换新", "手机快修", "头条"],
      currenttab: [
        "recommend1",
        "recommend2",
        "recommend3",
        "recommend4",
        "recommend5"
      ],
      tab: "recommend1",
      currentcss: ""
    };
  },
  mounted() {
    // console.log(6666,this.$refs,999);
    // console.log(8888,this.selected);
  },
  methods: {
    change(index, e) {
      console.log(1, this.selected - 1, 8);
      // let {$el}=this.$refs;
      // console.log(e.target)
      // console.log(111222,this.$refs.currentcss[0].$el,$el);
      // console.log(e.target.className);
      // for(var i=0;i<this.top.length;i++){

      //     // console.log('各种元素',this.$refs.currentcss[i].$el.children[1]);
      //     this.$refs.currentcss[i].$el.children[1].style.fontSize='12px'

      // }

      // e.target.style.fontSize='16px';
      this.tab = this.currenttab[index];
    }
  }
  // mounted(){
  //     console.log(11111,this.$route)
  //     // console.log(1111,this.$options)
  //     // console.log(2222,this.currenttab)
  //     // if()
  // }
};
</script>


<style scoped>
.currenttab .mint-tab-item-label {
  font-size: 16px !important;
}
.mint-tab-item .mint-tab-item-label {
  font-size: 20px !important;
  color: red !important;
  height: 20px !important;
  display: block !important;
}
#jiuji {
  /*height: 100%;*/
  display: flex;
  flex-direction: column;
}
.mint-navbar {
  background: #e61a01;
}
.home {
  width: 100%;
  height: 1000px;
  overflow-x: hidden;

  /*flex:1;*/
  background: pink;
}
.is-selected {
  border-bottom: 0 none !important;
}
#search {
  height: 52px !important;
}
.swiper {
  width: 100%;
  height: 150px;
  background: #e61a01;
  position: relative;
}
.mint-swipe {
  height: 175px;
  width: 344px;
  /*margin:0 auto;*/
  margin-top: 10px;
  border-radius: 8px;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  top: 0px;
}
.swipeimg {
  height: 175px;
  width: 344px;
}
.serve {
  height: 75px;
  margin-top: 35px;
  /*background:orange;*/
}
.explain {
  height: 24px;
  background: #f5f5f5;
}
.explain img {
  background: #fff;
}
.mint-tab-item-label {
  font-size: 14px;
}
.main {
  height: 3000px;
}
</style>


