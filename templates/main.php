<!DOCTYPE html>
<html lang="en">
<head>
    <meta acharset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?='some'?></title>
</head>
<body>
    <?php
        $username='Alex Garkaviy';
        print($data['user']);
    ?>
    <header class="main-header">
        <div class="header__upper-part">
            <h1>
                <a href="#">Клуб ЮНЕСКО "КЛЮВ"</a>
            </h1>
            <?php if(!$data['user']) {?>
            <ul class="header__authorization-list">
                <li class="authorization-item">
                    <a href="#">Войти</a>
                </li>
                <li class="authorization-item">
                    <a href="#">Регистрация</a>
                </li>
            </ul>
            <?php } else {?>
            <p class="header__username"><?=$username?></p>
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
                    <a href="#">Главная</a>
                </li>
                <li class="nav__item"> 
                    <a href="#">О клубе</a>
                </li>
                <li class="nav__item">
                    <a href="#">Новости</a>
                </li>
                <li class="nav__item">
                    <a href="#">Состав клуба</a>
                </li>
                <li class="nav__item">
                    <a href="#">План мероприятий</a>
                </li>
            </ul>
        </nav>
    </header>

    <?php render_template('templates/last_news.php', ['news' => $data['news']])?>

    <?php render_template('templates/nearest_events.php', ['events' => $data['events']])?>

    <footer class="main-footer">
        <a class="footer__logo" href="#" aria-label="Логотип веб-сайта"></a>
        <ul class="footer__services">
            <li class="services__item">
                <a href="#"></a>
            </li>
            <li class="services__item">
                <a href="#"></a>
            </li>
            <li class="services__item">
                <a href="#"></a>
            </li>
        </ul>
        <p class="footer__organization-name">Гродненский клуб ЮНЕСКО "Клюв"</p>
    </footer>
</body>
</html>