<!--подключаем стили для страницы Новости-->
<link rel="stylesheet" href="../../css/newsStyle.css">

<div class="news_container">

    <?php
    // подключаем скрипт,где хранятся общие данные
    require_once $_SERVER['DOCUMENT_ROOT'] . '/scripts/changeInfo.php';
    // подключаем скрипт подключения к базе данных
    require_once $_SERVER['DOCUMENT_ROOT'] . '/scripts/connection.php';


    // выполняем операции с базой данных
    //выбираем данные, сортируем по дате

    $query = "SELECT image_url, title, dateOfNews, id_news
          FROM news n 
          ORDER BY n.dateOfNews DESC";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $startNewsOnPage;
    if(!isset($_REQUEST['startPage'])){
        $startNewsOnPage=0;
    }else{
        $startNewsOnPage=$_REQUEST['startPage']*2-2;
    }

    if ($result) {
        $rows = mysqli_num_rows($result); // количество полученных строк
        //формируем массив новостей
        $arrNews=[];
        for ($i = 0; $i < $rows; ++$i) {
            array_push($arrNews,mysqli_fetch_row($result));
        }

//        КОЛИЧЕСТВО СТРАНИЦ ДЛЯ ОТОБРАЖЕНИЯ
        $pages = $rows / $countNewsOnPage; // количество страниц

        echo "<div class='news'>";

        for ($i = $startNewsOnPage; $i < $countNewsOnPage+$startNewsOnPage; ++$i) {
            $row = $arrNews[$i];
            echo "<div class='news_item'>
                            <img src='$row[0]' alt='' class='imgNews'>
                            <div class='titleNews'>
                            <a href='http://ttgomel/index.php?page=fullNews&id=$row[3]' class='titleNews'>$row[1]</a>
                            </div>
                             <div class='dateNews'>$row[2]</div>
                         </div>";
        }
        echo "</div>";

    }

    //формируем пагинацию
    echo "<div class='pages'> Страница: ";
    for ($i = 1; $i <= $pages; ++$i) {
        echo "<a href='http://ttgomel/index.php?page=news&startPage=$i'>[ $i ]</a>";
    }
    echo "</div>";
    // http://ttgomel/index.php?page=fullNews id=$row[3]
    // ../pages/news/fullNews.php?id=$row[3]
    // закрываем подключение
    mysqli_close($link);
    ?>


</div>