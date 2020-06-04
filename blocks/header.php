<header>
    <div class="header__section">
        <div class="logo__content">
            <a href="#" class="logo">SNTP</a>
        </div>
    <nav class="header__item">
        <a href="/index.php" class="nav__link__first" onclick="SlowScroll('#main')">Главная</a>
    </nav>
    <nav class="header__item">  <a href="/index.php#first__curs" class="nav__link">Курсы</a>
    </nav>
    <nav class="header__item"> <a href="/pages/about-us/about_us.php" class="nav__link">О нас</a>
    </nav>
    <nav class="header__item">  <a href="/pages/articles/articles.php" class="nav__link">Статьи</a>
        </nav>
    <nav class="header__item"> <a href="/pages/help/help.php" class="nav__link">Справка</a>
        </nav>
</div>
    <?php if (!isset($_SESSION['login'])) { ?>
    <div class="header__section">
        <div class="header__item">
        <a href="/pages/input/input.php" class="open">Войти</a>
    </div>
    <div class="header__item">
        <a href="/pages/registration/registratin.php" class="link__registration">Зарегестрироваться</a>
    </div>
    </div>
    <?php } else { ?>
        <div class="header__section">
        <div class="header__item">
        <a href="#" class="open"><?php echo $_SESSION['login']?></a>
    </div>
    <div class="header__item">
        <form action="../server/logout.php" method="POST"><button class="link__registration">Выйти</button></form>
    </div>
    </div>
    <?php } ?>
</header>