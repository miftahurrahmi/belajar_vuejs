require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import App from './App.vue';
import Home from '../js/components/Home';
import Transaksi from '../js/components/Transaksi';



import VueAxios from 'vue-axios';
import axios from 'axios';

Vue.use(VueAxios, axios);

const routes = [
    {
        name: '/',
        path: '/',
        component: Home
    },
    {
        name: '/',
        path: '/',
        component: Transaksi
    }
]

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(vue.util.extend(App)).$mount('#app');


