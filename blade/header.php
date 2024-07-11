<? 
        // require_once "../php/dates.php";
        require_once "C:\OSPanel\domains\DonRielt\php\dates.php";
        ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                    <div class="header__logo">
                        <a href="/">
                            <img src="../resources/img/logo_example1.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-6 col-4 header__navBar-block">
                    <nav class="header__navBar">
                        <ul class="header__navBar__item">
                            <li class="header__navBar_btn">
                                <a href="../pages/AboutUs.php">
                                    О НАС
                                </a>
                            </li>
                            <li class="header__navBar_btn"><a href="../pages/buy.php">Купить</a></li>
                            <li class="header__navBar_btn">
                                <a href="../pages/Sale.php">
                                    Продать
                                </a>
                            </li>
                            <li class="header__navBar_btn">
                                <a href="../pages/RentOut.php">
                                    Сдать
                                </a>
                            </li>
                            <li class="header__navBar_btn">
                                <a href="../pages/ToRent.php">
                                    Снять
                                </a>
                            </li>

                            <li class="header__navBar_btn_last">
                                <a href="../pages/Contacts.php">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <div class="col-lg-4 col-md-2 col-sm-8 col-4 header__navBar__contacts">
                    <ul class="haeder__navBar__telephone_hidden">
                        <li class="header__navBar_btn-contacts"><a href="tel:<?= $ContactTelephone ?>"><img src="../resources/img/icon/call.svg"></a></li>
                        <li class="header__navBar_btn-contacts"><a href="https://t.me/<?= $ContactTelephone ?>" target="_blank"><img src="../resources/img/icon/telegram.svg" alt="telegram"></a></li>
                        <li class="header__navBar_btn-contacts"><a href="<?= $ContactTelephone ?>" target="_blank"><img src="../resources/img/icon/whatsapp.svg" alt="WhatsApp"></a></li>
                    </ul>
                    <ul class="haeder__navBar__telephone">
                        <li class="header__navBar_btn-contacts"> <a href="tel:<?= $ContactTelephone ?>">
                                <?= $ContactTelephone ?></a></li>
                        <li class="header__navBar_btn-contacts"><a href="https://t.me/<?= $ContactTelephone ?>" target="_blank"><img src="../resources/img/icon/telegram.svg" alt="telegram"></a></li>
                        <li class="header__navBar_btn-contacts"> <a href="<?= $ContactTelephone ?>" target="_blank"><img src="../resources/img/icon/whatsapp.svg" alt="WhatsApp"></a></li>
                    </ul>
                    <!------------------------------------------ Мобильный блок контактов --------------------------------------->
                </div>
            </div>
        </div>
        </div>
        <!------------------------------------------------------------- ТУТ НАЧИНАЕТСЯ БУРГЕР------------------------------------------ -->
        <input class="burger" type="checkbox" id="burger">
        <label class="burger" for="burger">&#9776;</label>
        <nav class="col-sm-10 header__navBar_burger_hidden">
            <ul>
                <a href="../pages/AboutUs.php">
                    <li class="header__navBar_burger_li">О НАС</li>
                </a>
                <a href="../pages/Buy.php">
                    <li class="header__navBar_burger_li">Купить</li>
                </a>
                <a href="../pages/Sale.php">
                    <li class="header__navBar_burger_li">Продать</li>
                </a>
                <a href="../pages/RentOut.php">
                    <li class="header__navBar_burger_li">Сдать</li>
                </a>
                <a href="../pages/ToRent.php">
                    <li class="header__navBar_burger_li">Снять</li>
                </a>

                <a href="../pages/contacts.php">
                    <li class="header__navBar_burger_li">Контакты</li>
                </a>
            </ul>
        </nav>

