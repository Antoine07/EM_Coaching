<script setup>
import AddStudent from './components/AddStudent.vue'
import { ref } from 'vue'
const students  = ref([])

function addStudent(e){
  console.log(e)

  students.value.push( e )

}
</script>

<template>
  <AddStudent @addStudent="addStudent" />
  <ul v-if="students.length > 0">
    <li v-for="st in students "> Name: {{st.name}} Age: {{ st.age }} </li>
  </ul>
</template>

<style>
@import 'bootstrap/dist/css/bootstrap.min.css';

</style>
