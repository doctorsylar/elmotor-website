<footer>
    <div class="inner-footer container">
        <div class="row work-hours">
            <h3>Время работы</h3>
            <div class="hours">Понедельник-четверг: 08.30 - 17.00</div>
            <div class="hours">Пятница: 08.30 - 16.00</div>
            <div>г.Санкт-Петербург, ул.Салова, д.57</div>
        </div>
        <div class="row footer-contacts">
            <div class="col-12 col-sm-6 col-lg-3 ">
                <div class="contact-selling row">
                    <h3>Продажа электродвигателей</h3>
                    <div>
                        <a href="tel:+7(812)7664974">
                            <i class="fas fa-phone"></i>
                            +7 (812) 766-49-74
                        </a>
                    </div>
                    <div>
                        <a href="mailto:leonenkov1965@yandex.ru">
                            <i class="far fa-envelope"></i>
                            Leonenkov1965@yandex.ru
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 ">
                <div class="contact-repair row">
                    <h3>Ремонтное производство</h3>
                    <div>
                        <a href="tel:+7(812)7664588">
                            <i class="fas fa-phone"></i>
                            +7 (812) 766-45-88
                        </a>
                    </div>
                    <div>
                        <a href="mailto: info@elmotorspb.ru">
                            <i class="far fa-envelope"></i>
                            info@elmotorspb.ru
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 ">
                <div class="contact-repair-big_machines row">
                    <h3>Ремонт больших машин</h3>
                    <div>
                        <a href="tel:+7(812)3365556">
                            <i class="fas fa-phone"></i>
                            +7 (812) 336-55-56
                        </a>
                    </div>
                    <div>
                        <a href="mailto:elmotor@list.ru">
                            <i class="far fa-envelope"></i>
                            elmotor@list.ru
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 ">
                <div class="row contact-office">
                    <h3>Офис</h3>
                    <div>
                        <a href="tel:+7(812)4499821">
                            <i class="fas fa-phone"></i>
                            +7 (812) 449-98-21
                        </a>
                    </div>
                    <div>
                        <a href="tel:+7(812)4499112">
                            <i class="fas fa-phone"></i>
                            +7 (812) 449-91-12
                        </a>
                    </div>
                    <div>
                        <a href="tel:+7(812)4499199">
                            <i class="fas fa-phone"></i>
                            +7 (812) 449-91-99
                        </a>
                    </div>
                    <div>
                        <a href="mailto: info@elmotorspb.ru">
                            <i class="far fa-envelope"></i>
                            info@elmotorspb.ru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        © 2018 | <a href="https://ai-development.ru/" target="_blank">AI-development</a>
    </div>
</footer>

<?php
$addressArray = explode('/', get_page_uri());
$pageName =  $addressArray[count($addressArray) - 1];
?>
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=cyrillic" rel="stylesheet">
<link rel="stylesheet" href="<?=DS_ROOT . '/css/bootstrap-grid.min.css'?>">
<link rel="stylesheet" href="<?=DS_ROOT . "/css/$pageName-style.css"?>">
<link rel="stylesheet" href="<?=DS_ROOT . '/fa5/css/all.css'?>">
<script src="<?=DS_ROOT . '/js/jquery-3.3.1.min.js'?>"></script>
<script src="<?=DS_ROOT . '/js/script.js'?>"></script>
<script src="<?=DS_ROOT . "/js/$pageName-script.js"?>"></script>