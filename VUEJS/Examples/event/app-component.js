// app-component.js

export default {

  methods: {
    increment() {
      this.count++;
    }
  },

  data() {

    return {
     count : 0
    }
  },
  template: `
  <button @click="increment()">add</button>
  <p>Count is: {{ count }}</p>
  `
}