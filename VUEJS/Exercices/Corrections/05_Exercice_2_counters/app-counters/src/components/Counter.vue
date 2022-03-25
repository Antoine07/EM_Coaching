<script setup>
import { ref } from 'vue';

// une variable d'état initialisée à 0
const count = ref(0);

// récupération des props
/*const props = defineProps({
  title: {
    type: String,
    required: true
  },
  step:{
    type: Number,
    required: true
  }
});*/

const props = defineProps(['title', 'step']);


// fonction qui permet de changer l'état de la variable count
function increment() {
  // parseInt force le type 
  count.value = count.value + parseInt( props.step )
}

function decrement() {
  count.value = count.value - props.step 
}

</script>

<template>
  <div class="greetings">
    <h1 class="green">{{ title }}  step : {{  step   }} </h1>
    <p>counter : {{ count }}</p>
     <button @click="increment(step)" >
        + {{  step   }}
    </button>
     <button @click="decrement(step)" >
        -  {{  step   }}
    </button>
  </div>
</template>

<style scoped>
h1 {
  font-weight: 500;
  font-size: 2.6rem;
  top: -10px;
}

h3 {
  font-size: 1.2rem;
}

.greetings h1,
.greetings h3 {
  text-align: center;
}

@media (min-width: 1024px) {
  .greetings h1,
  .greetings h3 {
    text-align: left;
  }
}
</style>
