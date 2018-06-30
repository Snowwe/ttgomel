<?php
include $_SERVER['DOCUMENT_ROOT'] . "/js/gallery.php";
$dir = $_SERVER['DOCUMENT_ROOT'] . "/images/gallery_sportsmen/";
$shortDir = "../../images/gallery_sportsmen/";
$imgSportsman = get_img($dir);
$f = $_SERVER['DOCUMENT_ROOT'] . "/images/gallery_sportsmen/00_infoSportsmen.txt";//файл, где находится инфо о спортсменах
$infoSp = get_img_info($f);

?>

<!--подключаем стили для страницы Контакты-->
<link rel="stylesheet" href="../../css/galleryStyle.css">
<div class="gallery">
    <h3>Наши тренеры</h3>
    <hr>
    <div class="ourTrainers">
        <div class="trainerOne">
            <img src="../../images/gallery_trainer/1_Shutov_A_main.jpg" alt="Шутов Андрей Васильевич"
                 title="Шутов Андрей Васильевич"
                 class="imgTrainerOne" onclick="hover">
            <div class="trainerInfoOne">
                <h4>Шутов Андрей Васильевич</h4>
                <p>Старший тренер отделения н/тенниса высшей категории, МС, победитель областных, республиканских и
                    международных соревнований, абсолютный чемпион ПРБ по н/теннису</p>
            </div>
        </div>
        <div class="trainerTwo">
            <img src="../../images/gallery_trainer/2_Ostapenko_E_main.jpg"
                 alt="Остапенко Елена Николаевна"
                 title="Остапенко Елена Николаевна" class="imgTrainerTwo">
            <div class="trainerInfoTwo">
                <h4>Остапенко Елена Николаевна</h4>
                <p>Тренер отделения н/тенниса первой категории</p>
            </div>
        </div>
    </div>



    <div class="ourSportsmen">
        <h3>Наши спортсмены</h3>
        <hr>
        <div class="gallerySportsmen">
        <?php
        $rows = count($imgSportsman);

        $j = 0;
        foreach ($imgSportsman

                 as $image): ?>
            <?php
            $infoSpShort = explode(";", $infoSp[$j]);
            ?>

            <div class="sportsman">
                <a rel="lightbox -mygallery" data-lightbox="lightbox" href="<?php echo $shortDir . $image ?>">
                    <img src="<?php echo $shortDir . $image ?>" title="<?php echo $infoSp[$j] ?>" class="imgSportsman">
                    <span class="infoSportsman"><?php
                        echo $infoSpShort[0];
                        ?></span>
                    <span class="fullInfoSportsman"><?php
                        echo $infoSpShort[1];
                        ?></span>

            </div>
            <?php
            $j++;
        endforeach; ?>

        </div>
    </div>

    <div class="video">
        <h3>Видео</h3>

        <div class="aVideoMore">
            <a href="https://www.youtube.com/channel/UChCTZGrWFyi79X0jKEny9xg/videos?flow=grid&view=0&sort=dd"
               target="_blank">Больше
                видео на нашем канале &rarr;</a>
            <hr>
        </div>
        <!--        <video src="https://www.youtube.com/watch?v=91i34dtSJro" controls autobuffer></video>-->
        <iframe src="https://www.youtube.com/embed/q0up7k63_bI" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/q-7rIKg39LE" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/gmJ6ZFkCzLo" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>

    </div>
</div>
<script src="../../js/jquery-3.2.1.min.js"></script>