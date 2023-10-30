<?php
// leggo il file json e lo salvo in una stringa
$todoList = file_get_contents('todo-list.json');
//trasforma in array
$list = json_decode($todoList,true );

if (isset($_POST['newMessage'])) {
  $list[] = array(
    "message" => $_POST['newMessage'],
    "done" => false
  );
  file_put_contents('todo-list.json', json_encode($list));
};

// trasforma il file php in un file json
header('Content-type: application/json');
// stampa la lista decodificata cioè la lista diventa è essere stringa
echo json_encode($list);
?>
