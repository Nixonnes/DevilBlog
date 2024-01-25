<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import PostList from '@/components/Post-List.vue';

defineProps({
    posts:Object
})
</script>

<template>
    <AppLayout title="Profile">
        <template #header>
            <h2 class="font-semibold text-gray-800 leading-tight">
                Добро пожаловать, {{ $page.props.auth.user.name }}
            </h2>
            <PostList v-bind:posts="posts"></PostList>
            
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            </div>
        </div>
    </AppLayout>
</template>
