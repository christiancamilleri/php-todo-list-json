const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],

            newTodo: '',
        }
    },
    methods: {
        getTodoList() {
            // eseguo chiamata api
            axios.get('./server.php').then(response => {
                console.log(response.data);

                // pusho valori in array
                this.todoList = response.data;
            })
        },
        AddTodo() {
            this.todoList.push(this.newTodo);

            // creo oggetto data 
            let data = {
                newTodo: '',
            }

            data.newTodo = this.newTodo;

            // eseguiamo richiesta API al server con metodo post
            axios.post('./server.php', data, { headers: { 'Content-Type': 'multipart/form-data' } }).then(response => {
                this.getTodoList();
            })

            this.newTodo = "";
        }
    },
    mounted() {
        this.getTodoList()
    }

}).mount('#app')