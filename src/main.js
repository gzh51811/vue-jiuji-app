import Vue from 'vue'
import MintUI from 'mint-ui'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import axios from 'axios'
import './assets/css/index.css'
import "./assets/css/11.css";




import App from './App.vue';
// import "./assets/css/index.css";
import "./js/rem";
import router from './router';

import './assets/css/index.css';

// import store from './store'
Vue.prototype.$axios = axios;

Vue.config.productionTip = false
Vue.use(MintUI)
Vue.use(ElementUI)

new Vue({
  render: h => h(App),
  router

}).$mount('#app')
