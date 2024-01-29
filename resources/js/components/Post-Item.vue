

<template>
    <div class="post">
        <slot/>
    </div>
</template>

<script>
    export default {
        props: {
            post: {
                type:Object,
                required:true
            }
        }
    }
</script>

<style scoped>
.post {
    margin-top:20px;
    display:flex;
    flex-direction: column;
    min-height: 100%;
    width:100%;
    height:40px;
    border-bottom:1px solid rgba(0, 0, 0, 0.192)
}

</style>