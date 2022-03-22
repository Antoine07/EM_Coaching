// app-component.js
export default {
  data() {
    return {
      // variable title 
      title: "Liste des étudiants",
      students: [{ name: 'Alan', age : 45 }, { name: 'Sophie', age : 43 }]
    }
  },
  template: `
    <h1> {{ title }}</h1>
    <li v-for="student in students">
      Name : {{ student.name }}
    </li>
    `
}