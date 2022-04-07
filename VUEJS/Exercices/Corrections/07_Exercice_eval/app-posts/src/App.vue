<script setup>
import { RouterLink, RouterView } from 'vue-router'

console.log(process.env)
</script>

<template>
  <header>
    <div class="wrapper">
      <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/posts">Posts</RouterLink>
        <RouterLink to="/user">User</RouterLink>
        <RouterLink to="/bitcoin">Bitcoin</RouterLink>
      </nav>
    </div>
  </header>

  <RouterView />
</template>

<style>


</style>
