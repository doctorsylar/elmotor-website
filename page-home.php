<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<main>
    <section class="production wrapper">
        <h2 class="section-header">Наша продукция и услуги</h2>
        <div class="container">
            <div class="row production-items">
                <div class="production-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="item-inner">
                        <div class="picture">
                            <img src="<?= DS_ROOT . '/img/homepage/electrodvig.jpg' ?>" alt="электродвигатель">
                        </div>
                        <div class="text">
                            электродвигатели
                        </div>
                    </a>
                </div>
                <div class="production-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="item-inner">
                        <div class="picture">
                            <img src="<?= DS_ROOT . '/img/homepage/eldvigrem.png' ?>" alt="ремонт электродвигателей">
                        </div>
                        <div class="text">
                            ремонт электродвигателей
                        </div>
                    </a>
                </div>
                <div class="production-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="item-inner">
                        <div class="picture">
                            <img src="<?= DS_ROOT . '/img/homepage/reduktory.jpg' ?>" alt="редукторы">
                        </div>
                        <div class="text">
                            редукторы
                        </div>
                    </a>
                </div>
                <div class="production-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="item-inner">
                        <div class="picture">
                            <img src="<?= DS_ROOT . '/img/homepage/motor-red.jpg' ?>" alt="мотор-редукторы">
                        </div>
                        <div class="text">
                            мотор-редукторы
                        </div>
                    </a>
                </div>
                <div class="production-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="item-inner">
                        <div class="picture">
                            <img src="<?= DS_ROOT . '/img/homepage/vent.png' ?>"
                                 alt="вентиляторы"
                                 style="margin-top: 20px;"
                            >
                        </div>
                        <div class="text">
                            вентиляторы
                        </div>
                    </a>
                </div>
                <div class="production-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="item-inner">
                        <div class="picture">
                            <img src="<?= DS_ROOT . '/img/homepage/nasosi.jpg' ?>" alt="насосы">
                        </div>
                        <div class="text">
                            насосы
                        </div>
                    </a>
                </div>
                <div class="production-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="item-inner">
                        <div class="picture">
                            <img src="<?= DS_ROOT . '/img/homepage/podship.png' ?>"
                                 alt="подшипники"
                                 style="width: 80%; margin-left: 25px;">
                        </div>
                        <div class="text">
                            подшипники
                        </div>
                    </a>
                </div>
                <div class="production-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="#" class="item-inner">
                        <div class="picture">
                            <img src="<?= DS_ROOT . '/img/homepage/tokar.jpg' ?>" alt="токарные работы">
                        </div>
                        <div class="text">
                            токарные работы
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages wrapper">
        <h2 class="section-header">Преимущества работы с нами</h2>
        <div class="container-fluid">

        </div>
    </section>
</main>
    <link rel="stylesheet" href="<?=DS_ROOT . '/css/home-style.css'?>">
<?php get_footer(); ?>