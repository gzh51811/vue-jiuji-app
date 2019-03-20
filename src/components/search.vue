<template>
  <header id="search">
    <mt-search
      v-model="value"
      cancel-text="取消"
      placeholder="搜索"
      :show="true" class="search" >   
    </mt-search>


  </header>
</template>

<script>
import Vue from 'vue';
import 'mint-ui/lib/style.css'
import { Search } from 'mint-ui';
Vue.component(Search.name, Search);
export default {
    data(){
         return {
             value:'',
            //  result:['3333','r']
         }
    }
}
</script>

<style >
    #search{
      width: 100%;
      display:flex;
      flex-direction: column;
      background:#E61A01 !important;
    }
    /*!important*/
    .mint-searchbar-inner{
      margin-top: 3px;
      height: 30px ;
    }
    .mint-search-list{
      height: 30px;
    }
    .mint-tab-item-label{
      color:#fff;
    }

   /* .search{
      width: 100%;
      display:flex;
      flex-direction: column;
    }*/
    .mint-searchbar{
        background: #E61A01;
    }
    .mint-searchbar-inner,.mint-searchbar-core{
        background:darkred;
        border-radius: 25px;
    }
    .mint-searchbar-cancel{
        color:white;
    }
</style>