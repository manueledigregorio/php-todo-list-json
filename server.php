<?php
// leggo il file json e lo salvo in una stringa
$todoList = file_get_contents('todo-list.json');
//trasforma in array
$list = json_decode($todoList,true );
// trasforma il file php in un file json
header('Content-type: application/json');


// stampa la lista decodificata cioè la lista diventa è essere stringa
echo json_encode($list);
?>
