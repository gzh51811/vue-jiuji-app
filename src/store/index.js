// 引入
import Vue from 'vue';
import Vuex, {
    Store
} from 'vuex';

import state from './state';

// 使用
Vue.use(Vuex);

// 核心概念
// 1. store ： 一个用于存储仓库
// 2. state ：状态（数据，相当于组件中的data）
// 3. getters:（理解为组件中的computed，只读）
// 4. mutations ：负责更改state中的数据（同步，理解为组件中的methods）
// 5. actions : 类似于 mutations，负责做异步操作
// * actions用来操作mutations，mutations用来操作state


const store = new Store({
    // 公共数据
    state,

    // getters:{
    //     lt1k(state){
    //         return state.cartlist.filter(goods=>goods.price<1000);
    //     }
    // },

    // 定义state的修改方式：mutations
    mutations: {
        // 初始化
        cartdefault() {

        },
        // 添加商品
        addCartList(state, goods) {
            // state: 定义的stat
            // goods: 触发addCartList时传入的参数
            state.cartlist.push(goods);
        },

        changeCartlist(state, payload) {
            state.cartlist = [];
            // console.log(payload)
            // state.cartlist.push(payload);
            payload.map(function (item) {
                state.cartlist.push(item);
            })
        },

        // 修改数量
        changeQty(state, {
            qty,
            goods_id
        }) {
            state.cartlist.forEach(goods => {
                if (goods.goods_id === goods_id) {
                    goods.qty = qty;
                }
            })
        },

        // 删除商品
        removeGoods(state, goods_id) {
            for (var i = 0; i < state.cartlist.length; i++) {
                if (state.cartlist[i].goods_id === goods_id) {
                    break;
                }
            }
            state.cartlist.splice(i, 1);
        }
    },

    actions: {
        cartrender(context, payload){
            // context ： 类似store的对象

            // this.$axios.get('http://localhost:5201/cartlist.php',{
            //     params:{

            //     }
            // }).then(res=>{
            //     console.log('购物车渲染',render);
            // })
            context.commit('changeCartlist', payload)

        },
        getcartData(context) {
            // context ： 类似store的对象
            //, payload
            this._vm.$axios.get('http://localhost:5201/api/cartlist.php', {
                params: {

                }
            }).then(res => {
                let data = res.data;
                context.commit('changeCartlist', data.list);
            })

        },
        //删除购物车
        delcart(context, payload) {
            this._vm.$axios({
                method: 'get',
                url: 'http://localhost:5201/api/cartlistdel.php',
                params: payload,
            }).then(res => {
                // console.log(res);
                context.commit('changeCartlist', res.data);
            });
        },
    }
});

export default store;