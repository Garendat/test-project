import Vue from 'vue'
import store from './store'
import router from './routes.js'
import App from "./views/App.vue";

require('./bootstrap');

Vue.config.productionTip = false;




const app = new Vue({
    store,
    el: '#app',
    router,
    render: h => h(App)
})
