

<template>
    <div class="comment">
        <slot/>
    </div>
</template>

<script>
    export default {
        props: {
            comment: {
                type:Object,
                required:true
            }
        }
    }
</script>

<style scoped>
.comment {
    margin-top:20px;
    display:flex;
    flex-direction: column;
    min-height: 100%;
    width:100%;
    min-height:40px;
}

</style>