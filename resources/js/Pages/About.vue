<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
</script>

<template>
    <div>
        <AppLayout title="Profile">
            <div class="about_content">
                
            <h1 class="about_head">О приложении</h1>
            <p><strong>DevilBlog</strong> был создан 19 января 2023 года как пет-проект для портфолио.</p>
            <p>Я планирую сделать своеобразную социальную сеть разработчиков, где они смогут вести дневники разработки 
                и разрешать другим пользователям читать их.
            </p>
        </div>
    </AppLayout>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style scoped>
.about_content {
    padding:18px;
    font-size:1.09rem;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
}
.about_head {
    font-size: 24px;
    font-weight: 600;
    padding-bottom: 50px;
}
</style>