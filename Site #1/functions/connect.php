<?php

$mysqli = false;
function connectDB() { // функция позволяет подключиться к базе данных
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "", "test1base"); // назначаем переменной значения. Данные для Денвера: хост, имя пользователя, пароль, база данных
    $mysqli->query("SET NAMES 'utf-8'"); // устанавливаем кодировку
}
    
function closeDB () { // отключаемся от базы данных
    global $mysqli;
    $mysqli->close();
}


?>