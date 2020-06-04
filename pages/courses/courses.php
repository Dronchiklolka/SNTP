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
            <a href="<?php echo "/lessons?courseId=$course[id]"?>" name="buу"><button class="button__buy">Приобрести курс</button></a>
        </div>
        <div class="cours__h2">
            <h2>Уроки</h2>
        </div>
        <div class="lesson__list">
            <div class="lesson__items">
                <h3>1. Основные понятия</h3>
                <p>Фронтенд, это совокупность знаний, которое поможет вам в вёрстке сайтов и веб-приложений. Поймёте базовый синтаксис HTML и CSS. Вы научитесь управлять цветом и шрифтами, размещать блоки на странице. Всё это — через практику. Вы напишете программу на языке JavaScript и сделаете страницу интерактивной.</p>
            </div>
            <div class="lesson__items">
                <h3>2. Расширенные возможности HTML и CSS</h3>
                <p>В этом курсе вы расширите знания о семантике HTML-разметки, необходимых CSS-технологиях: flexbox, позиционирование элементов, работа с медиафайлами и виджетами, создание анимаций, работа с формами. Изучите методологию БЭМ — самый популярный в мире подход к организации кода.
                    Современному сайту необходимо окружение из вспомогательного программного обеспечения. В этом курсе вы подключите к проекту систему контроля версий Git и научитесь работать в командной строке.</p>
            </div>
            <div class="lesson__items">
                <h3>3. HTML и CSS. Работа с макетом, построение сложных сеток, адаптивная вёрстка</h3>
                <p>На этом курсе вы узнаете, какие виды дизайн-макетов используют в работе профессионалы и как готовить макет к вёрстке. Научитесь выстраивать модульные сетки и группировать элементы технологией Grid Layout. Разберётесь, как создавать интерфейсы для разных устройств: настольных компьютеров, ноутбуков, планшетов, смартфонов.
                <p>В этом курсе вы продолжите развивать инфраструктуру проекта: освоите инструменты коллективной работы, разместите сайт в интернете и научитесь публиковать изменения в нём из командной строки.</p>
            </div>
            <div class="lesson__items">
                <h3>4. Выпускной проект</h3>
                <p>Итоговый выпускной проект, подтверждающий знания и умения. Во время работы над ним не нужно выполнять домашние задания и узнавать новую теорию из тренажёра — здесь всё, как в реальной жизни: задание, сроки, приобретённые навыки и поисковик.</p>
            </div>
        </div>
    </section>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php"); ?>
</body>
</html>