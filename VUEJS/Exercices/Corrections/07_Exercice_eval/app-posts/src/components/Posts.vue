<template>
  <div class="item">
  Posts
  {{ posts }}
   <ul>
      <li v-for="post in posts"><router-link  to="/post/{{post.id}}" >{{post.title}}</router-link></li>
   </ul>
   </div>
</template>

<script setup>
import { ref } from 'vue';

const posts = ref(
[
 { id: 1, title : "MongoDB", description : "blabla", text: "un texte plus long" },
    { id: 2, title : "MySQL", description : "blabla", text: "un texte plus long" },
    { id: 3,  title : "PHP", description : "blabla", text: "un texte plus long" },
    { id: 4,title : "Pyhton", description : "blabla", text: "un texte plus long" },
    { id: 5,title : "Docker", description : "blabla", text: "un texte plus long" },
]
);

</script>

<style scoped>

</style>
