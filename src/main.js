import Vue from 'vue'
import MintUI from 'mint-ui'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';






import './assets/css/index.css';
import './assets/css/flashbuy.css';
import './assets/css/home.css';

import store from './store'


import axios from 'axios'
import './assets/css/index.css'
import "./assets/css/11.css";



import App from './App.vue';
// import "./assets/css/index.css";
import "./js/rem";
import router from './router';



// import store from './store'
Vue.prototype.$axios = axios;


Vue.config.productionTip = false
Vue.use(MintUI)
Vue.use(ElementUI)

new Vue({
  render: h => h(App),
  router,
  store
}).$mount('#app')
