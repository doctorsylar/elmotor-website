<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?> </title>
    <style>
        a {
            color: #ffffff;
        }
    </style>
    <?php wp_head(); ?>


    <header class="main-header container-fluid">
        <div class="row">
            <div class="header-main col-12 col-lg-6">
                <div class="company-name">
                    <h1>
                        <img src="<?=DS_ROOT . '/img/transparent-sign.png'?>" alt="electromotor">
                        <span class="company-name-span">Электромотор</span>
                    </h1>
                </div>
                <div class="header-contacts">
                    <ul>
                        <li class="contact-item">
                            <a href="tel:+7(812)7664974">+7 (812) 766-49-74</a>
                        </li>
                        <li class="contact-item">
                            <a href="mailto:leonenkov1965@yandex.ru">Leonenkov1965@yandex.ru</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <nav class="main-nav">
        <div class="container">
            <div class="mobile-navs">
                <a href="#"><h2>Электромотор</h2></a>
                <i id="menu-toggler" class="fa fa-bars"></i>
            </div>
            <ul class="navigation">
                <li class="nav-item"><a href="<?= get_site_url() ?>">
                        Главная
                    </a></li>
                <li class="nav-item"><a href="<?= get_site_url() . '/catalog' ?>">
                        Каталог продукции
                    </a></li>
                <li class="nav-item"><a href="<?= get_site_url() . '/repair' ?>">
                        Ремонт
                    </a></li>
                <li class="nav-item"><a href="<?= get_site_url() . '/search' ?>">
                        Подбор электродвигателей
                    </a></li>
                <li class="nav-item"><a href="<?= get_site_url() . '/contacts' ?>">
                        Контакты
                    </a></li>
            </ul>
        </div>
    </nav>