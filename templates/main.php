<!DOCTYPE html>
<html lang="en">
<head>
    <meta acharset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title><?='Клуб ЮНЕСКО "Клюв"'?></title>
</head>
<body>
    <?php
        $username='Alex Garkaviy';
    ?>
    <header class="main-header">
        <div class="header__upper-part">
            <h1 class="header__name">
                <a href="#">Клуб ЮНЕСКО "КЛЮВ"</a>
            </h1>
            <?php if(!$_SESSION['logged']) {?>
            <ul class="header__authorization-list">
                <li class="authorization-item login">
                    <a href="#">Войти</a>
                </li>
                <li class="authorization-item register">
                    <a href="#">Регистрация</a>
                </li>
            </ul>
            <?php } else {?>
            <ul class="header__authorization-list">
                    <a href="index.php?admin=true"><?=$_SESSION['email']?></a>
                    <a href="index.php?exit=true">Выйти</a>
            </ul>
            <?php }?>
        </div>
        <p class="header__slogan">
            Если вы не можете делать
            великие дела, делайте
            маленькие дела по-великому
        </p>
        <nav class="header__nav">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.php">Главная</a>
                </li>
                <li class="nav__item"> 
                    <a href="index.php?aboutpage=true">О клубе</a>
                </li>
                <li class="nav__item">
                    <a href="index.php?newspage=true">Новости</a>
                </li>
                <li class="nav__item">
                    <a href="index.php?memberspage=true">Состав клуба</a>
                </li>
                <li class="nav__item">
                    <a href="index.php?eventspage=true">План мероприятий</a>
                </li>
            </ul>
        </nav>
    </header>
    <?php
    foreach($data['pages'] as $index => $page) {
        render_template($page['path'], ['args' => $page['args']]);
    }
    ?>
    <footer class="main-footer">
        <a class="footer__logo" href="index.php" aria-label="Логотип веб-сайта"></a>
        <ul class="footer__services">
            <li class="services__item insta">
                <a href="#" aria-label="Инстаграмм"></a>
            </li>
            <li class="services__item vk">
                <a href="#" aria-label="Вконтакте"></a>
            </li>
            <li class="services__item telegram">
                <a href="#" aria-label="Телеграмм"></a>
            </li>
        </ul>
        <p class="footer__organization-name">Гродненский клуб ЮНЕСКО "Клюв"</p>
    </footer>
    <section class="authorization-popup hidden">
        <form action="index.php" method="post">
            <label class="authorization__email-label" for="email">Введите почту:</label>
            <input class="authorization__email-input" name="email" maxlength="255" required type="email" id="email">
            <label class="authorization__password-label" for="password">Введите пароль:</label>
            <input class="authorization__password-input" name="password" required type="password" maxlength="255" id="password">
            <button class="authorization__button" type="submit">Войти</button>
            <button class="authorization__close-button" aria-label="Закрыть окно"></button>
        </form>
    </section>
    <script type="text/javascript" src="../js/script.js"></script> 
</body>
</html>