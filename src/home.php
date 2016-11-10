<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
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
                <ul class="main-menu__list">
                    <li class="main-menu__item">
                        <a href="" class="main-menu__link  main-menu__link--active">Главная</a>
                    </li>
                    <li class="main-menu__item">
                        <a href="" class="main-menu__link">Деятельность</a>
                    </li>
                    <li class="main-menu__item">
                        <a href="" class="main-menu__link">Спецпредложения</a>
                    </li>
                    <li class="main-menu__item">
                        <a href="" class="main-menu__link">Контакты</a>
                    </li>
                </ul>
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



    <main>
        <div class="container">
            <section class="section">
                <h2 class="section__caption">
                    О компании
                </h2>
                <p class="section__text">
                    ООО «НефтеГазЭнергоСервис» было образовано в 2012 году для удовлетворения растущего спроса на высококачественные услуги в
                    области инжиниринговых обследований, подготовки проектной и предпроектной документации, проведения обследования
                    и диагностики электрического и теплового оборудования.
                </p>
            </section>


            <section class="section">
                <h2 class="section__caption">
                    Наш опыт
                </h2>
                <p class="section__text">
                    За несколько лет деятельности наша компания достигла впечатляющих результатов по объемам оказываемых услуг:
                    <ul class="section__list">
                        <li class="section__item">были разработаны и успешно защищены схемы теплоснабжения и схемы водоснабжения более чем 15 населенных
                            пунктов, среди которых такие крупные города как Уфа и Нефтекамск. В настоящее время мы оказываем
                            услуги по актуализации схем теплоснабжения городов Самара и Уфа, а также по разработке и внедрению
                            в существующую АСУТП электронных моделей схем теплоснабжения компрессорных станций ПАО «Газпром»;
                            </li>
                        <li class="section__item">были разработаны программы комплексного развития коммунальной инфраструктуры нескольких муниципальных
                            образований, программа энергосбережения и повышения энергетической эффективности г. Уфа;</li>
                        <li class="section__item">восстановлена исполнительная документация на ЦТП и распределительные сети отопления, ГВС и ХВС студенческого
                            городка «Дорогомилово»;</li>
                        <li class="section__item">кроме того, в рамках реализации комплексного подхода к энергоаудиту «НефтеГазЭнергоСервис» провел
                            энергетические обследования и заключил энергосервисные контракты в различных регионах России,
                            в том числе с ФГБОУ ВПО МГТУ «Станкин», результаты по которому были представлены и высоко оценены
                            на VI Энергетическом форуме Минобрнауки России «Стандарты энергоэффективности: организации образования
                            и науки»</li>
                    </ul>
                </p>
            </section>

            <?php
                the_content();
            ?>
        </div>
    </main>



    <footer class="main-footer">
        <div class="container">
            <div class="footer-address">
                © ООО НИЦ «НефтеГазЭнергоСервис», 2009-2016<br>
                117449 Москва, ул.Шверника д.7,<br>
                тел./факс. 499-126-53-27
            </div>

            <nav class="footer-menu">
                <ul class="footer-menu__list">
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link  footer-menu__link--active">Главная</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Деятельность</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Спецпредложения</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
</body>

</html>