<?php
/*
Template Name: repair
*/
?>
<?php get_header(); ?>
    <link rel="stylesheet" href="<?=DS_ROOT . '/css/catalog-style.css' ?>">
    <main>
        <section class="wrapper catalog">
            <h2 class="section-header">Виды проводимых ремонтных работ</h2>
            <div class="container">
                <div class="row catalog-container">
                    <ul>
                        <li class="catalog-item">
                            <a href="<?= DS_MAIN_URL . '/repair/commons-repair' ?>">Ремонт общепромышленных электродвигателей</a>
                        </li>
                        <li class="catalog-item">
                            <a href="<?= DS_MAIN_URL . '/repair/crane-repair' ?>">Ремонт крановых электродвигателей</a>
                        </li>
                        <li class="catalog-item">
                            <a href="<?= DS_MAIN_URL . '/repair/protected-repair' ?>">Ремонт взрывозащищенных электродвигателей</a>
                        </li>
                        <li class="catalog-item">
                            <a href="<?= DS_MAIN_URL . '/repair/constant-repair' ?>">Ремонт электродвигателей постоянного тока</a>
                        </li>
                        <li class="catalog-item">
                            <a href="<?= DS_MAIN_URL . '/repair/highvoltage-repair' ?>">Ремонт высоковольтных электродвигателей</a>
                        </li>
                        <li class="catalog-item">
                            <a href="<?= DS_MAIN_URL . '/repair/transformator-repair' ?>">Ремонт трансформаторов</a>
                        </li>
                        <li class="catalog-item">
                            <a href="<?= DS_MAIN_URL . '/repair/generator-repair' ?>">Ремонт генераторов</a>
                        </li>
                        <li class="catalog-item">
                            <a href="<?= DS_MAIN_URL . '/repair/tokar' ?>">Токарные работы</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>