<?php
function articles_all($link)
{
    $query = "SELECT *
          FROM news
          ORDER BY dateOfNews DESC";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        $rows = mysqli_num_rows($result); // количество полученных строк
        //формируем массив новостей
        $arrNews = [];
        for ($i = 0; $i < $rows; ++$i) {
            array_push($arrNews, mysqli_fetch_row($result));
        }
    }
    return $arrNews;
}

//
function articles_get($link, $selectedID)
{
    // выполняем операции с базой данных
    //выбираем данные
    $query = "SELECT *
          FROM news n 
          WHERE id_news=$selectedID";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        $row = mysqli_fetch_row($result);
    }
    return $row;
}

function articles_new($link, $title, $content, $date, $image, $image2, $image3, $image4, $image5, $image6, $image7, $image8, $image9)
{
    //убираем слева и справа пробелы
    $title = trim($title);
    $content = trim($content);
    if ($title == '')
        return false;

    $ins = "INSERT INTO INTO news ( title, content, dateOfNews, image_url, image_url_2, image_url_3, image_url_4, image_url_5, image_url_6, image_url_7, image_url_8, image_url_9 ) 
VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s' )";

    echo $title.'<br>'.$content.'<br>'.$date.'<br>'.$image.'<br>'.'<br>';
    $query = sprintf($ins
        , mysqli_real_escape_string($link, $title)
        , mysqli_real_escape_string($link, $content)
        , mysqli_real_escape_string($link, $date)
        , mysqli_real_escape_string($link, $image)
        , mysqli_real_escape_string($link, $image2)
        , mysqli_real_escape_string($link, $image3)
        , mysqli_real_escape_string($link, $image4)
        , mysqli_real_escape_string($link, $image5)
        , mysqli_real_escape_string($link, $image6)
        , mysqli_real_escape_string($link, $image7)
        , mysqli_real_escape_string($link, $image8)
        , mysqli_real_escape_string($link, $image9)
    );

    echo $query;
    $result = mysqli_query($link, $query);
    if (!$result)
        die(mysqli_error($link));
    return true;

}

function articles_edit($id, $title, $content, $date, $image, $image2, $image3, $image4, $image5, $image6, $image7, $image8, $image9)
{

}

function articles_delete($id)
{

}

function start_news()
{
    if (!isset($_REQUEST['startPage'])) {
        return $startNewsOnPage = 0;
    } else {
        return $startNewsOnPage = $_REQUEST['startPage'] * 2 - 2;
    }
}