<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="danger_btn">
        <slot />
    </button>
</template>

<style scoped>
.danger_btn {
    background-color: rgba(182, 6, 6, 0.932);
    padding:15px;
    border-radius: 8px;
    font-weight: 700;
    font-size:15px;
    color:rgb(255, 255, 255);
}
</style>