<?php
/*
Template Name: commons-repair
*/
?>
<?php get_header(); ?>
<main>
    <section class="wrapper">
        <h2 class="section-header">Цены за ремонт общепромышленных электродвигателей, без НДС</h2>
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
                    <li class="addition-item">с фазным ротором - <b>1,8</b> (статор - <b>1,0</b>; ротор - <b>0,8</b>);</li>
                    <li class="addition-item">для импортных - <b>1,3</b> (в.в.56-80 - <b>1,6</b>);</li>
                    <li class="addition-item">для серий А, АО, АО2, А2 - <b>1,1</b></li>
                    <li class="addition-item">для взрывозащищенных - <b>1,2</b></li>
                    <li class="addition-item">для однофазных - <b>1,3</b></li>
                    <li class="addition-item">для погруженных электронасосов типа "Гном" - <b>1,8</b></li>
                    <li class="addition-item">снятие муфт, шкивов, шестерен с вала ротора оплачивается дополнительно;</li>
                    <li class="addition-item">отсутствие обмотки в статоре - <b>1,2</b></li>
                    <li class="addition-item">за срочность (срок выполнения заказа до 4-х рабочих дней) - <b>1,3</b></li>
                    <li class="addition-item">ремонт только статора - <b>0.9</b></li>
                </ol>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>