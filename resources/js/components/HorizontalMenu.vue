<template>
    <div class="menu">
        <Link class="horizontal_menu_btn">Лента</Link>
        <Link class="horizontal_menu_btn">Подписки</Link>
        <Link class="horizontal_menu_btn">Сообщество</Link>
        <Link class="horizontal_menu_btn">Поддержка</Link>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';

    export default {
    components: {Link }
}
</script>

<style scoped>
.menu {
    max-width: 15%;
    min-width:15%;
    position:absolute;
    top:45px;
    min-height:100%;
}
.horizontal_menu_btn {
    position: relative;
    display:block;
    margin-bottom:32px;
    left:22%;
    top:235px;
    font-size:18px;
    font-weight: 600;
}
</style>