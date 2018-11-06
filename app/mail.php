<?php

  $recepient = "dmytrofialko@gmail.com";
  $sitename = "DF";

  $name = trim($_POST["name"]);
  $phone = trim($_POST["phone"]);
  $mail = trim($_POST["mail"]);
  $text =trim($_POST["text"]);
  $message = "Имя: $name \nТелефон: $phone \nТекст: $text \nМайл: $mail";

  $pagetitle = "Новая заявка с сайта \"$sitename"\";
  mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

  ?>