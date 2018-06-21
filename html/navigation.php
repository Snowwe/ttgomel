<link rel="stylesheet" href="css/navigationStyle.css">

<?php
//
//switch ($_SERVER['PHP_SELF']) {
//    case "main":
//        $set = "current_menu";
//        break;
//    case "http://ttgomel/index.php?page=news":
//        $set = "current_menu";
//        break;
//    case "calendar":
//        $set = "current_menu";
//        break;
//    case "rating":
//        $set = "current_menu";
//        break;
//    case "gallery":
//        $set = "current_menu";
//        break;
//    case "contacts":
//        $set = "current_menu";
//        break;
//    default                    :
//        $set = '';
//        break;
//};
//?>
<div class="menu" >
    <input type="checkbox" id="menu-checkbox">
    <nav role="navigation">
        <label for="menu-checkbox" class="toggle-button"
               data-open="&#9776; Меню" data-close="&#9932;" onclick> </label>
        <ul class="main-menu" id="menu">
            <li><a href="index.php?page=main">Главная</a></li>
            <li><a href="index.php?page=news">Новости</a></li>
            <li><a href="index.php?page=calendar">Календарь</a></li>
            <li><a href="index.php?page=rating">Рейтинг</a></li>
            <li><a href="index.php?page=gallery">Галерея</a></li>
            <li><a href="index.php?page=contacts">Контакты</a></li>

        </ul>
    </nav>

</div>
<script src="../js/navigationCurrent.js"></script>
