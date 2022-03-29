<script setup>
import AddStudent from './components/AddStudent.vue'
import { ref } from 'vue'
const students  = ref([])

function add(e){
  console.log(e)

  students.value.push( e )

}
</script>

<template>
  <AddStudent @addStudent="add" title="Add student" />
  <AddStudent @addStudent="add" title="Add student" />
  <ul v-if="students.length > 0">
    <li v-for="st in students"> Name: {{st.name}} Age: {{ st.age }} </li>
  </ul>
</template>

<style>
@import 'bootstrap/dist/css/bootstrap.min.css';

</style>
