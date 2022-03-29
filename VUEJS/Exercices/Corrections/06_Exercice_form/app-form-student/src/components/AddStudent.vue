<script setup>
import { ref } from 'vue'

const name = ref('')
</script>

<template>
  <p>Name is: {{ name }}</p>
	<input v-model="name" placeholder="edit me" />
</template>