import {createApp} from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import { createStore } from 'vuex'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap'

import App from './App.vue'
import Main from './component/Main.vue'

import axios from 'axios'

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', name: 'main', component: Main },
        { path: '/page', name: 'page', component: () => import('./component/Page.vue') },
        { path: '/send', name: 'send', component: Main },
    ],
});

const store = createStore({
    state () {
        return {
            name: '',
            comment: ''
        }
    },
    getters: {
    },
    mutations: {
    },
    actions: {
    },
    modules: {
    }
})

const app = createApp(App)

app.use(router)
app.use(store)
app.mount("#app")