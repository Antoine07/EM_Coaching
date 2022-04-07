<template>
POST   
<img :src="image" />
</template>

<script setup>
import { useRoute } from 'vue-router';
const route = useRoute()
const post = route.query;
console.log(route.query)

console.log(post.img)
// chemin 
const image = '../assets/' + post.img ; 

</script>

<style scoped>

</style>
