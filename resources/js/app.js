import Vue from 'vue'
import store from './store'
import router from './router'
import App from "./views/App.vue";
import Element from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import Vuelidate from 'vuelidate'



require('./bootstrap');

Vue.use(Element, { size: 'small', zIndex: 3000 });
Vue.use(Vuelidate)
Vue.config.productionTip = false;




const app = new Vue({
    store,
    el: '#app',
    router,
    render: h => h(App)
})
