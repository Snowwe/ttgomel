<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/newsStyle.css">
    <title>Панель администратора</title>
</head>

<body>
<a href="index.php?action=add">Добавить статью</a>
<table>
    <tr>
        <th>Дата</th>
        <th>Заголовок</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($articles as $a):
       ?>
    <tr>
        <td><?php echo $a[3]?></td>
        <td><?php echo $a[1]?></td>
        <td>
            <a href="index.php?action=edit&id=<?php echo $a[0]?>">Редактировать</a>
        </td>
        <td>
            <a href="index.php?action=delete&id=<?php echo $a[0]?>">Удалить</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Снежана
 * Date: 10.07.2018
 * Time: 14:20
 */