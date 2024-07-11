<!DOCTYPE html>
<html lang="en">

<head>
    <title>ДонРиелт</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META NAME="description" CONTENT="<?= $description ?>">
    <meta name="Robots" content="index, follow">
    <!-- На главной индекс фоллов, на остальныйх NO при пагинации. NOindex NOfollow на технических страницах, превнекст при каталоге с пагинацией (Договора, документы и тд, не важные для юзера)-->
    <link rel="shortcut icon" href="img/icon/icon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://snipp.ru/cdn/bootstrap/3.4.1/bootstrap.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="js/text_line_animation.js"></script>
    <!-- <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script> -->
    <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <header>
        <?php
        require_once "blade/header.php"
        ?>
    </header>
    <?php require_once "blade/section_Null.php"; ?>
    <main class="body__content">
        <section class="section__first">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-8 order-2 order-sm-2 order-lg-1">
                        <div class="row">
                            <div class="col-6">
                                <figure>
                                    <figcaption class="">Продать</figcaption>
                                    <ul>
                                        <li class="services__sale"><a href="">Просто продать квартиру</a></li>
                                        <li class="services__sale"><a href="">Продать дом</a></li>
                                        <li class="services__sale"><a href="">Продать квартиру в ипотеке или квартиру из-под залога</a></li>
                                        <li class="services__sale"><a href="">Экспертная оценка недвижимости</a></li>
                                        <li class="services__sale"><a href="">Все услуги</a></li>
                                    </ul>
                                </figure>
                            </div>
                            <div class="col-6">
                                <figure>
                                    <figcaption>Купить</figcaption>
                                    <ul>
                                        <li class="services__buy"><a href="">Купить квартиру или комнату</a></li>
                                        <li class="services__buy"><a href="">Купить дом с участком</a></li>
                                        <li class="services__buy"><a href="">Купить квартиру в новостройке</a></li>
                                        <li class="services__buy"><a href="">Обмен квартиры или дома</a></li>
                                        <li class="services__buy"><a href="">Все услуги</a></li>
                                    </ul>
                                </figure>
                            </div>
                        </div>
                        <div class="container callback-block">
                            <div class="row">
                                <div class="col-6">
                                    <div class="output" id="output">
                                        <p class="cursor" id="cursor"></p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="section__first__callback_telepnone_link">
                                        <a class="section__first__callback_telepnone" href="tel:<?= $ContactTelephone ?>">
                                            <?= $ContactTelephone ?>
                                        </a>
                                        <div class="section__first__callback_pullsating">
                                            <p>
                                                Контакт-центр работает до 18:00
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="section__first__callback_number">
                                        <div class="section__first__callback_telepnone_text">
                                            <a href="#openModal">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#ModalCallback"  class="section__first__callMe_btn">Перезвоните мне</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <figure>
                                    <figcaption>Снять</figcaption>
                                    <ul>
                                        <li class="services__rent"><a href=""> Снять квартиру</a></li>
                                        <li class="services__rent"><a href=""> Аренда элитных апартаментов</a></li>
                                        <li class="services__rent"><a href="">Корпоративная аренда</a></li>
                                        <li class="services__rent"><a href="">Аренда коммерческой недвижимости</a></li>
                                        <li class="services__rent"><a href="">Все услуги</a></li>
                                    </ul>
                                </figure>
                            </div>
                            <div class="col-6">
                                <figure>
                                    <figcaption>Сдать</figcaption>
                                    <ul>
                                        <li class="services__to-rent-out"><a href="">Сдать квартиру</a></li>
                                        <li class="services__to-rent-out"><a href="">Снять корпоротивную недвижимость</a></li>
                                        <li class="services__to-rent-out"><a href="">Снять коммерческое помещение</a></li>
                                        <li class="services__to-rent-out"><a href="">Снять гараж, парковочное место</a></li>
                                        <li class="services__to-rent-out"><a href="">Все услуги</a></li>
                                    </ul>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 order-1 order-sm-1 order-lg-2 section__first__rielt-reputation">
                        <div class="row section__first__rielt-reputation">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-12 section__first__rielt-reputation__img">
                                <img src="resources/img/pictures/House_and_keys.jpg" alt="Риелторская картинка">
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-12 section__first__rielt-reputation_text">

                                <ul>
                                    <li class="section__first__rielt-reputetion_text_list">Мы работаем насовесть</li>
                                    <li class="section__first__rielt-reputetion_text_list">Наша репутация говорит за нас</li>
                                    <li class="section__first__rielt-reputetion_text_list">Наша цель - ваше счастье</li>
                                    <li class="section__first__rielt-reputetion_text_list">Мы любим печенье</li>
                                    <li class="section__first__rielt-reputetion_text_list">Хотим вам помочь</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__faq">
            <? require_once "blade/faq.php"?>
        </section>
    </main>
    <footer class="footer">
        <?php
        require_once "blade/footer.php";
        ?>
    </footer>
</body>

</html>
<?php

require_once "pages/modal.php";
// require_once "pages/modal2.php";
?>
