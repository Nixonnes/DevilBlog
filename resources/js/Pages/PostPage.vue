<script setup>
defineProps({
    post:Object
})
</script>

<template>
    <AppLayout title="Profile">
    <PostItem :post="post">
        <h1 class="post-head">{{ post.title }} <Link class="edit_btn" :href="route('post.edit', post.id)"><img src='/images/edit_btn.png' width="20"></Link><button type="button" @click="showDeleteSubmit" class="delete_btn"><img src='/images/delete_btn.png' width="20"></button></h1>
        <small class="time_create">{{ new Date(post.created_at).toLocaleString() }}</small>
        <p class="post-content"> {{ post.content}} </p>
        <div class="deleteWindow" v-if="isDelete">
    <p class="delete_msg">Вы действительно хотите удалить данный пост?</p>
    <Link method="delete" :href="route('post.delete',post.id)" class="delete_btns">Удалить</Link>
    <Link href="./" class="delete_btns">Отменить</Link>
</div>
</PostItem>

</AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import PostItem from '../components/Post-Item.vue';
import { Link } from '@inertiajs/vue3';
    export default {
    data() {
        return {
        isDelete:false
        }
    },
    components: { PostItem },
    methods: {
        showDeleteSubmit(event) {
            if(event) {
                this.isDelete = true;
            }
        }
    }
}
</script>

<style scoped>
.post {
    border:none;
    min-height: 100%;
    overflow: hidden;
}
.post-head {
    display: inline-flex;
    justify-content: space-between;
    margin-top:30px;
    padding:10px;
    border-bottom:1px solid rgba(0, 0, 0, 0.192);
    font-weight:600;
    font-size: 24px;
    
}
.time_create {
    position: absolute;
    left:1420px;
    top:185px;
    color:#0000009d;
    font-weight:600;
    font-size:13px;
}
.post-content {
    margin-top: 60px;
    font-size:17px;
    color:black;
    white-space: pre;
}
.edit_btn {
    position: absolute;
    top:128px;
    left:1508px;
}
.delete_btn {
    position: absolute;
    left:1540px;
    top:128px;
}
.post-card {
    min-height:100%;
}
.deleteWindow {
    position: absolute;

    top:32vh;
    min-width:60%;
    min-height:385px;
    background-color: #313131;
    font-size: 26px;
    z-index: 1000;
}
.delete_msg {
    position: relative;
    top:60px;
    text-align: center;
    color:#e9ec24dc;
}
.delete_btns {
    position: relative;
    top:240px;
    margin:40px;
    padding:12px;
    border-radius: 5px;
    left:385px;
    background-color: #e9ec24d5;
}
</style>