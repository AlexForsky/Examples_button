
<?php
print_r($_POST);
$recepient = "aa_a@bk.ru";
$sitename = "Сайт Софт";
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = "Имя: $name \ne-mail: $email \nЗаявка с сайта про ИТС";
$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient);