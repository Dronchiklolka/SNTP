<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="introduction.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fronted-introduction</title>
</head>
<body>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"); ?>
    <section class="container">
        <div class="cours__content">
            <div class="cours__left">
                <a class="lessons__list lessons__list-active" href="#">Основные понятия</a>
                <br><br><br>
                <a class="lessons__list" href="#">Расширенные возможности HTML и CSS</a>
                <br><br><br>
                <a class="lessons__list" href="#">HTML и CSS. Работа с макетом</a>
            </div>
            <div class="cours__right">
                <div class="bakground__curs">
                </div>
            <div class="name__cours">
                <h1>Frontend</h1>
                <a href="#">Courses &#8212 &gt Frontend  &#8212 &gt основные понятия</a>
            </div>
            <div class="leson__description">
                <h2>Основные понятия</h2>
                <p>В ходе первой лекции вы ознакомитесь с построением сайтов и узнаете из чего состоит современная вёрстка сайтов. Вы изучите понятия Front-end, а также рассмотрите клюевые необходимые технологии.Также вы выполните установку всех необходимых программ для комфортного написания кода.</p>
            </div>
            <div class="leson__video">
                <h2>Видео</h2>
                <video controls="controls">
                </video>
            </div>
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