<script setup>
defineProps({
    post:Object
})
</script>

<template>
    <Main>
    <div class="post-card">
    <PostItem :post="post">
        <h1 class="post-head">{{ post.title }} </h1>
        <p class="post-content"> {{ post.content }} </p>
</PostItem>
</div>
</Main>
</template>

<script>
import PostItem from '../components/Post-Item.vue';
import Main from './Main.vue';

    export default {
    components: { PostItem }
}
</script>

<style scoped>
.post {
    border:none;
}
.post-head {
    margin-top:30px;
    padding:10px;
    border-bottom:1px solid rgba(0, 0, 0, 0.192)
}
.post-content {
    margin-top: 60px;
    font-size:22px;
    color:black;
}
</style>