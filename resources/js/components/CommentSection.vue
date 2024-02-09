<script setup>
defineProps( {
    id:Number,
    comments:Object
})
</script>

<template>
    <h1 class="comment_header">Комментарии</h1>
    <div class="comment_input">
        <form  method="post" @submit.prevent="submit">
        <InputLabel for="content"></InputLabel>
        <textarea class="comment" v-model="content"></textarea>
        <PrimaryButton class="sbmt_comment">Отправить</PrimaryButton>
        </form> 
        <CommentList :comments="this.comments"></CommentList>
    </div>
</template>

<script>
import axios from 'axios';
import InputLabel from './InputLabel.vue';
import PrimaryButton from './PrimaryButton.vue';
import { usePage } from '@inertiajs/vue3';
import CommentList from './Comment-List.vue';

    export default {
        props: {
            id:[String,Number]
        },
        data() {
            return {
                content:null,
                post_id:null,
                username:usePage().props.auth.user.name,
                comments:this.$props.comments

            }
        },
    components: {InputLabel,PrimaryButton},
    methods: {
        submit() {
            axios.post('/addComment', {
                content:this.content,
                post_id: this.$props.id,
                username:this.username
            })
            .then(response => {
                this.fetchComments()
                this.content = null;
            })
            
        },
        fetchComments() {
            axios.get(`/comments/${this.$props.id}`)
            .then(response => {
                this.comments = response.data
            })
            .catch(error => {
        console.error('Ошибка при загрузке комментариев:', error);
      });
        }
    }
}
</script>

<style scoped>
.comment_header {
    margin:32px;
    font-weight: 600;
    font-size: 24px;
}
    .comment_input {
    position:relative;
    min-height:190px;
    }
    .comment {
    min-width: 100%;
    height:120px;
    resize: none;
    border-radius: 7px;
    }
    .sbmt_comment {
    margin-top: 9px;
    padding:13px;
    border-radius: 8px;
    border:1px solid rgba(0, 0, 0, 0.459);
}
</style>