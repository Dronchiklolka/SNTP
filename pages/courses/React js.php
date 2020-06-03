<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="courses.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>React.js</title>
</head>
<body>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"); ?>
    <section class="container">
        <img src="/images/react.png" class="bakground__curs">
        <div class="name__cours">
            <h1>React.js</h1>
            <a href="#">Courses &#8212 &gt React.js</a>
        </div>
        <div class="cours__review">
            <h2>О курсе</h2>
            <p>Представляем вам курс по изучению JavaScript фреймворка - React JS. В ходе курса вы изучите работу с реактом, научитесь прописывать на его основе программы и создадите одно полноценное приложение с красивым пользовательским дизайном.</p>
            <p>Стоимость курса 800 рублей.</p>
            <a href="introduction/React.js-introduction.php" name="buу"><button class="button__buy">Приобрести курс</button></a>
        </div>
        <div class="cours__h2">
            <h2>Уроки</h2>
        </div>
        <div class="lesson__list">
            <div class="lesson__items">
                <h3>1. Первая программа на React</h3>
                <p> В уроке мы сделаем первую простую программу на React JS. Мы познакомимся с методом render, а также ReactDOM. Мы научимся выводить информацию прямиком в какой-либо блок на сайте.</p>
            </div>
            <div class="lesson__items">
                <h3>2. Создание компонентов</h3>
                <p>В уроке мы изучим одну из ключевых составляющих React JS - компоненты. Благодаря ним мы можем создавать блоки с HTML и выводить их на страницах сайта. Тем самым мы сможем наполнить веб сайт различной информацией.</p>
            </div>
            <div class="lesson__items">
                <h3>3. Рендер нескольких компонентов</h3>
                <p>В уроке мы научимся рендерить сразу несколько компонентов. Также мы рассмотрим некоторые мелкие понятия в React JS, которые в дальнейшем нам пригодятся.</p>
            </div>
            <div class="lesson__items">
                <h3>4. Использование свойств</h3>
                <p>В уроке мы научимся работать со свойствами, а также атрибутами объектов. На основе лишь одного компонента мы создадим разные объекты для вывода информации на экран.</p>
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