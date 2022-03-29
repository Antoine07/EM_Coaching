<script setup>
import { ref } from 'vue'

// states à l'intérieur du composant des variables qui sont mutables
const name = ref('')
const age = ref('')

// props cela est injecté en lecture seule
const props = defineProps(['title']);

// fait remonter un état on définit une clé pour faire remonter l'état emit au parent
const emit = defineEmits(['addStudent'])

function checkForm(e){
	e.preventDefault()

	// envoie des data à un parent @addStudent dans le parent <=> liaison
	emit('addStudent', {name: name.value, age: age.value} )

	name.value = ''
	age.value = ''
}
</script>

<template>
<h1>{{ title }} </h1>
<form @submit="checkForm" >
	<input v-model="name" placeholder="name..." required />
	<input v-model="age" placeholder="age..." required  />
	<button>Ok</button>
</form>
</template>