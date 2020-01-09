<?php

$recepient = "koryun.vardanyan.2002@gmail.com";
$sitename = "koryun.vardanyan2018@mail.ru";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$password = trim($_POST["password"]);

$message = "Имя: $name \nТелефон: $phone \nТекст: $text \password: $password";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");