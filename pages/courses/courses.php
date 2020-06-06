<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="/courses.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend</title>
</head>
<body>
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/helpers/mysqlDB.php";

        // получаем все уроки текущего курса
        $queryStringLessons = "SELECT * FROM lessons WHERE courseid = $id";
        $queryResultLessons = mysqli_query($mysqlConnection, $queryStringLessons);
        
        // получаем первый урок текущего курса
        $queryResultFirstLesson = mysqli_query($mysqlConnection, $queryStringLessons);
        $firstLesson = mysqli_fetch_array($queryResultFirstLesson, MYSQLI_ASSOC);

        $queryString = "SELECT * FROM courses WHERE id = $id";
        $queryResult = mysqli_query($mysqlConnection, $queryString);

        $course = mysqli_fetch_array($queryResult, MYSQLI_ASSOC);
    ?>
    <section class="container">
        <img src="/images/<?php echo($course['imgSrc']); ?>" class="bakground__curs">
        <div class="name__cours">
            <h1><?php echo($course['name']); ?></h1>
            <a href="#">Courses &#8212 &gt Frontend</a>
        </div>
        <div class="cours__review">
            <h2>О курсе</h2>
            <p> <?php echo($course['description']); ?></p>
            <p><?php echo($course['price']); ?>.</p>
            <a href="<?php echo "/lessons?lessonId=$firstLesson[id]&id=$course[id]"?>" name="buу"><button class="button__buy">Приобрести курс</button></a>
        </div>
        <div class="cours__h2">
            <h2>Уроки</h2>
        </div>
        <div class="lesson__list">
        <?php
            // вывод уроков
            while ($lessonRow = mysqli_fetch_array($queryResultLessons, MYSQLI_ASSOC)) {
                echo "<div class='lesson__items'><h3>$lessonRow[name]</h3><p>$lessonRow[description]</p></div>";
            }
        ?>
        </div>
    </section>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php"); ?>
</body>
</html>