// app-component.js

export default {
  computed: {
    calculLengthStudents(){
      return this.students.filter( s => s.length % 2 == 0 );
    }
  },

  // la méthode qui permet de définir les données
  data() {

    return {
      title: "Liste étudiants",
      students : ["Alan", "Sophie", "Bernard", "Annie"]
    }
  },
  // l'attribut qui permet de monter dans le DOM le rendu
  // appeler la fonction attachée à l'objet Vuejs sortedNumbers dans computed
  //  
  template: `
    <h1> {{ title }}</h1>
    <h2>Avec une fonction</h2>
    <li v-for="student in calculLengthStudents">
      {{ student }}
    </li>
    <h2>Avec un if</h2>
    <template v-for="student in students" >
    <li v-if="student.length % 2 == 0">
        {{ student}}
    </li>
    </template>
    `
}