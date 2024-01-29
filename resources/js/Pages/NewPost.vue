<script setup>
defineProps({
user:Object
})
</script>

<template>
    <AppLayout title="Profile">
        <div class="add_post_window">
            <form class ="add_form" method="post" @submit.prevent="submit">
                <h1 class="add_head">Создание нового поста</h1>
                <label class = "add_label">Название поста</label>
                <input class = "add_input" type="text" v-model="title">
                <label class = "add_label">Содержание</label>
                <textarea  wrap="soft" class = "add_text" v-model="content"></textarea>
                <button type="submit" class="add__btn">Сохранить</button>
        </form>
        </div>
    </AppLayout>

</template>

<script>
import axios from 'axios';
import AppLayout from '@/Layouts/AppLayout.vue'
    export default {
  components: {
    AppLayout,
  },
        data() {
            return {
                title:null,
                content:null,
                user_id:2
            }
        },
    methods: {
    submit() {
    axios.post('/addPost', {
        title:this.title,
        content: this.content,
        user_id: this.user_id
    })
    .then(function (response) {
        window.location = "/dashboard";
})
    }
}
    }
</script>

<style scoped>
h1 {
    padding:25px;
    color:rgba(0, 0, 0, 0.938);
}
.add_post_window {
    /*background-color: rgb(70, 70, 70);*/
    min-height:100vh;
}
.add_head {
    font-size: 32px;
    font-weight: 600;
}
.add_form {
    margin-left:80px;
    font-size:19px;
}

.add_label {
    margin-top:40px;
    display: block;
    font-size: 21px;
    color:rgba(8, 7, 17, 0.76);

}

.add_input {
    margin-top:15px;
    height:42px;
    width:88%;
    font-size: 18px;
    border-radius: 5px;
}

.add_text {
    resize: none;
    height: 460px;
    width:88%;
    overflow-y:scroll;
    overflow-wrap: break-word;
    font-size: 18px;
    border-radius: 7px;

}
.add__btn {
    margin-left:40%;
    margin-top:80px;
    padding:12px;
    display:block;
    background-color: rgb(181, 200, 231);
    border:1px solid orange;
    border-radius: 6px;
    color:rgb(0, 0, 0);
    font-size:20px;
    cursor: pointer;
}
</style>