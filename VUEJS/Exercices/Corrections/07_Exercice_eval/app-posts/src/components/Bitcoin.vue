<template>
<div v-if="error">Oops! Error encountered: {{ error }}</div>
  <div v-else-if="data">
    Data loaded:
    <pre>{{ data }}</pre>
  </div>
  <div v-else>Loading...</div>
</template>

<script setup>
import { ref } from 'vue'

// data un état du composant qui peut changer. Pour assigner une valeur à data on écrit data.value = "une valeur"
const data = ref(null)
const error = ref(null)

// requete sur un fichier JSON sur Github 
// fetch une fonction du navigateur qui permet de faire des requêtes asynchrones avec un API HTTP distante
// then c'est résolue, la requête, et on peut chaîner avec un autre then pour modifier la source, par exemple ici en transformant celle-ci en JSON. Le catch va gérer les éventuelles erreurs.
fetch('https://api.coindesk.com/v1/bpi/currentprice.json')
  .then((res) => res.json())
  .then((json) => (data.value = json))
  .catch((err) => (error.value = err))
</script>

<style scoped>

</style>
