<?php
$page = "main";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SC "Gomselmash"</title>

    <link rel="shortcut icon" href="images/icon.ICO" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">



</head>
<body>

<header>
    <?php
    include_once("html/header.php");
    ?>
</header>
<nav>
    <?php
    include_once("html/navigation.php");
    ?>
</nav>

<section>

    <?php
        if(isset($_REQUEST["page"])) {
            $page = $_REQUEST["page"];
        }
        switch ($page){
            case "main":
                include_once("html/main/main.php");
                break;
            case "news":
                include_once("html/news/news.php");
                break;
            case "calendar":
                include_once("html/calendar/calendar.php");
                break;
            case "rating":
                include_once("html/rating/rating.php");
                break;
            case "gallery":
                include_once("html/gallery/gallery.php");
                break;
            case "contacts":
                include_once("html/contacts/contacts.php");
                break;
        };

    ?>

</section>


<!--<div class="container">-->
<!--<header class="header">-->
<!--<div class="contact">-->
<!---->
<!--</div>-->
<!---->
<!--</header>-->
<!--<div class="menu">-->

<!--</div>-->
<!--<div class="news">-->

<!--</div>-->
<!--<div class="main">-->

<!--</div>-->
<!--<footer class="footer">-->

<!--</footer>-->

<!--</div>-->


</html>