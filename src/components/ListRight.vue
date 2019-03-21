<template>
  <div class="Listright">
    <img class="imgTop" :src="type12[0].imgTop" alt @click="goto(1)">
    <div v-for="(item,idex) in type12" :key="idex">
      <div class="Listright1">
        <div>
          <div class="text">
            <span class="text1">{{item.text1}}</span>
            <span class="text2">{{item.text2}}</span>
          </div>
          <ul>
            <li class="brand" v-for="(item1,idx) in item.img1" :key="idx" @click="goto(idx)">
              <img v-lazy="item1" alt>
              <p>{{item.brand[idx]}}</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Vue from "vue";
import "mint-ui/lib/style.css";
export default {
  data() {
    return {
      type12: [
        {
          imgTop: require("../assets/img/ListRightTop.png"),
          text1: "热门品牌",
          text2: "排行榜<",
          img1: [
            require("../assets/img/ListRight1.jpg.webp"),
            require("../assets/img/ListRight2.jpg.webp"),
            require("../assets/img/ListRight3.jpg.webp"),
            require("../assets/img/ListRight4.jpg.webp"),
            require("../assets/img/ListRight2.jpg.webp"),
            require("../assets/img/ListRight3.jpg.webp"),
            require("../assets/img/ListRight1.jpg.webp"),
            require("../assets/img/ListRight4.jpg.webp"),
            require("../assets/img/ListRight1.jpg.webp"),
            require("../assets/img/ListRight2.jpg.webp"),
            require("../assets/img/ListRight3.jpg.webp"),
            require("../assets/img/ListRight1.jpg.webp"),
            require("../assets/img/ListRight4.jpg.webp"),
            require("../assets/img/ListRight2.jpg.webp")
          ],
          brand: [
            "苹果",
            "华为",
            "360",
            "摩托罗拉",
            "美耀",
            "小米",
            "oppo",
            "vivo",
            "三星",
            "魅族",
            "诺基亚",
            "一加",
            "美图",
            "360"
          ]
        },
        {
          text1: "热门品牌",
          text2: "排行榜<",
          img1: [
            require("../assets/img/ListRight2.jpg.webp"),
            require("../assets/img/ListRight3.jpg.webp"),
            require("../assets/img/ListRight1.jpg.webp"),
            require("../assets/img/ListRight4.jpg.webp"),
            require("../assets/img/ListRight2.jpg.webp"),
            require("../assets/img/ListRight3.jpg.webp"),
            require("../assets/img/ListRight4.jpg.webp"),
            require("../assets/img/ListRight2.jpg.webp"),
            require("../assets/img/ListRight3.jpg.webp"),
            require("../assets/img/ListRight1.jpg.webp"),
            require("../assets/img/ListRight4.jpg.webp")
          ],
          brand: [
            "小米",
            "oppo",
            "vivo",
            "三星",
            "魅族",
            "诺基亚",
            "美图",
            "苹果",
            "华为",
            "360",
            "摩托罗拉"
          ]
        }
        // {
        //   text1: "热门品牌",
        //   text2: "排行榜<",
        //   img1: [
        //     require("../assets/img/ListRight1.jpg.webp"),
        //     require("../assets/img/ListRight2.jpg.webp"),
        //     require("../assets/img/ListRight3.jpg.webp"),
        //     require("../assets/img/ListRight4.jpg.webp"),
        //     require("../assets/img/ListRight2.jpg.webp"),
        //     require("../assets/img/ListRight3.jpg.webp"),
        //     require("../assets/img/ListRight1.jpg.webp"),
        //     require("../assets/img/ListRight4.jpg.webp"),
        //     require("../assets/img/ListRight1.jpg.webp"),
        //     require("../assets/img/ListRight2.jpg.webp"),
        //     require("../assets/img/ListRight3.jpg.webp"),
        //     require("../assets/img/ListRight1.jpg.webp"),
        //     require("../assets/img/ListRight4.jpg.webp"),
        //     require("../assets/img/ListRight2.jpg.webp")
        //   ],
        //   brand: [
        //     "苹果",
        //     "华为",
        //     "360",
        //     "摩托罗拉",
        //     "美耀",
        //     "小米",
        //     "oppo",
        //     "vivo",
        //     "三星",
        //     "魅族",
        //     "诺基亚",
        //     "一加",
        //     "美图",
        //     "360"
        //   ]
        // }
      ]
    };
  },
  methods: {
    goto(id) {
      if (id % 2 == 0) {
        id = 1;
      } else {
        id = 2;
      }
      this.$router.push({ path: "/list/" + id });
    }
  }
};
</script>

<style scoped>
* {
  padding: 0;
  margin: 0;
}
ul,
li {
  list-style: none;
  font-size: 10px;
  text-align: center;
}
li img {
  width: 70px;
  height: 60px;
}
.Listright {
  width: 270px;
}
.Listright1 {
  width: 100%;
  box-shadow: #ccc -3px -2px 10px 2px;
  overflow: hidden;
  margin-bottom: 10px;
}
.imgTop {
  width: 270px;
  height: 80px;
  margin-bottom: 10px;
}
.text {
  width: 100%;
  height: 26px;
  font-size: 10px;
  line-height: 26px;
}
.text1 {
  float: left;
}
.text2 {
  float: right;
  color: #ccc;
}
.Listright li {
  float: left;
  width: 90px;
  height: 80px;
}
image[lazy="loading"] {
  width: 100px;
  height: 100px;
}
</style>
