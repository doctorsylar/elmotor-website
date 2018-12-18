<?php
/*
Template Name: commons-repair
*/
?>
<?php get_header(); ?>
<main>
    <section class="wrapper">
        <h2 class="section-header">Ремонт общепромышленных электродвигателей, без НДС</h2>
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
        </div>
    </section>
</main>

<?php get_footer(); ?>