<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <header class="hero">
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
                <?php 
                    $args = array(
                        'theme_location' => 'primary',
                        'container' => '',
                        'menu_class' => 'main-menu__list',
                        'link_before' => '<span class="main-menu__link">',
                        'link_after' => '</span>'
                    );

                    wp_nav_menu($args);
                ?>
            </nav>


            <ul class="activities">
                <li class="activities__item">
                    Разработка схем теплоснабжения, газораспределения, водоснабжения и водоотведения
                </li>
                <li class="activities__item">
                    Разработка комплексных программных документов для муниципальных образований, промышленных и сетевых компаний
                </li>
                <li class="activities__item">
                    Разработка предпроектных и проектных решений в области теплоснабжения, энергосбережения, топливоснабжения и повышения энергетической
                    эффективности
                </li>
                <li class="activities__item">
                    Энергетические обследования с разработкой предложений по энергосервисному обслуживанию и повышению энергетической эффективности
                </li>
                <li class="activities__item">
                    Диагностика и обследование энергетического оборудования, определение электромагнитной совместимости на промышленных и сетевых
                    объектах
                </li>
            </ul>
        </div>
    </header>



<?php get_template_part('content-main'); ?>

<?php get_footer(); ?>