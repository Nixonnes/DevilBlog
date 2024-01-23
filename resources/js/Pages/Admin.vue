<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    posts:Object
})
</script>

<template>
    <Main>
        <h1>Админ-панель</h1>
        <div class="admin__btns">
            <button class="admin_btn"><Link href="/newPost">Создать пост</Link></button>
        </div>
        <PostList v-bind:posts="posts">
            <div class="edit__btns">
        <Link class="admin_edit" :href="route('post.edit')">Изменить</Link>
        <Link class="admin_edit" href="/admin/delete">Удалить</Link>
        </div>
        </PostList>
    </Main>
        
    
    

</template>

<script>
import Home from './Home.vue'
import Main from './Main.vue';
import PostList from '../components/Post-List.vue';
export default {
components: {
}
}

</script>

<style scoped>
h1 {
    padding:30px;
}
.admin__btns {
    margin:30px;
    height:40px;

}
.admin_btn {
    height:45px;
    width:140px;
    background: none;
    background-color: rgba(20, 20, 20, 0.774);
    color:rgb(235, 140, 52);
    border:1.5px solid black;
    border-radius: 5px;
    font-size:18px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.edit__btns {
    display:inline;
}
.admin_edit {
    font-size: 16px;
    margin:15px;
}
</style>