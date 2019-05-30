<template>
  <div class="chat div-wrap">
    <goodshead class="myhead"></goodshead>
      <ul>
        <li v-for="(item,index) in dataList" :key="index"
            :class="{'chat-right':item.me,'chat-box':true}">           
            <div :class="{'toright':item.me,'flex':true}">
                <span class="avater" v-if="!item.me">
                    <img :src="avater"/>
                </span>
                <span class="content">{{item.content}}</span>
                <span v-if="item.me" class="avater">
                    <img :src="avater"/>
                </span>
            </div>
        </li>
      </ul>
    <div class="chat-footer">
      <textarea class="chat-textarea weui-textarea" v-model="content" rows="1"></textarea>
      <div class="send" @click="sendMessage">{{sendInfo}}</div>
    </div>
  </div>
</template>

<script>
import goodshead from "./goodshead.vue";
  export default {      
    data() {
      return {
        content: '',
        sendInfo: "发送",
        dataList: [],
        autoList: ["你好","在吗","约吗","滚吗"],//这个是关键字
        answers: ['滚','不在，走开','叔叔我们不约','爱过'],//自动回复的内容
        avater:'https://img2.ch999img.com/pic/product/440x440/20190520220253592.jpg.webp'//这个是头像
      }
    },
    components: {
        goodshead
    },
    created() {

    },
    methods: {
      goback() {
        this.$router.go(-1);
      },
      sendMessage() {
        if (this.content == '') {
          return;
        }
        //把自己发送的内容更新到dataList中
        this.dataList.push({
            content: this.content,
            me:true
        });
        let content = this.content
        //机器人延迟回复
        setTimeout(e=>{
            if(this.autoList.indexOf(content) != -1){
                var idx = this.autoList.indexOf(content);
                this.dataList.push({
                    content: this.answers[idx],
                    me:false
                });
            }else{
                this.dataList.push({
                    content: '风太大，我听不见',
                    me:false
                })    
            }
        },2000)
        this.content = '';
      },
    },
  }
</script>

<style lang="scss" scoped>
.g_head{
    background: red;
}
.div-wrap{
  ul{
    margin-top: 1rem;
    margin-bottom: 1.6rem;
  }
}
  .chat {
    bottom: 68px;
    .scroll-wrap {
      background-color: white;
      padding: 5px;
    }
    .chat-box {
      width: 100%;
      margin-bottom: 10px;
      .add-time {
        margin: 0 auto;
        text-align: center;
        font-size: 14px;
        line-height: 1.5rem;
        height: 1.5rem;
        margin-top: 1rem;
        span {
          background-color: rgba(172, 172, 177, 0.29);
          color: white;
          border-radius: 5px;
          padding: 2px 5px;
        }
      }
      .flex {
        display: flex;
      }
      .avater {
        margin: 0 10px;
        width: 40px;
        height: 40px;
        img {
          width: 40px;
        }
      }
      .content {
        max-width: 220px;
        background-color: rgb(218, 187, 132);
        line-height: 25px;
        padding: 7px 1rem;
        overflow-wrap: break-word;
        word-break: break-all;
        border-radius: 10px;
      }
    }
    .chat-right {
      .flex {
        align-items: center;
        justify-content: flex-end
      }
      .toright {
        span {
        }
      }
      .content {
        background-color: greenyellow;
        color: white;
      }
    }
    .chat-footer {
      background-color: #f8f8f8;
      position: fixed;
      bottom: 0;
      box-shadow: 0 0 5px #e0e0e0;
      width: 100%;
      height: 40px;
      padding: 8px 5px 5px;
      display: flex;
      justify-content: center;
      .chat-textarea {
        padding: 2px 5px;
        display: block;
        width: 70%;
        margin: 3px 0;
        border: gainsboro 1px solid;
        border-radius: 5px;
      }
      .send {
        text-align: center;
        width: 20%;
        line-height: 34px;
        background-color: skyblue;
        color: white;
        margin: 3px;
        border-radius: 5px;
      }
      .send:active {
        background-color: skyblue;
      }
    }
  }
</style>