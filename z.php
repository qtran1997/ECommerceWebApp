<?php


// the message
$msg = "she shitted on my dick";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("mustafahayeri@yahoo.com","thats a combo",$msg,"From: quangthrowaway@gmail.com");
?>