<?php
    //  Template Name: Contacts Page
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>

    <title><?php bloginfo('name'); ?> — Контакты</title>
</head>

<body>
    <header class="hero hero--page">
        <div class="header-bar">
            <div class="container">
                <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="лого" class="logo__image">
                </div>
                <h1 class="company-name">
                    НефтеГазЭнергоСервис
                </h1>
                <div class="contacts">
                    <a href="tel:+74991265327">+7(499)126-53-27</a><br>
                    <a href="mailto:info@ngeservice.com">info@ngeservice.com</a>
                </div>
            </div>
        </div>


        <div class="container">
        <nav class="main-menu">
                <ul class="main-menu__list">
                    <li class="main-menu__item">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="main-menu__link">Главная</a>
                    </li>
                    <li class="main-menu__item">
                        <a href="<?php echo esc_url(home_url('/')); ?>activities" class="main-menu__link">Деятельность</a>
                    </li>
                    <li class="main-menu__item">
                        <a href="<?php echo esc_url(home_url('/')); ?>offers" class="main-menu__link">Спецпредложения</a>
                    </li>
                    <li class="main-menu__item main-menu__item--active">
                        <a href="<?php echo esc_url(home_url('/')); ?>contacts" class="main-menu__link">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <section class="section">
                <h2 class="section__caption">
                    Контактная информация
                </h2>
                <p class="section__text">
                    <ul class="section__list">
                        <li class="section__item">
                            Адрес: 117449, г. Москва, ул. Шверника 7, пом.4
                        </li>
                        <li class="section__item">
                            Телефон/факс: <a href="tel:+74991265327">+7(499) 126-53-27</a>
                        </li>
                        <li class="section__item">
                            Сайт: <a href="http://ngeservice.com">NGEService.com</a>
                        </li>
                        <li class="section__item">
                            Электропочта: <a href="mailto:info@ngeservice.ru">info@ngeservice.ru</a> 
                        </li>
                    </ul>
                </p>
            </section>
        </div>

            <section class="section section--map">
                <iframe src="https://api-maps.yandex.ru/frame/v1/-/CZshu4ij" width="100%" height="560" frameborder="0"></iframe>
            </section>
    </main>

    <?php get_footer(); ?>

</body>

</html>
