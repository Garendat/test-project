<template>

    <el-container>
        <el-header><h1>Тестовое задание</h1></el-header>
        <el-main class="main_layout">
            <router-view></router-view>
        </el-main>

    </el-container>

</template>

<script>
    export default {
        name: "MainLayout"
    }
</script>

<style lang="scss" scoped>

    .main_layout {
        min-height: 85vh;
    }


</style>
