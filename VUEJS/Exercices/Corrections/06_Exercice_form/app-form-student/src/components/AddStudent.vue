<script setup>
import { ref, defineEmits } from 'vue'
const name = ref('')
const age = ref('')
const emit = defineEmits(['addStudent'])

function checkForm(e){
	e.preventDefault()

	emit('addStudent', {name : name.value, age : age.value} )

	name.value = ''
	age.value = ''
}
</script>

<template>
<form @submit="checkForm" >
	<input v-model="name" placeholder="name..." required />
	<input v-model="age" placeholder="age..." required  />
	<button>Ok</button>
</form>
</template>