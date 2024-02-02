<script setup>
defineProps( {
    comments:Object
})
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <div class="post-list" v-for="comment in comments" :key="comment.id">
    <Comment-Item :comment="comment" >
        <h2 class="post_header"> <p class="post_name">{{ comment.username}}</p>
            <p class="post_name">{{ comment.content}}</p>
            <slot/>
        </h2>
        
    </Comment-Item>
</div>
</template>

<script>
import CommentItem from './Comment-Item.vue';
    export default {
        props: {
            comments: {
                type:Array,
                required:true,
            }
        },
        components: {
            CommentItem,
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