<!DOCTYPE html>
<html lang="en">
<?php
require_once "php/dates.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
    <title>Login Admin</title>
</head>
<style>

</style>

<body class="autorization-page_body">
    <section class="autorization-page">
        <div class="container">
            <div class="row">
                <div class="col-4 studio_logo"><h1 class="autorization-page-h1"> <a href="https://dartsite.ru/" target="_blank">
                    <?=$Studio_name?>
                </a></h1>
                <h3>
                    <a href="tel:<?= $Studio_telephone ?>"><?= $Studio_telephone ?></a>
                </h3>    
                </div>
                <div class="col-4">
                    <h2 class="autorization-page-h2"><?= $namesite ?></h2>
                    <form class="section__first__callback_modal_form" action="../php/send-callback-TgBot.php" method="post">
<div class="form-item">
    <input class="autorization-page_input" required type="text" id="person-name" name="name" placeholder="Логин">
    <label   class="dance_placeholder autorization-page_label" for="person-name">Имя</label>
</div>
<div class="form-item">
    <input class="autorization-page_input" required id="password" name="password" type="password" placeholder="Пароль">
    <label  class="dance_placeholder autorization-page_label" for="password">Пароль</label>
</div>
<button class="autorization-page_btn" type="submit">Войти</button>
</form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>

</body>

</html>