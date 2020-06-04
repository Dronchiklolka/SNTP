<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <title>SNTP</title>
</head>
<body>
    <div class="wrapper">
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"); ?>
        <main class="main-screen">
            <div class="background"></div>
            <div class="main-screen__greetings">
                <h1 class="main-screen__greetings-title">SNTP</h1>
                <h3 class="main-screen__greetings-slogan">Для тех кто новичок в <span class="color-red">IT</span></h3>
            </div>
            <div class="main-screen__items">
                <p class="main-screen__items__items">Для вас у нас подготовлены самые разные курсы</p>
                 <p class="main-screen__items__items">Начните обучаться сейчас</p>
            </div>
            <div class="main-screen__footer">
                <a href="/pages/registration/registratin.php" class="button main-screen__footer-button">Зарегистрироваться</a>
                <a href="#first__curs" class="button bg-blue">Наши курсы</a>
            </div>
        </main>
        <section class="section section__courses container">
            <a href="#" class="section__title" name="first__curs">Курсы</a>
            <div class="courses">
                <?php   
                    require_once $_SERVER['DOCUMENT_ROOT'] . "/helpers/mysqlDB.php";

                    // получить курсы из бд
                    $queryString = "SELECT * FROM courses";
                    $queryResult = mysqli_query($mysqlConnection, $queryString);

                    while ($courseRow = mysqli_fetch_array($queryResult, MYSQLI_ASSOC)) {
                        echo '<div class="section__course"><img class="course__image" src="images/' . $courseRow["imgSrc"] . '" alt="Frontend"><a class="course__title" href="/courses?id=' . $courseRow["id"] . '">' . $courseRow["name"] . '</a></div>';
                    }
                ?>
            </div>
        </section>
            <section class="container">
            <h1 class="feedeback"> Отзывы </h1>
            <h2 class="feedback__center">Новички</h2>
            <div class="feedback__container">
                <div class="feedback__content">
                    <div class="feedback__head">
                        <img src="images/Ellipse4.png"> 
                        <p>Андрей Бойков</p> 
                    </div>
                    <div class="feddback__text">
                        <p>Когда я покупал курс, я даже и представить не мог что вёрстка сайтов такое лёгкое занятие, много времени сейчас вкладываю так как всё равно дома сижу</p>
                    </div>
                    <div class="feedback__exit">
                        <h2>Я закончил курсы</h2>
                        <p>Frontend backend javascript webpack</p>
                    </div>
                </div>
                <div class="feedback__content">
                    <div class="feedback__head">
                        <img src="images/Ellipse3.png"> 
                        <p>Бобров Олег</p> 
                    </div>
                    <div class="feddback__text">
                        <p>Было интересно прикоснуться к так называемой обратной стороне сайта, не думал что будет так сложно, но у меня уже получается делать всё, чем обещали научить!</p>
                    </div>
                    <div class="feedback__exit">
                        <h2>Я закончил курсы</h2>
                        <p>Frontend backend javascript webpack</p>
                    </div>
                </div>
            </div>
                <h2 class="feedback__center">С опытом</h2>
                <div class="feedback__container">
                <div class="feedback__content">
                    <div class="feedback__head">
                        <img src="images/Ellipse 2.png"> 
                        <p>Филип Киркоров</p> 
                    </div>
                    <div class="feddback__text">
                        <p>Хорошо поднатянул навыки вёрстки и создания функционала сайта.</p>
                    </div>
                    <div class="feedback__exit">
                        <h2>Я закончил курсы</h2>
                        <p>Frontend backend javascript</p>
                    </div>
                </div>
                <div class="feedback__content">
                    <div class="feedback__head">
                        <img src="images/Ellipse 1.png"> 
                        <p>Никита Львович</p> 
                    </div>
                    <div class="feddback__text">
                        <p>Не дорогие курсы, отлично преподнесён материал.</p>
                    </div>
                    <div class="feedback__exit">
                        <h2>Я закончил курсы</h2>
                        <p>Frontend backend javascript SQL webpack</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="contacts__head">
                <p>Связаться с нами так же легко, как вам cвязаться с вашим другом.</p>
            </div>
            <div class="contacts__items">
            <div class="contacts">
                <img src="images/YouTube.png">
            </div>
        </div>
            <div class="contacts__content">
                <a href="https://tinyurl.com/yd74jhgk">Канал на ютуб</a>
            </div>
            <div class="contacts__items">
            <div class="contacts">
                <img src="images/VK.png">
            </div>
         </div>
            <div class="contacts__content">
                <a href="https://vk.com/public192016228">Группа в Вконтакте</a>
            </div>
            <div class="contacts__items">
            <div class="contacts">
                <img src="images/Telegram.png">
            </div>
         </div>
            <div class="contacts__content">
                <a href="https://t.me/SNTPRU">Telegram канал</a>
            </div>
        </div>
        </section>
      <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php"); ?>
</body>
</html>