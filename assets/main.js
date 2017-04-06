/**
 * Created by pk on 2017/4/3.
 */

import Vue from 'vue';
import Index from '@page/Index';
import Router from 'vue-router';
import Info from '@page/Info';
import Parent from '@components/Parent';
import VueResource from 'vue-resource';

Vue.use(Router);
Vue.use(VueResource);

const routes = [
    {
        path:'/vue',
        children:[
            {
                path: 'resume',
                component: Info,
                name: 'resume'
            },
            {
                path: '/',
                component: Index ,
                name: 'index'
            }
        ],
        component: Parent
    },
    {
        path: '/',
        redirect: '/vue'
    }
]

const router = new Router(
    {
        routes,
        mode: 'history',
    }
)

var vm = new Vue({
    router
}).$mount('#app')



