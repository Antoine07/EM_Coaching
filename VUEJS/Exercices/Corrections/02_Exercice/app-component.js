// app-component.js

export default {

  // avant le montage de l'élément dans le DOM
  // computed c'est une méthode de Vuejs
  computed: {
    sortedNumbers(){
      // this c'est l'objet Vuejs et donc dans cet objet on peut atteindre les data
       this.numbers.sort((a,b) => a - b);

       return this.numbers;
    },
    selectedOddNumber(){
      return this.numbers.filter(number => number % 2 == 0);
    }
  },

  // la méthode qui permet de définir les données
  data() {

    return {
      // variable title 
      title: "Liste nombres triés",
      secondTitle: "Liste nombres pairs",
      numbers : [19,0,189, 11, 15, 17, 2, 8, 10]
    }
  },
  // l'attribut qui permet de monter dans le DOM le rendu
  // appeler la fonction attachée à l'objet Vuejs sortedNumbers dans computed
  //  
  template: `
    <h1> {{ title }}</h1>
    <li v-for="number in sortedNumbers">
      {{number}}
    </li>
    <h1> {{ secondTitle }}</h1>
    <li v-for="number in selectedOddNumber">
      {{number}}
    </li>
    `
}