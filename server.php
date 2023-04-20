<?php

if (isset($_POST['newTodo'])) {
    // recupero file json
    $todoListJson = file_get_contents("todoList.json");

    // lo trasformo in un array
    $todoList = json_decode($todoListJson);

    // lo push nel mio array
    $todoList[] = $_POST['newTodo'];

    // converto file in json
    $newTodoJson = json_encode($todoList);

    // lo salviamo nel file json
    file_put_contents('todoList.json', $newTodoJson);


} else {

    // prendo file json e lo salvo in questa pagina 
    $stringJson = file_get_contents("todoList.json");


    // traformo questa stringa in un array 
    $todoList = json_decode($stringJson);

    // dico al browser che è un json
    header('Content-type: application/json');

    // stampo questo file php in json
    echo json_encode($todoList);
}