<script setup>
defineProps( {
    comments:Object
})
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <div class="comment-list" v-for="comment in comments" :key="comment.id">
    <Comment-Item :comment="comment" >
        <h2 class="comment_header">{{ comment.username}} </h2>
            <p class="comment_name">{{ comment.content}}</p>
            <slot/>
        
        
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
.comment_header {
    font-weight: 600;
    display: inline-block;
    flex-wrap: nowrap;
    justify-content: space-between;
    overflow: hidden;
    border-bottom: 1px solid rgba(0, 0, 0, 0.226);
}
.comment_name {
    margin-top:20px;
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