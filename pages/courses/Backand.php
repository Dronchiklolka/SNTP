<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="courses.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backand</title>
</head>
<body>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"); ?>
    <section class="container">
        <img src="/images/back.png" class="bakground__curs">
        <div class="name__cours">
            <h1>Backand</h1>
            <a href="#">Courses &#8212 &gt Backand</a>
        </div>
        <div class="cours__review">
            <h2>О курсе</h2>
            <p>Программа Back-end разработчик рассчитана на новичков, которые хотят изучить язык PHP, а также построение веб сайтов на стороне сервера. За время программы вы изучите язык PHP, научитесь работать с его библиотеками, создадите несколько веб сайтов, рассмотрите MVC, ООП, Cron, Curl, принципы и паттерны программирования и множество других терминов и понятий.</p>
            <p>Стоимость курса 2100 рублей.</p>
            <a href="introduction/backand-introduction.php" name="buу"><button class="button__buy">Приобрести курс</button></a>
        </div>
        <div class="cours__h2">
            <h2>Уроки</h2>
        </div>
        <div class="lesson__list">
            <div class="lesson__items">
                <h3>1. PHP основы</h3>
                <p>Язык PHP лежит в основе профессии Back-end разработчик. В первом модуле программы вы ознакомитесь с установкой и настройкой локального сервера, а также с установкой редактора.

                    За модуль вами будут изучены базовые моменты при работе с языком PHP. Вы научитесь встраивать PHP в HTML, научитесь создавать переменные, циклы, массивы, функции, а также ознакомитесь со множеством других понятий.</p>
            </div>
            <div class="lesson__items">
                <h3>2. PHP Продвинутый</h3>
                <p>Во втором уроке вы ознакомитесь с лишь базовыми моментами в PHP. В ходе второго модуля вами будут изучены более сложные концепции языка.

                    В уроках вы научитесь работать с куки, сессиями, познакомитесь с ООП, трейтами, а также интерфейсами. Вы получите весь багаж знаний для дальнейшей работы с ООП: классами и объектами.</p>
            </div>
            <div class="lesson__items">
                <h3>3. База данных MySQL</h3>
                <p>Для хранения записей с веб сайта лучше всего использовать базу данных. В ходе модуля вы научитесь работать с базой данных MySQL, а также с графическим редактором PhpMyAdmin.
                    Вами будет изучен язык запросов к базе данных SQL, а также специальная PHP технология для связи с БД - технология PDO.</p>
                <p>PDO обеспечивает защищенное и быстрое подключение к базе данных, поэтому именно через неё принято работать с БД.</p>
            </div>
            <div class="lesson__items">
                <h3>4. Создание блога. Главная страница и система регистрации</h3>
                <p>В ходе лекций вы ознакомитесь с созданием сайта без использования PHP ООП. Вами будет создан веб блог с системой регистрации, авторизации, добавлением статей и выводом их на сайте.

                    В ходе этого модуля вы создадите лишь главную страницу и систему регистрации. Приятным бонусом станет то, что каждая форма на сайте будет использовать технологию Ajax для передачи данных на сервер. Таким образом отправка всех данных на сервер будет происходить без перезагрузки страницы.</p>
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