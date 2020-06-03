<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="courses.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
</head>
<body>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"); ?>
    <section class="container">
        <img src="/images/sql.png" class="bakground__curs">
        <div class="name__cours">
            <h1>SQL</h1>
            <a href="#">Courses &#8212 &gt SQL</a>
        </div>
        <div class="cours__review">
            <h2>О курсе</h2>
            <p>Во время курса будем подробно разбирать язык запросов и внутренние процессы СУБД, происходящие на всех этапах работы с запросом. Курс позволит понять детали процессов и получить чёткое представление, что делает тот или иной код, где могут возникнуть потенциальные проблемы, как их можно разрешить.
                Подробно рассмотрим оптимизацию кода, как нужно писать, если у вас миллиарды данных, расскажем о популярных граблях, чтобы вы смогли их обойти.
            </p>
            <p>Стоимость курса 1000 рублей.</p>
            <a href="introduction/SQL-introduction.php" name="buу"><button class="button__buy">Приобрести курс</button></a>
        </div>
        <div class="cours__h2">
            <h2>Уроки</h2>
        </div>
        <div class="lesson__list">
            <div class="lesson__items">
                <h3>1. Основы SQL</h3>
                <p> Установка и настройка таблиц для упражнений. Создание таблиц. Связи между таблицами.Основные запросы SELECT.</p>
            </div>
            <div class="lesson__items">
                <h3>2. Работа с несколькими таблицами</h3>
                <p>Создание таблиц. Типы данных.Первичный ключ и внешний ключ. Типы связей между таблицами.</p>
            </div>
            <div class="lesson__items">
                <h3>3. Продвинутый SQL</h3>
                <p>Таблицы учебной базы данных.Выбор колонок. Выражения.Выбор строк. Операторы AND, OR..Операторы IN, NOT IN, BETWEEN.Вложенные запросы (подзапросы).Как пишутся комментарии в SQL</p>
            </div>
            <div class="lesson__items">
                <h3>4. Итоговый проект</h3>
                <p>Резюме курса</p>
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