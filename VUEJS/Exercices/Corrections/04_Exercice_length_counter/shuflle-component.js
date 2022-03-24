// app-component.js

export default {
  methods: {
    shuffle(){
    this.numbers.sort((a,b) => Math.random() - 0.5);
   }
  },

  // la méthode qui permet de définir les données
  data() {

    return {
      numbers : [9,90,18,17,15]
    }
  },
  // l'attribut qui permet de monter dans le DOM le rendu
  // appeler la fonction attachée à l'objet Vuejs sortedNumbers dans computed
  //  
  
  template: `
  <div>
  <button type="button" @click="shuffle()" class="btn btn-primary btn-lg">Shuffle</button>
  <li v-for="number in numbers">
    {{ number }}
  </li>
  </div>
    `
}