<!--подключаем стили общие для всех страниц-->
<link rel="stylesheet" href="../../css/style.css">
<!--подключаем стили для страницы Новости-->
<link rel="stylesheet" href="../../css/newsStyle.css">

<div class="fullNews">
    <?php
    // подключаем скрипт,где хранятся общие данные
    require_once $_SERVER['DOCUMENT_ROOT'] . '/scripts/changeInfo.php';
    // подключаем скрипт подключения к базе данных
    require_once $_SERVER['DOCUMENT_ROOT'] . '/scripts/connection.php';


    $selectedID = $_REQUEST["id"];
    // выполняем операции с базой данных
    //выбираем данные
    $query = "SELECT *
          FROM news n 
          WHERE id_news=$selectedID";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));


    if ($result) {
        $rows = mysqli_num_rows($result); // количество полученных строк
        echo "<div class='full_news_item'>";
        // for ($i = 0; $i < $rows; ++$i) {
        $row = mysqli_fetch_row($result);
        //  print_r($row);
        echo "<div class='full_news_item'>";
        echo "<h3>$row[1]</h3>";
        echo "<div class='dateNews'>$row[3]</div>";
        for ($j = 4; $j < 12; ++$j) {
            if ($row[$j]) {
                echo "<img src='$row[$j]' alt='' class='imgNews'>";
            }
        }
        echo " <div class='contentNews'>$row[2]</div>";
        //   }
        echo "</div>";
    }

    // закрываем подключение
    mysqli_close($link);

    echo $back;
    ?>
</div>



