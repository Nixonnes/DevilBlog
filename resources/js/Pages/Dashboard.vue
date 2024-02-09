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
    height:38px;
    width:124px;
    background: none;
    background-color: var(--color);
    font-weight: 600;
    color:#000000ce;
    border:1px solid rgba(0, 0, 0, 0.267);
    border-radius: 4px;
    box-shadow: black 1px 1.35px;
    font-size:16px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
}
</style>