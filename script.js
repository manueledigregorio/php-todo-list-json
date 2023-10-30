const { createApp } = Vue;

createApp({

  data() {
    return {
     list: [],
      newTodo: 'CIAOOO',
    }
    
  },
  methods: {
    getList(){
      axios.get('server.php')
        .then(result => {
          this.list = result.data;
          console.log(result.data);
        })
        .catch((err) => {
          console.log(err);
        })
    },

    addTask(){
      
    }
    
  },

  mounted() {
    this.getList();
  },


}).mount('#app');