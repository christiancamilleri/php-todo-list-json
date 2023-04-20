<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Todo API list</title>
</head>

<body>

    <div id="app">
        <h1>To Do List</h1>

        <div id="list-container">
            <ul>
                <li v-for="todo in todoList">
                    {{todo}}

                    <button><i class="fa-sharp fa-solid fa-trash"></i></button>
                </li>
            </ul>
        </div>

        <div class="container">
            <input @keyup.enter="AddTodo()" v-model="newTodo" placeholder="Scrivi un todo da aggiungere" type="text">
            <button type="submit">ADD</button>
        </div>


    </div>




    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <!-- main  -->
    <script src="js/script.js"></script>
</body>

</html>