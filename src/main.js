import Vue from 'vue'
import MintUI from 'mint-ui'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import App from './App.vue';
import '../src/assets/font_1093215_yvzhx8e0fpm/iconfont.css';
import '../src/assets/css/index.css';
import '../src/assets/css/123.css';
Vue.config.productionTip = false
Vue.use(MintUI)
Vue.use(ElementUI)

new Vue({
  render: h => h(App),
}).$mount('#app')