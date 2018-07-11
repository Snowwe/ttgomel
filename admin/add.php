<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Document</title>
</head>

<body>
<div class="container">

    <form method="post" action="index.php?action=add" class="form-group" enctype="multipart/form-data">
        <!--        <div class="form-group">-->
        <label for="title"> Заголовок статьи *</label>
        <input type="text" name="title" id="title" value="" class="form-control" width="90%" autofocus required>

        <label for="content"> Статья * </label>
        <textarea name="content" class="form-control" id="content" required></textarea>

        <label for="date"> Дата статьи *</label>
        <input type="date" name="date" id="date" value="" class="form-item" required><br>


        <label for="photo1"> Главное фото *</label>
        <input type="text" name="photo1" value="../../images/news/standartNews.gif" class="form-item" required>
        <!--        <input type="file" name="photo1" class="form-photo" id="photo1" value="standartNews.gif" required>-->

        <label for="photo2"> Фото 2
            <input type="file" name="photo2" class="form-photo"></label>
        <!--        <input type="text" name="photo2" value="" class="form-control">-->

        <label for="photo3"> Фото 3 </label>
        <input type="file" name="photo3" class="form-photo">
        <!--        <input type="text" name="photo3" value="" class="form-control">-->

        <label for="photo4"> Фото 4</label>
        <input type="file" name="photo4" class="form-photo">
        <!--        <input type="text" name="photo4" value="" class="form-control">-->

        <label for="photo5"> Фото 5</label>
        <input type="text" name="photo5" id="photo5" value="" class="form-photo">

        <label for="photo6"> Фото 6</label>
        <input type="text" name="photo6" id="photo6" value="" class="form-photo">

        <label for="photo7"> Фото 7 </label>
        <input type="text" name="photo7" id="photo7" value="" class="form-photo">

        <label for="photo8"> Фото 8 </label>
        <input type="text" name="photo8" id="photo8" value="" class="form-photo">

        <label for="photo9"> Фото 9</label>
        <input type="text" name="photo9" id="photo9" value="" class="form-photo">

        <p>* - поля обязательные для заполнения</p>
        <input type="submit" value="Сохранить" class="btn">
        <!--        </div>-->
    </form>

</div>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Снежана
 * Date: 10.07.2018
 * Time: 22:56
 */