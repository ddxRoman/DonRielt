<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="shortcut icon" href="img/icon/icon.ico" type="image/x-icon">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>
    <link rel="stylesheet" href="../style/main.css">
    <title>Контакты</title>
</head>

<body>
<header>
        <?php require_once '../blade/header.php';    ?>
    </header>



    <main class="body__content">
        <?
        // require_once "../blade/section_Null.php";
        ?>
        <section class="contacts section__first">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p class="contacts_header">
                            Адрес:
                        </p>
                        <p class="contacts_dates"> <?= $office_Adress ?>
                        </p>
                        <p class="contacts_work-time"><?= $Work_schedule ?></p>
                    </div>
                    <div class="col-6">
                        <p class="contacts_header">
                            Телефон:
                        </p>
                        <p class="contacts_dates">
                            <a href="tel:<?= $ContactTelephone ?>"> <?= $ContactTelephone ?></a>
                        </p>
                        <p>
                            <ul class="contacts-page_list">
                                <li class="contacts-page_msg_button"><a href="https://t.me/<?= $ContactTelephone ?>" target="_blank"><img class="contacts-page_img_msg" src="../resources/img/icon/telegram-contacts.svg " alt="telegram"></a></li>
                                <li class="contacts-page_msg_button"> <a href="<?= $ContactTelephone ?>" target="_blank"><img class="contacts-page_img_msg" src="../resources/img/icon/whatsapp-contacts.svg" alt="WhatsApp"></a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <section class="contacts-map">
                <div class="container">
                    <div class="row">
                        <div class="col-9 contacts_map">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A25a3cfcfd70adcfbd8b7b0e855f3fca88ca3f5340ae2244d94f1437b51a0f9c3&amp;source=constructor" width="100%" height="551" frameborder="0"></iframe>
                        </div>
                        <div class="col-3 contacts_CallBack">
                            <h3>Остались вопросы?</h3>
                            <h5>
                                мы вам перезвоним
                            </h5>
                            <img class="manager-call" src="../resources//img/manager_call2.png" alt="">

                            <form class="section__first__callback_modal_form" action="../php/send-callback-TgBot.php" method="post">

                                <div class="form-item">
                                    <input required type="text" id="person-name" name="name" placeholder="Имя">
                                    <label class="dance_placeholder" for="person-name">Имя</label>
                                </div>
                                <div class="form-item">
                                    <input required id="phone-number" name="phone" type="text" class="mask-phone" placeholder="Номер телефона">
                                    <label class="dance_placeholder" for="phone-number">Номер телефона</label>
                                </div>
                                <div class="form-item">
                                    <textarea maxlength="255" name="text" type="text" placeholder="Какой у вас Вопрос?"></textarea>
                                    <label class="dance_placeholder" for="qustions">Какой у вас вопрос?</label>
                                    <p class="title_form">не более 250 символов</p>
                                </div>
                                <button class="modal__left-part__confirm_btn" type="submit">Жду звонка</button>
                            </form>
                            <script>
                                $('.mask-phone').mask('+7 (999) 999-99-99');
                            </script>
                        </div>
                    </div>
                </div>

            </section>


    </main>
    <footer class="footer"> <?php
                            require_once "../blade/footer.php";
                            ?>
    </footer>
</body>

</html>