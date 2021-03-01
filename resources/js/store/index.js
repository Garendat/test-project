import Vue from 'vue';
import Vuex from 'vuex';


//Vuex modules
import houses from './modules/houses'

Vue.use(Vuex)


let store =  new Vuex.Store ({
    useStrict: true,
    state: {

    },
    mutations: {

    },
    actions: {

    },
    getters: {

    },
    modules: {
        houses
    }
})


import axios_instance from '../config/http'
store.$axios = axios_instance


export default store

