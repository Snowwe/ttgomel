<?php
// подключаем скрипт подключения к базе данных
require_once $_SERVER['DOCUMENT_ROOT'] . '/scripts/database.php';
// подключаем скрипт работы с таблицей новости
require_once $_SERVER['DOCUMENT_ROOT'] . '/scripts/news.php';
//вызываем функцию подключения к БД
$link = db_connect();

if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = '';

if ($action == 'add') {
    if (!empty($_POST)) {
        articles_new($link
            , $_POST['title']
            , $_POST['content']
            , $_POST['date']
            , $_POST['photo1']
            , $_POST['photo2'], $_POST['photo3'], $_POST['photo4']
            , $_POST['photo5'], $_POST['photo6'], $_POST['photo7']
            , $_POST['photo8'], $_POST['photo9']);
        header("location: index.php");
    }
    include('add.php');
} else {
    $articles = articles_all($link);
    include("newsAdmin.php");
}


?>