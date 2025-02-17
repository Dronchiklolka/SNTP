<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="registration.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <div class="overlay">
        <div class="overlay__content">
            <div class="modal">
                <h2 class="modal__title">Регистрация</h2>
                <div><form action="<?php echo '/server/register.php'; ?>" method="POST" class="form">
                    <div class="form__input">
                        <label for="" class="form__label">Логин</label>
                        <input class="form__field" name="login" type="text">
                    </div>
                    <div class="form__input">
                        <label for="" class="form__label">Пароль</label>
                        <input class="form__field" name="password" type="password">
                        </div>
                        <div class="form__input">
                            <label for="" class="form__label">Почта</label>
                            <input class="form__field" name="email" type="email">
                            </div>
                        <button class="form__button">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
