<template>
    <AppLayout>
        <div class="community">
        <h1 class="comm_head">Сообщество</h1>
        <div class="comm_menu">
            <NavLink class="comm__links">Люди</NavLink>
        </div>
    </div>
    </AppLayout>
</template>

<script>
import NavLink from '@/Components/NavLink.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

    export default {
    components: { AppLayout, NavLink }
}
</script>

<style  scoped>
.community {

}
.comm_head {
    position: relative;
    top:80px;
    left:36px;
    font-size:32px;
    font-weight: 600;
    min-height:100%;
}
.comm_menu {
    display:inline-flex;
    position: relative;
    top:126px;
}
.comm__links {
    left:0px;
}
</style>