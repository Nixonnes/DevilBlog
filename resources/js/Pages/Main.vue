<script setup>
import Layout from './Layouts/Layout.vue'
</script>

<template>
    <div class="app">
        <Layout>
            <slot/>
        </Layout>
    </div>
</template>

<script>
    export default {

    }
</script>

<style>
* {
    margin:0;
    padding:0;
    box-sizing: border-box;
}
a {
    text-decoration: none;
    color:inherit;
}
.app {
    position:fixed;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    height:100%;
    width:100%;
    overflow-y:scroll;
    background-color: rgba(182, 190, 238, 0.452);
}

.header {
    background-color: rgb(218, 151, 26);
    height:65px;
    color:rgb(32, 30, 30);
}
.logo {
    padding:15px;
    margin-left:40px;
    font-size: 34px;
}
</style>