const { createApp } = Vue;

createApp({

  data() {
    return {
     list: [],
      newTodo: "",
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
      const dataTodo = new FormData();
      dataTodo.append('newMessage', this.newTodo );
      console.log(this.newTodo);
      axios.post('server.php', dataTodo )
      .then(result => {
        this.list = result.data;
        console.log(result.data);
      })
      .catch((err) => {
        console.log(err);
      })

    }
    
  },

  mounted() {
    this.getList();
  },


}).mount('#app');