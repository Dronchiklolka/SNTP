<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="courses.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript</title>
</head>
<body>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"); ?>
    <section class="container">
        <img src="../../images/java.png" class="bakground__curs">
        <div class="name__cours">
            <h1>JavaScript</h1>
            <a href="#">Courses &#8212 &gt JavaScript</a>
        </div>
        <div class="cours__review">
            <h2>О курсе</h2>
            <p>Современный мир веба очень сложно представить без JS. JavaScript – это душа веб-сайта, так как все интерактивные действия выполняет JS. JavaScript является встроенным компонентом в веб-программировании, поэтому его не нужно устанавливать или настраивать.</p>
            <p>Стоимость курса 2000 рублей.</p>
            <a href="introduction/JavaScript-introduction.php" name="buу"><button class="button__buy">Приобрести курс</button></a>
        </div>
        <div class="cours__h2">
            <h2>Уроки</h2>
        </div>
        <div class="lesson__list">
            <div class="lesson__items">
                <h3>1. Основные моменты в JavaScript</h3>
                <p>Изучите Что такое JS и как его подключить к странице.Переменные и строгий режим.Классификация типов данных в JavaScript.Простое общение с пользователем.
                    </p>
            </div>
            <div class="lesson__items">
                <h3>2. Числа в JavaScript</h3>
                <p>Познакомиться с числами в JavaScript, научиться сравнивать, преобразовывать и округлять числа.</p>
            </div>
            <div class="lesson__items">
                <h3>3. Строки в JavaScript</h3>
                <p>Научиться работать со строками, объединять и сравнивать их.</p>
            </div>
            <div class="lesson__items">
                <h3>4. Объекты в JavaScript</h3>
                <p>Познакомиться с объектами в JavaScript, вкратце рассмотреть понятие прототипа.</p>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer__items">
                <div class="footer__content">
                    <h1>SNTP</h1>
                    <p> Образовательная <b>онлайн</b> платформа</p>
                </div>
        <div class="footer__content">
            <a href="#SNTP">Информация</a>
            <a href="#">Сиртифекаты</a>
            <a href="#">Реклама</a>
        </div>
        <div class="footer__content">
            <a href="#">О нас</a>
            <a href="#">Соглашения</a>
        </div>
        <div class="footer__content">
            <a href="#">Войти</a>
            <a href="#">Регистрация</a>
            <a href="#">Обратная связь</a>
        </div>
        <div class="footer__content">
            <p>Подпишитесь на рассылку и получите все уведомления от нашей платформы!</p>
        <foorm>
            <input type="email" id="email__footer" class="footer__subscribe" placeholder="E-mail">
             <div class="foorm__button">
                <a href="#">Подписаться</a>
            </div>
        </foorm>
            <a href="#" class="mail__footer">Пишите сюда: <b>sntp.ru@gmail.com</b></a>
        </div>
        </div>
        </div>
    </footer>
</body>
</html>