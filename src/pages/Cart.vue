<template>
  <div id="cart">
    <header style='padding-top:10px'>
      <router-link to="/home">
        <van-icon class="back" name="arrow-left"/>
      </router-link>
      <span style='padding-left:40%'>购物车</span>
      <span>编辑</span>
    </header>
    <div class="main">
      <div class="one" v-for="(i) in cartlist" :key="i.cid" :name="i.cid">
        <div style='margin-top:35px'>
          <!-- <input id="input_c" type="checkbox"  v-model="selected" :value="i.id"> -->
          <!-- <van-checkbox v-model="checked"></van-checkbox> -->
          <!-- <van-checkbox v-model="selected" :value="index"></van-checkbox> -->
          <input type="checkbox" class="input_c" @click="select(i.cid)">
        </div>
        <div class="img" style='margin-top: 10px;'>
          <!-- <img :src="require('../assets/'+i.image)" height="54" width="54" alt> -->
          <img :src="i.imgurl" height="54" width="54" alt>
        </div>
        <div class="text" style='margin-top:15px'>
          <p class="elli2" v-text="i.name"></p>
          <p>
            <strong class="red">
              ￥
              <b v-text="i.price"></b>
            </strong>
          </p>
        </div>
        <div class="del">
          <van-icon class="icon" name="delete" @click="delgoods(i.cid)"/>
        </div>
        <div class="num">
          <van-stepper v-model="i.num+1"/>
        </div>
      </div>
      <!-- {{selected}} -->
      <!-- {{checkAll}} -->
    </div>
    <footer>
      <van-submit-bar :price="price" button-text="提交订单">
        <!-- <van-checkbox  >全选</van-checkbox> -->
        <!-- <input type="checkbox" >全选 -->
        <!-- <van-checkbox v-model="checkAll">全选</van-checkbox>
         -->
         <input type="checkbox" v-model="checkAll" class="input_c">全选
      </van-submit-bar>
    </footer>
    <!-- {{totalPrice}} -->
  </div>
</template>
<script type="text/javascript">
// import state from 'vuex';
import { mapState } from "vuex";
export default {
  data() {
    return {
      // checked: false,
      selected: []
      // price:123,
    };
  },
  computed: {
    //计算属性
    ...mapState([
      "cartlist" //映射computed.produccts为this.$store.state.products
    ]),
    //计算商品总价
    price() {
      var total = 0;
        // console.log(this.selected);
      this.cartlist.map(item => {
        this.selected.map(item1 => {
          if (item.cid == item1) {
            //总价=单价*数量
            //因为iu框架的price单位是分（看vant-ui框架的api文档），so就*了100
            total += item.price * item.num * 100;
          }
        });
      });
      return total;
    },
    checkAll: {
      get() {
        // return this.cartlist.every((item,idx)=>this.selected.includes(idx));
        return this.cartlist.every((item, idx) => {
          // console.log(item)
          return this.selected.includes(item.cid);
        });
      },
      set(checked) {
        // console.log(item)
        return (this.selected = checked
          ? this.cartlist.map((item, idx) => item.cid)
          : []);
      }
    }
  },
  methods: {
    delgoods(id) {
      var user = JSON.parse(localStorage.getItem("user"));
      user = user.username;
      var data = { tel: user, id: id };
      //没有这个删除第一条数据没有反应
      this.$store.dispatch("delcart", data);
    },
    //选择单选框
    select(idx) {
      // console.log(this.selected);
      // 获取idx在数组中的位置
      let index = this.selected.indexOf(idx);
      // console.log(index);
      if (index >= 0) {
        //如果当前已勾选，则取消勾选
        this.selected.splice(index, 1);
      } else {
        this.selected.push(idx);
      }
      // console.log(this.selected);
    }
  },
  created() {

        this.$store.dispatch("getcartData");
        
        // this.$store.dispatch("cartrender", list);
        if (this.$store.state.cartlist[0]&&this.$store.state.cartlist[0].length > 0) {
          this.isblock = false;
        } else if (this.$store.state.cartlist[0]&&this.$store.state.cartlist[0].length == 0) {
          this.isblock = true;
        }
    
  }
};
</script>
<style lang="css" scoped>
.check {
  position: relative;
  z-index: 99;
}
.input_c {
  width: 20px;
  height: 20px;
  display: block !important;
  -webkit-appearance: checkbox;
}
.red {
  color: red;
}
#cart {
  width: 100%;
  height: 100%;
  box-sizing: border-box;
}
.footer {
  width: 100%;
  box-sizing: border-box;
}
header {
  height: 40px;
  border-bottom: 10px solid #f8f8f8;
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
  background: #fff;
  z-index: 99;
}
header span {
  /*display: block;*/
  text-align: center;
  line-height: 30px;
  padding-left: 35%;
  font-size: 12px;
}
.main {
  margin-bottom: 80px;
  margin-top: 40px;
}
.one {
  position: relative;
  padding: 2% 0 2% 2%;
  box-sizing: border-box;
  /*background: #ccc;*/
  display: inline-block;
  width: 100%;
  border-bottom: 1px solid #ccc;
}
.one div {
  float: left;
}
.img img {
  width: 90px;
  height: 90px;
}
.text {
  padding-left: 5%;
  width: 190px;
  /*height: 100%;*/
}
.text .elli2 {
  font-size: 12px;
  height: 24px;
  margin-bottom: 20%;
}
.check {
  margin-right: 3%;
  margin-top: 6%;
}
.check input {
  padding-top: 20%;
}
.del {
  position: absolute;
  right: 5%;
  top: 18%;
}
.del .icon {
  font-size: 25px;
}
.num {
  position: absolute;
  bottom: 5%;
  right: 5%;
}
</style>
