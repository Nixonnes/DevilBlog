<template>
    <h1 class="comment_header">Комментарии</h1>
    <div class="comment_place">
        <InputLabel for="content"></InputLabel>
        <TextInput
        id="content"
        v-model="content"
        type="text"
        required
        autofocus
        />
    </div>
</template>

<script>
import InputLabel from './InputLabel.vue';
import TextInput from './TextInput.vue';

    export default {
    components: { TextInput, InputLabel }
}
</script>

<style scoped>
.comment_header {
    margin:32px;
    font-weight: 600;
    font-size: 24px;
}
    .comment_place {
        position:relative;
        height:145px;
        
    }
</style>