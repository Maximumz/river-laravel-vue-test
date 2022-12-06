/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import App from './App.vue';
import Home from './components/home/Home';
import ElementPlus from 'element-plus';
import 'element-plus/dist/index.css';
import mitt from 'mitt';
const emitter = mitt();

const router = createRouter({
    history: createWebHistory('/'),
    routes: [{ path: '/', name: 'home', component: Home }],
});

const app = createApp(App);
app.use(router);
app.use(ElementPlus);
app.config.globalProperties.emitter = emitter;
app.mount('#app');
