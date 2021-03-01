<template>

    <div>
        <el-form :inline="true" class="demo-form-inline">
            <el-form-item
                v-for="column in tableColumns"
                v-if="filterColumns.indexOf(column.prop) > -1"
                :key="column.prop"
                :label="column.label"
                :prop="column.prop"
            >
                <el-input v-model="column.value" :type="column.type" placeholder="Введите значение"></el-input>
            </el-form-item>
            <el-form-item>
                <el-button type="primary" :disabled="disabledSend" @click="sendRequest">Применить</el-button>
            </el-form-item>
        </el-form>


        <table-houses
            :columns="tableColumns"
            :table-data="tableData"
        />
    </div>

</template>


<script>
    import { required, minLength } from 'vuelidate/lib/validators'
    import TableHouses from "../components/Table.vue";
    import Toast from '../mixins/toast'
    export default {
        name: "HousesFilterScreen",
        components: {
            TableHouses
        },
        mixins: [ Toast ],
        data() {
            return {
                tableColumns: [
                    {
                        prop: 'name',
                        label: 'Название',
                        value: null,
                        type: 'text',
                    },
                    {
                        prop: 'price',
                        label: 'Цена',
                        value: null,
                        type: 'number',
                    },
                    {
                        prop: 'bedrooms',
                        label: 'Кол-во спален',
                        value: null,
                        type: 'number',
                    },
                    {
                        prop: 'storeys',
                        label: 'Этажность',
                        value: null,
                        type: 'number',
                    },
                    {
                        prop: 'garages',
                        label: 'Кол-во гаражей',
                        value: null,
                        type: 'number',
                    },
                ],
                filterColumns: [
                    'name',
                    'price',
                    'bedrooms',
                    'bathrooms',
                    'storeys',
                    'garages'
                ],

            };
        },

        mounted() {
            this.setParamsInRoute()
            this.sendRequest()
        },

        computed: {
            tableData() {
                return this.$store.getters['houses/data']
            },

            params() {
                let params = {}

                this.filterColumns.forEach(key => {
                    let item = this.tableColumns.find(item => item.prop === key)
                    if( item && item.value ) {
                        params[item.prop] =  item.value
                    }

                })

                return params;
            },

            disabledSend() {
                return !this.tableColumns.some(item => item.value !== null)
            }
        },

        methods: {
            sendRequest() {

                let loading = this.$loading({
                    lock: true,
                    text: 'Загрузка...',
                    spinner: 'el-icon-loading',
                    background: 'rgba(0, 0, 0, 0.7)'
                })

                this.$router.replace( { query: this.params } )

                this.$store.dispatch('houses/getData', this.params).catch( errors => {
                    this.globalToastError(errors.response.data)
                }).finally(() => {
                    loading.close();
                });
            },

            setParamsInRoute() {
                this.tableColumns.forEach(item => {
                    if( this.$route.query[item.prop] ) {
                        item.value = this.$route.query[item.prop]
                    }
                })
            }
        }


    }

</script>

<style>



</style>
