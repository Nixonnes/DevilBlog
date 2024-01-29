<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <h1 class="post-list-header">Список постов</h1>
    <div class="post-list" v-for="post in posts" :key="post.id">
    <Post-Item :post="post" >
        <h2 class="post_header"> <Link :href="route('post.show', { id: post.id })"> <p class="post_name">{{ post.title }}</p> </Link>
            <slot/>
        </h2>
        
    </Post-Item>
</div>
</template>

<script>
import PostItem from './Post-Item.vue'
    export default {
        props: {
            posts: {
                type:Array,
                required:true,
            }
        },
        components: {
            PostItem,
        }
    }
</script>

<style scoped>
.post_header {
    font-weight: 600;
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-between;
    overflow: hidden;
    text-overflow: ellipsis
}
.post-list-header {
    padding:32px 32px 32px 0px;
    font-weight: 600;
    font-size:30px;
}
h2 {
    display:flex;
    justify-content: space-between;
    
}
.edit_btn {
    position: relative;
    left:1160px;
    top:-12px;
}
.delete_btn {
    position: relative;
    left:1190px;
    top:-32px;
}
</style>