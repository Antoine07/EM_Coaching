// app-component.js

import CounterComponent from './counter-component.js';
import ShuffleComponent from './shuflle-component.js';

export default {
  
  components :{
    'counter-component' : CounterComponent,
    'shuffle-component' : ShuffleComponent
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
   <div class="container">
      <div class="col-md">
      <div class="row">
        <counter-component sens="1" title-count="Counter + 1"></counter-component>
        <counter-component sens="-1" title-count="Counter - 1"></counter-component>
      </div>
      <div class="row">
        <shuffle-component></shuffle-component>
      </div>
      </div>
   </div>
    `
}