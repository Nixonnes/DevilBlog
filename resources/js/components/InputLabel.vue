<script setup>
defineProps({
    value: String,
});
</script>

<template>
    <label class="block text-sm text-gray-700 font-semibold">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
