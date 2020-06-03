<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="courses.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>
<body>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"); ?>
    <section class="container">
        <img src="/images/MySQL.png" class="bakground__curs">
        <div class="name__cours">
            <h1>MySQL</h1>
            <a href="#">Courses &#8212 &gt MySQL</a>
        </div>
        <div class="cours__review">
            <h2>О курсе</h2>
            <p>На курсе «MySQL 8. Проектирование и создание баз данных для web» вы овладеете основными приемами и методами эффективной работы с сервером MySQL 8. В ходе обучения вы рассмотрите этапы проектирования и создания баз данных, подробно изучите SQL-операторы, научитесь управлять транзакциями на сервере MySQL. Вы сможете создавать хранимые процедуры и триггеры, научитесь эффективно использовать хранилища («движки») сервера MySQL. Этот курс необходим любому разработчику сайтов.
            </p>
            <p>Стоимость курса 1800 рублей.</p>
            <a href="introduction/MySQL-introduction.php" name="buу"><button class="button__buy">Приобрести курс</button></a>
        </div>
        <div class="cours__h2">
            <h2>Уроки</h2>
        </div>
        <div class="lesson__list">
            <div class="lesson__items">
                <h3>1.  Установка и запуск сервера MySQL</h3>
                <p> Дистрибутив.Структура файлов.Настройка конфигурационного файла.Инициализация данных сервера.Запуск сервера.Запуск консоли mysql.Команды консоли.Работа с MySQL Workbench.Базовые команды SQL</p>
            </div>
            <div class="lesson__items">
                <h3>2. Проектирование реляционной базы данных</h3>
                <p>Типы данных.Проектирование схемы базы в WorkBench.Нормализация таблицы базы.Создание ключей.Связи между таблицами.Работа с файлами .mwb.Экспорт SQL-кода из схемы базы</p>
            </div>
            <div class="lesson__items">
                <h3>3. Синтаксис выражений MySQL для определения структуры данных</h3>
                <p>DDS-операторы.Операторы создания базы.Создание таблиц.Временные таблицы.Индексы.Полнотекстовый индекс.Оператор модификации ALTER</p>
            </div>
            <div class="lesson__items">
                <h3>4. Выражения MySQL манипулирование данными</h3>
                <p>CRUD-операторы.Вставка данных.Загрузка данных LOAD.Обновление данных.Удаление.Выборка данных.Предикаты.Объединения таблиц</p>
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