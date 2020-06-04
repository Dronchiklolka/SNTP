<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="introduction.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backand-introduction</title>
</head>
<body>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"); ?>
    <section class="container">
        <div class="cours__content">
            <div class="cours__left">
                <a class="lessons__list lessons__list-active" href="#">PHP основы</a>
                <br><br><br>
                <a class="lessons__list" href="#">PHP Продвинутый</a>
                <br><br><br>
                <a class="lessons__list" href="#"> База данных MySQL</a>
            </div>
            <div class="cours__right">
                <img src="/images/back.png" class="bakground__curs">
            <div class="name__cours">
                <h1>Backand</h1>
                <a href="#">Courses &#8212 &gt Backand  &#8212 &gt PHP основы</a>
            </div>
            <div class="leson__description">
                <h2>PHP основы</h2>
                <p>За модуль вами будут изучены базовые моменты при работе с языком PHP. Вы научитесь встраивать PHP в HTML, научитесь создавать переменные, циклы, массивы, функции, а также ознакомитесь со множеством других понятий.</p>
            </div>
            <div class="leson__video">
                <h2>Видео</h2>
                <video controls="controls">
                </video>
            </div>
        </div>
        </div>
    </section>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php"); ?>
</body>
</html>