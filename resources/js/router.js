import Vue from 'vue'
import VueRouter from 'vue-router'

// layout
import MainLayout from "./layouts/MainLayout";

// Screens
import HousesFilterScreen from './screens/HousesFilterScreen.vue'


Vue.use(VueRouter)


const routes = [{
    path: '/',
    name: 'MainLayout',
    component: MainLayout,
    children: [
        {
            path: '',
            name: 'HousesFilterScreen',
            component: HousesFilterScreen,
        },
    ]
},];


const router = new VueRouter
({
    mode: 'history',
    routes: routes
})

export default router
