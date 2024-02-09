<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="primary_btn">
        <slot />
    </button>
</template>
<style scoped>
.primary_btn {
    background-color: var(--color);
    padding:15px;
    border-radius: 8px;
    font-weight: 600;
    border:1px solid rgba(160, 159, 159, 0.521);
    min-width:120px;
}
</style>