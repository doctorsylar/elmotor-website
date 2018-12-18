<?php
/*
Template Name: protected-repair
*/
?>
<?php get_header(); ?>
    <link rel="stylesheet" href="<?=DS_ROOT . '/css/commons-repair-style.css' ?>">
<main>
    <section class="wrapper">
        <h2 class="section-header">Цены за ремонт взрывозащищенных электродвигателей, без НДС</h2>
        <div class="container">
            <div class="tables-container row">
                <div class="table-container col-12">
                    <table class="price-table" border="1" cellspacing="0">
                        <tbody>
                        <tr>
                            <td rowspan="2" width="20%">
                                <p style="text-align: center;">Мощность,<br>кВт</p>
                            </td>
                            <td style="text-align: center;" colspan="4" width="80%">
                                Номинальная частота вращения , об/мин
                            </td>
                        </tr>
                        <tr>
                            <td>3000</td>
                            <td>1500</td>
                            <td>1000</td>
                            <td>750</td>
                        </tr>
                        <?php foreach (getRepairPriceItems() as $item) : ?>
                        <tr>
                            <td><?=$item['title'] ?></td>
                            <td><?=$item['3000price'] ?></td>
                            <td><?=$item['1500price'] ?></td>
                            <td><?=$item['1000price'] ?></td>
                            <td><?=$item['750price'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="additions-container">
                <p>Дополнения:</p>
                <p>Коэффициенты изменения цены за ремонт электродвигателей:</p>
                <ol class="additions">
                    <li class="addition-item">для взрывозащищенных - <b>1,2</b></li>
                </ol>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>