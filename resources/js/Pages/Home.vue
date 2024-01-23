<script setup>
defineProps({
    posts:Object
})
</script>
<template>
    <Main>
        <slot/>
        <PostList v-bind:posts="posts"></PostList>
        
    </Main>
    
</template>

<script>
import PostItem from '../components/Post-Item.vue';
import PostList from '../components/Post-List.vue';
import Main from './Main.vue';

    export default {
    components: { Main, PostItem,PostList },
    }

</script>

<style scoped>

</style>