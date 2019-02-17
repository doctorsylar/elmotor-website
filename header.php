<?php
$addressArray = explode('/', get_page_uri());
$pageName =  $addressArray[count($addressArray) - 1];
if (file_exists($_SERVER['DOCUMENT_ROOT']."/wp-content/themes/elmtr/inc/$pageName.php")) {
    require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-content/themes/elmtr/inc/$pageName.php");
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="<?= $pageDescription ?>">
    <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?> </title>
    <style>
        a {
            color: #ffffff;
        }
    </style>
    <link rel="stylesheet" href="<?=DS_ROOT . '/style.css'?>">
    <?php wp_head(); ?>

    <header class="main-header container-fluid">
        <div class="row">
            <div class="header-main col-12 col-lg-6">
                <div class="company-name">
                    <h1>
                        <a href="<?=DS_MAIN_URL ?>">
                            <img src="<?=DS_ROOT . '/img/transparent-sign.png'?>" alt="electromotor">
                            <span class="company-name-span">Электромотор</span>
                        </a>
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
                        <li class="contact-item">
                            <a href="https://wa.me/+79119854074">WhatsApp</a>
                        </li>
                        <li class="contact-item">
                            <a href="tel:+79119854074">+7 (911) 985-40-74</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <nav class="main-nav">
        <div class="container">
            <div class="mobile-navs">
                <a href="<?=DS_MAIN_URL ?>"><h2>Электромотор</h2></a>
                <i id="menu-toggler" class="fa fa-bars"></i>
            </div>
            <ul class="navigation">
                <li class="nav-item"><a href="<?= DS_MAIN_URL ?>">
                        <i class="fas fa-home"></i>
                        Главная
                    </a></li>
                <li class="nav-item"><a href="<?= DS_MAIN_URL . '/catalog' ?>">
                        <i class="fas fa-list"></i>
                        Каталог продукции
                    </a>
                    <ul class="nav-submenu">
                        <li class="nav-item">
                            <a href="<?= DS_MAIN_URL . '/catalog/electroengine' ?>">
                                Электродвигатели
                            </a></li>
                        <li class="nav-item"><a href="<?= DS_MAIN_URL . '/catalog/din' ?>">
                                Электродвигатели стандарта DIN
                            </a></li>
                        <li class="nav-item"><a href="<?= DS_MAIN_URL . '/catalog/reductor' ?>">
                                Редукторы</a></li>
                        <li class="nav-item"><a href="<?= DS_MAIN_URL . '/catalog/motor-reductor' ?>">
                                Мотор-редукторы</a></li>
                        <li class="nav-item"><a href="<?= DS_MAIN_URL . '/catalog/fan' ?>">
                                Вентиляторы</a></li>
                        <li class="nav-item"><a href="<?= DS_MAIN_URL . '/catalog/pump' ?>">
                                Насосы</a></li>
                        <li class="nav-item"><a href="<?= DS_MAIN_URL . '/catalog/bearing' ?>">
                                Подшипники</a></li>
                        <li class="nav-item"><a href="<?= DS_MAIN_URL . '/catalog/sale' ?>">
                                Распродажа</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="<?= DS_MAIN_URL . '/repair' ?>">
                        <i class="fas fa-wrench"></i>
                        Ремонт
                    </a>
                    <ul class="nav-submenu">
                        <li class="nav-item">
                            <a href="<?= DS_MAIN_URL . '/repair/commons-repair' ?>">
                                Общепромышленные электродвигатели</a></li>
                        <li class="nav-item">
                            <a href="<?= DS_MAIN_URL . '/repair/crane-repair' ?>">
                                Крановые электродвигатели</a></li>
                        <li class="nav-item">
                            <a href="<?= DS_MAIN_URL . '/repair/protected-repair' ?>">
                                Взрывозащищенные электродвигатели</a></li>
                        <li class="nav-item">
                            <a href="<?= DS_MAIN_URL . '/repair/constant-repair' ?>">
                                Электродвигатели постоянного тока</a></li>
                        <li class="nav-item">
                            <a href="<?= DS_MAIN_URL . '/repair/highvoltage-repair' ?>">
                                Высоковольтные электродвигатели</a></li>
                        <li class="nav-item">
                            <a href="<?= DS_MAIN_URL . '/repair/transformator-repair' ?>">
                                Трансформаторы</a></li>
                        <li class="nav-item">
                            <a href="<?= DS_MAIN_URL . '/repair/generator-repair' ?>">
                                Генераторы</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="<?= DS_MAIN_URL . '/search' ?>">
                        <i class="fas fa-search"></i>
                        Подбор электродвигателей
                    </a></li>
                <li class="nav-item"><a href="<?= DS_MAIN_URL . '/contacts' ?>">
                        <i class="fas fa-phone"></i>
                        Контакты
                    </a></li>
            </ul>
        </div>
    </nav>