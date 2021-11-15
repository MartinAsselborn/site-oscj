<?php 
print_r($_REQUEST);


$to = "asselborn.c.m@gmail.com";
$subject = "Asunto del email";
$message = "Este es mi primer envío de email con PHP";
$headers = "From: asselborn.c.m@gmail.com";
 
mail($to, $subject, $message, $headers);


?>