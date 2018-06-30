<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>SC "Gomselmash"</title>-->
<!--    <!--подключаем иконку-->-->
<!--    <link rel="shortcut icon" href="images/icon.ICO" type="image/x-icon">-->
<!--    <!--подключаем шрифт для всех страниц-->-->
<!--    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">-->
<!--    <!--подключаем стили для общие для всех страниц-->-->
<!--    <link rel="stylesheet" href="css/style.css">-->
<!---->
<!---->
<!--</head>-->
<!--<body>-->
<!---->
<!--<!--загрузка header для всех страниц-->-->
<!--<header>-->
<!--    --><?php
//    include_once("../../html/header.php");
//    ?>
<!--</header>-->
<!--<!--загрузка меню для всех страниц-->-->
<!--<nav>-->
<!--    --><?php
//    include_once("../../html/navigation.php");
//    ?>
<!--</nav>-->
<!--загрузка страницы в зависимости от выбора пункта меню-->
<section>
  <?php

require_once '../../js/connection.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

$selectedID = $_REQUEST["id"];
print_r($selectedID);
// выполняем операции с базой данных
//выбираем данные
$query = "SELECT *
          FROM news n 
          WHERE id_news=$selectedID";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
//print_r($result);

if ($result) {
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<div class='full_news_item'>";
   // for ($i = 0; $i < $rows; ++$i) {
        $row = mysqli_fetch_row($result);
        //  print_r($row);
               echo "<div class='full_news_item'>";
                echo "<h3>$row[1]</h3>";
                echo "<div class='dateNews'>$row[3]</div>";
                for($j = 4; $j < 12; ++$j){
                    if($row[$j]){
                                echo"<img src='$row[$j]' alt='' class='imgNews'>";
                    }
                }
                echo" <div class='contentNews'>$row[2]</div>";
 //   }
    echo "</div>";
}

// закрываем подключение
mysqli_close($link);
?>
</section>
<!--загрузка footer для всех страниц-->
<!--<footer>-->
<!--    --><?php
//    include_once("../../html/footer.php");
//    ?>
<!--</footer>-->
<!---->
<!--</html>-->


