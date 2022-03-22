// app-component.js
export default {
    data() {
      return { 
          message : "Hello world !"
         }
    },
    template: `
    <p> {{ message }}</p>
    <span v-for="n in 10">{{ n }}</span>
    `
  }