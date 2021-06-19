<?php
$title = "Acasa";
require "blocks/header.php";
?>
<h3>Pagina principala</h3>

<?php

$message = "Mesajul din email";
$to = "vodnicear@gmail.com";
$from = "exemplu@gmail.com";
$subject = "Theme message";

$subject = "=?utf-8?B?".base64_decode($subject)."?=";
$headers = "From: $from\r\nReplay-to:  $from\r\nContent-type:text/plain; charet=utf-8\r\n";
mail($to, $subject, $message, $headers);



require "blocks/footer.php";
?>



























