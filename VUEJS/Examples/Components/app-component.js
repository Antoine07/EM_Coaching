// app-component.js

import helloComponent from "./hello-component.js" ;

export default {

  components: {
    'hello-component': helloComponent
  },

  computed: {
   
  },

  data() {

    return {
      title: "App Component",
    
    }
  },
  template: `
    <h1> {{ title }}</h1>
    <hello-component></hello-component>
    `
}