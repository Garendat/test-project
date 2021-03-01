<template>
    <el-table
        :data="tableData"
        v-if=""
        border

        style="width: 100%">
        <el-table-column
            v-for="column in columns"
            :key="column.prop"
            :prop="column.prop"
            :label="column.label || 'Not Label'"
            :width="column.width">
        </el-table-column>
        <template v-slot:empty>
            <h3>Данных не нашлось</h3>
        </template>
    </el-table>
</template>

<script>
    export default {
        name: "Table",
        props: {
            tableData: {
                type: Array,
                default: () => []
            },
            columns: {
                type: Array,
                default: () => []
            }
        },
        methods: {
        }
    }
</script>

<style scoped>

</style>
