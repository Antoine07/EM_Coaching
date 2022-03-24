// app-component.js

export default {
  methods: {
    increment(sens){
      if(sens > 0)
        this.count++;
      else
        this.count--;
    }
  },

  // passer une props de App => Counter
  props: ['sens', 'titleCount'],

  // la méthode qui permet de définir les données
  data() {

    return {
      count : 0
    }
  },
  // l'attribut qui permet de monter dans le DOM le rendu
  // appeler la fonction attachée à l'objet Vuejs sortedNumbers dans computed
  //  
  
  template: `
  <div>
  <button type="button" @click="increment(sens)" class="btn btn-primary btn-lg">{{ titleCount }}</button>
  <p>Count is: {{ count }}</p>
  </div>
    `
}