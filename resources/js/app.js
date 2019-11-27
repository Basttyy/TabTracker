import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import router from './router/index'
import App from './views/App'

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});