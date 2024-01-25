<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

</script>

<template>
    <Link :href="href" class="menu__btns">
        <slot />
    </Link>
</template>

<style scoped>
.menu__btns {
    position: relative;
    right:450px;
    margin-inline: 15px;
    font-weight: 500;
    font-size:18px;
}
</style>