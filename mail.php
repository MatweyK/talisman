<?php

$recepient = "Alexbondwin17@gmail.com";
$sitename = "https://andrew746746.000webhostapp.com/";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);

$message = "Имя: $name \nТелефон: $phone \n";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
