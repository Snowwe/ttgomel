<!--по умолчанию загружается главная страница-->
<?php
$page = "main";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SC "Gomselmash"</title>
    <!--подключаем иконку-->
    <link rel="shortcut icon" href="images/icon.ICO" type="image/x-icon">
    <!--подключаем шрифт для всех страниц-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--подключаем стили для общие для всех страниц-->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

</head>
<body>
<!--точка возврата при прокрутке-->
<p id="top"></p>
<div class="top">
<!--загрузка header для всех страниц-->
<header>
    <?php
    include_once("html/header.php");
    ?>
</header>
<!--загрузка меню для всех страниц-->
<nav class="nav">
    <?php
    include_once("html/navigation.php");
    ?>
</nav>
</div>
<!--загрузка страницы в зависимости от выбора пункта меню-->
<section>
    <?php
    if (isset($_REQUEST["page"])) {
        $page = $_REQUEST["page"];
    }
    switch ($page) {
        case "main":
            include_once("html/main/main.php");
            break;
        case "news":
            include_once("html/news/news.php");
            break;
        case "calendar":
            include_once("html/calendar/calendar.php");
            break;
        case "rating":
            include_once("html/rating/rating.php");
            break;
        case "gallery":
            include_once("html/gallery/gallery.php");
            break;
        case "contacts":
            include_once("html/contacts/contacts.php");
            break;

        case "mail":
            include_once("html/contacts/mail.php");
            break;
        case "fullNews":
            include_once("html/news/fullNews.php");
            break;
    };

    ?>



</section>
<button class="btn-up"></button>
<!--загрузка footer для всех страниц-->
<footer>
    <?php
    include_once("html/footer.php");
    ?>
</footer>

<script src="js/index.js"></script>
</html>