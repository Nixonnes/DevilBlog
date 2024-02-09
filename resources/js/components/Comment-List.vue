<script setup>
defineProps( {
    comments:Object,
    user_id:Number,
})

</script>

<template>
    <div class="comment-list" v-for="comment in comments" :key="comment.id">
    <Comment-Item :comment="comment" >
        <h2 class="comment_header">{{ comment.username}} <button class="comment_delete" v-if="canDeleteComment(comment)" @click="deleteComment(comment)"><img src='/images/delete_btn.png' width="20"></button></h2>
            <p class="comment_name">{{ comment.content}}</p>
            
            <slot/>
        
        
    </Comment-Item>
</div>
</template>

<script>
import { usePage } from '@inertiajs/vue3';
import CommentItem from './Comment-Item.vue';
import axios from 'axios';
    export default {
        props: {
            comments: {
                type:Array,
                required:true,
            }
        },
        components: {
            CommentItem,
        },
        methods: {
            canDeleteComment(comment) {
                return (comment.post_id === this.user_id || comment.user_id === usePage().props.auth.user.id)
            },
            deleteComment(comment) {
                axios.delete(`/comments/${comment.id}/delete`)
                .then(response => {
                    console.log(response);
                })
            }
        }
    }
</script>

<style scoped>
.comment_header {
    font-weight: 600;
    display: inline-flex;
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
.comment_delete {
    display:inline;
}
</style>