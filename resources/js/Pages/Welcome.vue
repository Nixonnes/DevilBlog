<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Welcome" />

    <div class=" welcome_window relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center  dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="welcome_logo">
            <div v-if="canLogin" class="header__btns">
            <Link v-if="$page.props.auth.user" :href="route('profile')" class="welcome_btns">Профиль</Link>

            <template v-else>
                <Link :href="route('login')" class="welcome_btns">Войти</Link>

                <Link v-if="canRegister" :href="route('register')" class="welcome_btns">Регистрация</Link>
            </template>
        </div>
                <ApplicationLogo class="welcome_logotype"></ApplicationLogo>
            </div>
        <div class="main">
        <div class="description_app">
            <h1 class="slogan">Write,Think and Do</h1>
            <p class="additional_text">DevilBlog is the best place for your development journal!</p>
            <p class="additional_text">Write,share your experience with other people around the world</p>
        </div>
        
        
        
            <div class="description">
                
            </div>
        </div>
        </div>
</template>

<style>
.welcome_window {
    background-color: #ffffff96;
}
.main {
    min-height: 100vh;
    margin-left:20%;
    margin-right:20%;
    width:100%;
}
.logo.welcome_logotype {
    position: relative;
    top:2px;
    font-size: 30px;
    font-weight:800;
    max-width: fit-content;
}
.description_app {
    position:absolute;
    top:160px;
    left:33%;
    
}
.slogan {
    position:relative;
    left:45px;
    font-size: 56px;
    font-weight: 700;
}
.additional_text {
    margin-top: 38px;
    font-size:22px;
    font-weight: 500;
}
.header__btns {
    position:relative;
    left:85%;
}
.welcome_btns {
    font-weight: 600;
    font-size: 18px;
    color: #333333ea;
    margin:18px;
}
.welcome_btns :hover {
    color:black;
}
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
.welcome_logo {
    display:flex;
    align-items: center;
    width:100%;
    position:absolute;
    top:0px;
    background-color: #e9ec2496;
    border-bottom: 1px solid rgba(0, 0, 0, 0.253);
}
</style>
