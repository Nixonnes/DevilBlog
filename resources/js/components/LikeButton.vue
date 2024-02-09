<script setup>
import axios from 'axios';

defineProps( {
    post_id:Number,
    likes:Number,
    isLiked:Boolean
})
</script>

<template>
    <div>
        <button class="like__btn" @click="toggleLike" v-bind:class="{liked: isLiked}"><img class="like__img" src='/images/like.png' width="20">Нравится {{ likesCount }}</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                likesCount:this.$props.likes,
                isLiked:this.$props.isLiked
            }
        },
        methods:
        {
            toggleLike() {
        axios.post('/like', { post_id: this.$props.post_id })
            .then(response => {
                this.likesCount = response.data.likesCount;

                // Обновление статуса isLiked в зависимости от действия
                if (response.data.action === 'liked') {
                    this.isLiked = true;
                } else {
                    this.isLiked = false;
                }
                this.status= this.isLiked;
            })
            .catch(error => {
                console.error(error);
            });
    },
},
}
</script>

<style scoped>
.like__btn {
    font-weight: 600;
    margin-top:16px;
    background-color: var(--color);
    padding:6px;
    padding-right:16px;
    border-radius:12px;
    border:0.875px solid rgba(0, 0, 0, 0.719);
}
.like__img {
    display: inline;
    margin-left:12px;
    padding-right: 6px;
}
.like__btn:hover {
    background-color:white;
}
.liked {
    background-color:rgb(96, 236, 15)
}

</style>