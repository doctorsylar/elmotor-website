<?php
/*
Template Name: sale
*/
?>
<?php get_header(); ?>
<main>
    <section class="sale wrapper">
        <h2 class="section-header">Распродажа электродвигателей</h2>
        <div class="container">
            <div class="row sale-container">
                <?php foreach (getSaleItems() as $item): ?>
                <div class="sale-item">
                    <div class="image">
                        <img src="<?=$item['thumbnail'] ?>" alt="<?=$item['title'] ?>">
                    </div>
                    <div class="text">
                        <div class="sale-name">
                            <?=$item['title'] ?>
                        </div>
                        <div class="sale-price">
                            Цена: <?=$item['price'] ?> рублей.
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>