import Vue from 'vue'
import VueRouter from 'vue-router'

// Screens
import HousesFilterScreen from './screens/HousesFilterScreen.vue'


Vue.use(VueRouter)


const routes = [{
    path: '/',
    name: 'HousesFilterScreen',
    component: HousesFilterScreen
},];


const router = new VueRouter
({
    mode: 'history',
    routes
})

export default router
