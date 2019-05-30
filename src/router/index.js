/**
 * hash路由的原理
 * * 表面：根据hash值的改变来渲染不同的组件
 * * 底层：根据window的hashchange事件来相应不同的组件
 */
import Vue from 'vue';
import VueRouter from 'vue-router';


// import "../assets/css/index.css";

import Home from '../pages/Home.vue'
import List from '../pages/List.vue'
import Goods from '../pages/goods.vue'
import Classify from '../pages/Classify.vue'
import Message from '../pages/Message.vue'
import Cart from '../pages/Cart.vue'
import Mine from '../pages/Mine.vue'
import Info from '../pages/Info.vue'
import Search from '../pages/Search.vue'
import ChangeInfo from '../pages/ChangeInfo.vue'
// import NotFound from '../components/NotFound'

import Login from '../pages/Login.vue'
import register from '../pages/register.vue'
import setting from '../pages/setting.vue'

import "../assets/font/iconfont.css"
import "../assets/css/qsb.css"

import axios from "axios";

Vue.prototype.$axios = axios;


Vue.use(VueRouter);
Vue.prototype.$axios = axios;

let router = new VueRouter({
    mode:'history',
    routes: [
        // 首页:当浏览器地址为path路径是时，自动渲染component对应组件
        {
            path: '/', //重定向：当浏览器url地址为/,自动跳转到/home
            redirect: 'home'
        },
        {
            name: 'Home',
            path: '/home',
            component: Home
        },
        {
            name: 'List',
            path: '/list/:id',
            component: List
        },
        {
            name: 'Goods',
            path: '/goods/:cid',
            component: Goods
        },
        {
            name: 'Classify',
            path: '/classify',
            component: Classify
        },
        {
            name: 'Cart',
            path: '/cart',
            component: Cart
        },
        {
            name: 'Login',
            path: '/login',
            component: Login
        },
        {
            name: 'Mine',
            path: '/mine',
            component: Mine
        },
        {
            name: 'Info',
            path: '/info',
            component: Info
        },
        {
            name: 'Message',
            path: '/message',
            component: Message
        },
        {
            name: 'register',
            path: '/register',
            component: register
        },
        {
            name: 'setting',
            path: '/setting',
            component: setting
        },
        {
            name: 'ChangeInfo',
            path: '/ChangeInfo',
            component: ChangeInfo
        },
        {
            name: 'Search',
            path: '/search',
            component: Search
        }
    ]
});

// 全局路由守卫
// 路由拦截：
router.beforeEach((to, from, next) => {
    // console.log('beforeEach',to,from,next)

    if (to.meta.requiresAuth) {
        // 需要登录的模块，判断是否已登录
        let username = localStorage.getItem('username');
        if (username) {
            next();
        } else {
            // console.log('from:', to.fullPath)
            // 重定向到登录页面
            next({
                name: 'Login',
                params: {
                    from: to.fullPath
                }
            })
        }
    } else {
        next();
    }


});

export default router;