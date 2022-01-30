require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import App from './App.vue';
import Home from '../js/components/Home';
import Transaksi from '../js/components/Transaksi';
import Post from '../js/components/Post';


import VueAxios from  'vue-axios';
import axios from 'axios';

import Vue from 'vue';
Vue.use(VueAxios, axios);

const routes = [
    {
        name: '/',
        path: '/',
        component: Home
    },
    {
        name: '/transaksi',
        path: '/transaksi',
        component: Transaksi
    },
    {
        name: '/post',
        path: '/post',
        component: Post
    }
]

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router },App)).$mount('#app');


