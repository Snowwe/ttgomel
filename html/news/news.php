<!--подключаем стили для страницы Новости-->
<link rel="stylesheet" href="../../css/newsStyle.css">

<div class="news_container">

     <?php
require_once 'js/connection.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));


// выполняем операции с базой данных
//выбираем данные, сортируем по дате

    $query ="SELECT image_url, title, dateOfNews, content
          FROM news n 
          ORDER BY n.dateOfNews DESC";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    if($result)
    {
        $rows = mysqli_num_rows($result); // количество полученных строк
        echo "<div class='news'>";
             for ($i = 0 ; $i < $rows ; ++$i)
             {
                 $row = mysqli_fetch_row($result);
                 echo   "<div class='news_item'>
                            <img src='$row[0]' alt='' class='imgNews'>
                            <div class='titleNews'><a href='#' class='titleNews'>$row[1]</a></div>
                            <div class='dateNews'>$row[2]</div>
                         </div>";
             }
             echo "</div>";
    }

// закрываем подключение
mysqli_close($link);
?>





</div>