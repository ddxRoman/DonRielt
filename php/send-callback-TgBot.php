<?php

$name=$_POST['name'];
$telephone=$_POST['phone'];
$question=$_POST['text'];
$token ="6429920305:AAGWte_QBytipjizpPuILqRLStV4-J292WA";
$chat_id = "-4081467260";
if($question==NULL){
    $question='Пожалуйста перезвоните мне';
}

$arr=array(
'Имя: ' => $name,
'Телефон: '=> $telephone,
'Сообщение: ' => $question,
);

foreach($arr as $key => $value){
$msg .= "<b>".$key."</b>".$value."%0A";
}
echo "<br>"."<br>".$name."<br>".$telephone."<br>".$question."<br>"."<br>";
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$msg}","r");

if($sendToTelegram){
header('Location: ../pages/thank-you_Page.php');
}else{
    echo "К сожалению нам не удаётся получить ваш номер. попробуйте позвонить нам сами";
}
?>

