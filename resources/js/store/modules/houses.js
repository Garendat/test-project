export default {
    namespaced: true,
    state: {
        data: [],
    },
    mutations: {
        setData(state, data) {
            state.data = data
        }
    },
    actions: {
        getData(context, params) {
            return this.$axios.get('/houses', { params }).then(response => {
                context.commit('setData', response.data.data);
            })
        }
    },
    getters: {
        data: state => {
            return state.data
        },

    }
}
