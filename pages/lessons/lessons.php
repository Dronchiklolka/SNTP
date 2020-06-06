<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="/lessons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backand-introduction</title>
</head>
<body>
<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php");
    require_once $_SERVER['DOCUMENT_ROOT'] . "/helpers/mysqlDB.php";

    // получаем все уроки текущего курса
    $queryStringLessons = "SELECT * FROM lessons WHERE courseid = $id";
    $queryResultLessons = mysqli_query($mysqlConnection, $queryStringLessons);

    // получаем тукущий урок
    $queryStringCurrentLesson = "SELECT * FROM lessons WHERE id = $lessonId";
    $queryResultCurrentLesson = mysqli_query($mysqlConnection, $queryStringCurrentLesson);
    $currentLesson = mysqli_fetch_array($queryResultCurrentLesson, MYSQLI_ASSOC);
?>
    <section class="container">
        <div class="cours__content">
            <div class="cours__left">
            <?php

                // вывод всех уроков курса
                while ($lessonRow = mysqli_fetch_array($queryResultLessons, MYSQLI_ASSOC)) {
                    if ($lessonId == $lessonRow['id']) {
                        echo "<a href=\"lessons?lessonId=$lessonRow[id]&id=$id\" class=\"lessons__list lessons__list-active\">$lessonRow[name]</a><br><br><br>";
                    } else {
                        echo "<a href=\"lessons?lessonId=$lessonRow[id]&id=$id\" class=\"lessons__list\">$lessonRow[name]</a><br><br><br>";
                    }
                }
            ?>
            </div>
            <div class="cours__right">
                <img src="/images/back.png" class="bakground__curs">
            <div class="name__cours">
                <h1><?php echo($currentLesson['name']); ?></h1>
            </div>
            <div class="leson__description">
                <p><?php echo($currentLesson['description']); ?></p>
            </div>
            <div class="leson__video">
                <h2>Видео</h2>
                <video controls="controls">
                    <source src="/images/<?php echo $currentLesson['videoURL'] ?>" type="video/mp4">
                </video>
            </div>
        </div>
        </div>
    </section>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php"); ?>
</body>
</html>