import Vue from 'vue'
import MintUI from 'mint-ui'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import App from './App.vue';


import router from './router';

import './assets/css/index.css';
import './assets/css/qsb.css';

// import store from './store'


Vue.config.productionTip = false
Vue.use(MintUI)
Vue.use(ElementUI)

new Vue({
  render: h => h(App),
  router

}).$mount('#app')