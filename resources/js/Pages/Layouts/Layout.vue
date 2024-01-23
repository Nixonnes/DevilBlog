<script setup>
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <header>
      <h1 class="logo">DevilBlog</h1>
      <div class="menu">
      <Link href="/">На главную</Link>
      <Link href="/about">О приложении</Link>
      <Link href="/contact">Связаться</Link>
      <Link href="/admin">Админ-панель</Link>
    </div>
    </header>
    <main>
      <slot/>
    </main>
</template>

<style scoped>
header {
  display:flex;
  justify-content: space-between;
  align-items:center;
  height:70px;
  background-color: #fdb352;
}
.logo {
  display:inline;
  padding:20px;
}

.menu {
  padding:30px;
  margin-right: 280px;
}
.menu a {
  margin-inline-start: 180px;
  font-size:18px;
  font-weight:600;
}

main {
  margin-left:20%;
  margin-right:20%;
  min-height: 100%;
}

</style>