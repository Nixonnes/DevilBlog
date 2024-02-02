<script setup>
defineProps( {
    id:Number
})
</script>

<template>
    <h1 class="comment_header">Комментарии</h1>
    <div class="comment_place">
        <form  method="post" @submit.prevent="submit">
        <InputLabel for="content"></InputLabel>
        <textarea class="comment" v-model="content"></textarea>
        <PrimaryButton class="sbmt_comment">Отправить</PrimaryButton>
        </form> 
    </div>
</template>

<script>
import axios from 'axios';
import InputLabel from './InputLabel.vue';
import PrimaryButton from './PrimaryButton.vue';
import { usePage } from '@inertiajs/vue3';

    export default {
        props: {
            id:[String,Number]
        },
        data() {
            return {
                content:null,
                post_id:null,
                username:usePage().props.auth.user.name

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
            this.content = null;
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
    .comment_place {
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
    width:15%;
    height:60px;
}
</style>