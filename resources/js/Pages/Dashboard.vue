<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    posts:Object
})
</script>

<template>
    <AppLayout title="Профиль">
        
            <h2 class= "hello_user">
                Добро пожаловать, {{ $page.props.auth.user.name }}
            </h2>
            <div class="admin__btns">
            <button class="admin_btn"><Link href="/newPost">Создать пост</Link></button>
            </div>
            <PostList v-bind:posts="posts"></PostList>
    </AppLayout>
</template>

<script>
import PostList from '@/components/Post-List.vue';
</script>

<style scoped>
.hello_user {
    margin-top: 40px;
    font-weight: 600;
}
.admin_btn {
    margin-top: 40px;
    height:45px;
    width:160px;
    background: none;
    background-color: rgba(223, 213, 72, 0.788);
    font-weight: 600;
    color:rgb(0, 0, 0);
    border:1.5px solid black;
    border-radius: 5px;
    font-size:18px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
}
</style>