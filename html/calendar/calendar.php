<!--подключаем стили для страницы Календарь-->
<link rel="stylesheet" href="../../css/calendarStyle.css">

<section class="calendar">
    <?php
require_once 'js/connection.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));


//получем текущую дату для отображения календаря с текущего месяца
$currentDate=date("Y-m-d");
$currentMonth=date("m");
$strMonth=date('F');
$currentYear=date("Y");
$arrMonthRus=[0,"Январь","Февраль","Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
$arrMonthRus_2=[0,"января","февраля","марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря"];

echo"<h2>КАЛЕНДАРЬ СОРЕВНОВАНИЙ НА $currentYear ГОД</h2>
<hr>";
// выполняем операции с базой данных
//выбираем данные, начиная с текущего месяца
//сортируем по дате
for ($str = 0 ; $str < 12 ; ++$str){

    $query ="SELECT c.name, DATE_FORMAT( c.date, '%d' ) date_string, place, participants
          FROM calendar c 
          WHERE Month(Date(c.date)) = '$currentMonth' AND Year (Date (c.date))='$currentYear'
          ORDER BY c.date";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    if($result)
    {
        $rows = mysqli_num_rows($result); // количество полученных строк
        if($rows>0){

echo
"  <table>
    <caption> $arrMonthRus[$currentMonth] </caption>
    <tr>
       <th class='name'>Соревнования</th>
        <th class='date'>Дата</th>
        <th class='place'>Место</th>
        <th class='participants'>Участники</th>
    </tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 4 ; ++$j)
               {


                   echo
                "<td>$row[$j]</td>";
               }
        echo "</tr>";
    }
    echo "</table>";
    }
    }
if($currentMonth==12){
    $currentMonth=1;
    ++$currentYear;

    }
    else
        ++$currentMonth;
}

// закрываем подключение
mysqli_close($link);
?>
    
</section>

<!--   setlocale(LC_ALL,  'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251');-->

<!--echo strftime('%b', $currentMonth);-->

<!--"UPDATE `calendar` SET lc_time_names = 'ru_RU'";-->

<!--{-->
<!--if($row[1])-->
<!--{-->
<!--echo   "<td>$row[1] $arrMonthRus_2[$currentMonth]</td>";-->
<!--}-->