// app-component.js

export default {

  // attache une méthode qui peut être appelée dans le rendu 
  methods: {
    getNote(id, grades) {
      return grades.find(grade => grade.id == id ).note
    }
  },

  // la méthode qui permet de définir les données
  data() {

    return {
      // variable title 
      title: "Liste des étudiants",
      grades: [
        { id: 1, note: 16 },
        { id: 2, note: 15 },
      ],
      students: [
        { id: 1, name: 'Alan', age: 45 },
        { id: 2, name: 'Sophie', age: 43 }
      ]
    }
  },
  // l'attribut qui permet de monter dans le DOM le rendu 
  template: `
    <h1> {{ title }}</h1>
    <li v-for="student in students">
      Name : {{ student.name }} age : {{ student.age }},
      Note : {{ getNote(student.id, grades) }}
    </li>
    <li v-for="grade in grades">
      note : {{ grade.note }}
    </li>
    `
}