<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Link :href="'/'">
        <h1 class="logo">DevilBlog</h1>
    </Link>
</template>

<style scoped>
.logo {
    font-size:36px;
}
</style>