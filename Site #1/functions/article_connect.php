<?php

function getNews($limit, $id) {
    global $mysqli;
    connectDB();
    if($id) {
        $where = "WHERE `id` = ".$id;
    }
    $result = $mysqli->query("SELECT * FROM `news` $where ORDER BY `id` DESC LIMIT $limit"); //сортировать статьи по убыванию, начиная с последней добавленной
    closeDB();
    if(!$id) {
        return resultToArray($result);
    }
    else {
        return $result->fetch_assoc();
    }
}

function resultToArray ($result) {
    $array = array ();
    while (($row = $result->fetch_assoc()) != false) { // сформировать ассоциативный массив, и перебираем его и записываем данные в array
        $array[] = $row;
    }
    return $array;
}

?>