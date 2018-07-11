<!--подключаем стили для страницы Новости-->
<link rel="stylesheet" href="../../css/newsStyle.css">

<div class="news_container">

    <?php
    // подключаем скрипт, где хранятся общие данные
    require_once $_SERVER['DOCUMENT_ROOT'] . '/scripts/changeInfo.php';
    // подключаем скрипт подключения к базе данных
    require_once $_SERVER['DOCUMENT_ROOT'] . '/scripts/database.php';
    // подключаем скрипт работы с таблицей новости
    require_once $_SERVER['DOCUMENT_ROOT'] . '/scripts/news.php';
    //вызываем функцию подключения к БД
    $link = db_connect();

    //вызываем функцию получения всех новостей из БД
    $arrNews = articles_all($link);

    //вызываем функцию получения начальной новости на текущей странице с новостями
    $startNewsOnPage = start_news();
    // КОЛИЧЕСТВО СТРАНИЦ ДЛЯ ОТОБРАЖЕНИЯ
    $pages = $rows / $countNewsOnPage;

    echo "<div class='news'>";

    for ($i = $startNewsOnPage; $i < $countNewsOnPage + $startNewsOnPage; ++$i) {
        $row = $arrNews[$i];
        echo "<div class='news_item'>
                            <img src='$row[4]' alt='' class='imgNews'>
                            <div class='titleNews'>
                            <a href='http://ttgomel/index.php?page=fullNews&id=$row[0]' class='titleNews'>$row[1]</a>
                            </div>
                             <div class='dateNews'>$row[3]</div>
                         </div>";
    }
    echo "</div>";

    //формируем пагинацию
    echo "<div class='pages'> Страница: ";
    for ($i = 1; $i <= $pages; ++$i) {
        echo "<a href='http://ttgomel/index.php?page=news&startPage=$i'>[ $i ]</a>";
    }
    echo "</div>";

    // закрываем подключение
    mysqli_close($link);
    ?>
</div>