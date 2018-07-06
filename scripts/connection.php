<?php
$host = 'localhost'; // адрес сервера
$database = 'ttgomel'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль


// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));
?>