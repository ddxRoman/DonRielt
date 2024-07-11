
        <? 
        // require_once "php/dates.php";
        require_once "C:\OSPanel\domains\DonRielt\php\dates.php";
        ?>
        <div class="container">
            <div class="row footer__first-line">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <p class="footer_first-line-text">
                        Наш Офис
                    </p>
                </div>
                <!-- <div class="col-2 footer__image_block"></div> -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <p class="footer__office-telephone">
                        Телефон нашего офиса
                    </p>
                    <p class="footer__office-telephone-number">
                        <a href="tel:<?= $ContactTelephone ?>" title="Позовнить">
                            <?= $ContactTelephone ?>
                        </a>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 footer__image_block">
                    <img class="footer__image" src="../resources/img/pictures/House-on-hand__footer.png" alt="Картинка футера">
                </div>
            </div>
            <div class="row footer__second-line">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="row">
                        <p class="footer__city"><?= $office_City ?></p>
                    </div>
                    <div class="row">
                        <p class="footer__adress"><a href="../pages/contacts.php "><?= $office_Adress ?></a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="row">
                        <p class="footer__city">График работы:</p>
                    </div>
                    <div class="row">
                        <p class="footer__worktime"><a href="#"><?= $Work_schedule ?></a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-0 col-sm-0 col-0 ">

                </div>
            </div>
            <div class="row footer__three-line">
                <div class="col-lg-4 col-md-4 col-sm-4 col-4 footer__private-policy">&#64;2023-<?= $Current_Year ?> Private Policy </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 footer_private_policy_link"> <a href=""> Политика конфиденциальности</a></div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-3 footer_private_policy_link"> <a href=""> Документация</a></div>
                <div class="row">
                    <div class="col-12 ">
                        <p class="footer__disclaimer">Обращаем Ваше внимание на то, что информация размещенная на данном
                            интернет-сайте
                            носит исключительно ознакомительный характер и ни при каких условиях указанные условия и цены,
                            размещенные на сайте, не являются публичной офертой, определяемой положениями Статьи 437
                            Гражданского кодекса РФ. Застройщик ООО «Орджоникидзе, 44». С проектной декларацией можно
                            ознакомиться на сайте наш.дом.рф.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
 