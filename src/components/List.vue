<template>
  <div class="better_scroll">
    <div class="boxqu">
      <div class="leftwrap" ref="navwrap">
        <ul class="content">
          <li
            ref="li1"
            v-for="(item,index) in lists"
            :class="{'current':currentIndex===index}"
            @click="select(index,$event)"
            :key="index"
          >
            <p>{{item}}</p>
          </li>
        </ul>
      </div>
      <div class="wrapper" ref="wrapper">
        <ul class="content">
          <li ref="li2" v-for="(item,ids) in lists" :key="ids" :a="ids">
            <ListRight></ListRight>
          </li>
        </ul>
      </div>
    </div>

    <!-- <div @click="click()">点击</div> -->
  </div>
</template>
 
<script>
import { mapState } from "vuex";
import BScroll from "better-scroll";
import ListRight from "./ListRight.vue";
export default {
  name: "better_scroll",

  data() {
    return {
      currentIndex: 0, //当前显示的下标
      listHeight: [],
      scrollY: 0,
      menuIndexChange: true,
      lists: [
        "手机通讯",
        "手机配件",
        "电脑办公",
        "平板电脑",
        "路由器",
        "智能穿戴",
        "数码影音",
        "智能家居",
        "智能出行",
        "儿童专区",
        "娱乐竞技",
        "智能健康",
        "二手良品",
        "运营商业务"
      ]
    };
  },
  //接收父组件传过来的值
  props: {},
  components: {
    ListRight
  },
  created() {
    this.$nextTick(() => {
      // 3 在这个函数中调用以防内容还未加载完就执行，获取不到元素的高度导致无法滑动
      this._initScroll();
      this.height();
    });
  },
  mounted() {},
  methods: {
    //新建滚动实例  并监听右侧滚动的高度
    _initScroll() {
      //注意此处是 this.$refs.xxx
      this.navwrapScroll = new BScroll(this.$refs.navwrap, {
        click: true
      });

      this.wrapperScroll = new BScroll(this.$refs.wrapper, {
        click: true, //better-scroll 默认会阻止浏览器的原生 click 事件。当设置为 true，better-scroll 会派发一个 click 事件，我们会给派发的 event 参数加一个私有属性 _constructed，值为 true。
        probeType: 3 //这个属性设置之后可以监听得到了
      });

      //监听滚动事件
      this.wrapperScroll.on("scroll", pos => {
        // 当允许滚动并滚动的y轴小于0
        if (this.menuIndexChange && pos.y <= 0) {
          this.scrollY = Math.abs(Math.round(pos.y)); //滚动距离
          console.log(this.scrollY);

          // 循环每一个模块距离顶部的高度
          for (let i = 0; i < this.listHeight.length; i++) {
            let height1 = this.listHeight[i];
            let height2 = this.listHeight[i + 1];
            if (
              !height2 ||
              (this.scrollY >= height1 && this.scrollY < height2)
            ) {
              console.log(i);
              this._followScroll(i); //左侧动画移动
              this.currentIndex = i;
              return;
            }
          }
        }
      });
    },

    //获取右侧每个模块的高度
    height() {
      let wrap2 = this.$refs.li2;
      console.log(this.$refs.li2);
      let height = 0;
      this.listHeight.push(height);
      for (let i = 0; i < wrap2.length; i++) {
        let item = wrap2[i];
        height += item.clientHeight;
        this.listHeight.push(height);
      }
      console.log(this.listHeight);
    },

    //  点击左侧滚动
    select(index, event) {
      // PC页面时,点击不会被 better-scroll阻止事件,初始化,给 better-scroll派发事件,使移动端拥有点击事件,因此切换到PC端时,点击事件会被执行两次,
      if (!event._constructed) {
        return;
      }

      this.currentIndex = index; //改变点击的当前样式
      this.menuIndexChange = false; //禁用右侧滚动  防止左右两侧都改变index  解决运动时listenScroll依然监听的bug

      //左侧网上偏移100
      this._followScroll(index); //左侧动画移动

      //右侧滚到响应位置
      let wrap2 = this.$refs.li2;
      let el = wrap2[index];
      this.wrapperScroll.scrollToElement(el, 0);

      //右侧滚动结束后在允许动画
      this.wrapperScroll.on("scrollEnd", () => {
        this.menuIndexChange = true;
      });
    },

    //左侧网上偏移
    _followScroll(index) {
      let wrap1 = this.$refs.li1;
      let el = wrap1[index];
      this.navwrapScroll.scrollToElement(el, 300, 0, -100); //往上偏移100
    }
  },

  computed: {}
};
</script>
 
 
<style scoped>
* {
  margin: 0;
  padding: 0;
}
.boxqu {
  display: flex;
  flex-wrap: nowrap;
}
.leftwrap {
  width: 120px;
  height: 500px;
  overflow: hidden;
}

.leftwrap .content {
  display: block;
  width: 100%;
  background: #eee;
}

.leftwrap .content li {
  padding-top: 10px;
  padding-bottom: 10px;
  padding-right: 5px;
}

.leftwrap .content li.current {
  background: #fff;
}

li.current p {
  border-left: 1px solid red;
}

.leftwrap .content li p {
  padding-left: 10px;
  line-height: 16px;
  font-size: 12px;
}
.wrapper {
  width: 500px;
  height: 500px;
  overflow: hidden;
}

.wrapper .content {
  display: block;
  width: 100%;
  margin: 0 auto;
  /* background: rgba(255, 255, 255, 0.6); */
}

.wrapper .content li {
  width: 100%;
  /* height: 200px; */
  /* border-bottom: 1px solid red; */
  text-align: center;
  overflow: hidden;
  line-height: 0px;
  padding-left: 10px;
}

.wrapper .content li:last-of-type {
  height: 600px;
}

.content li {
  display: block;
}
</style>