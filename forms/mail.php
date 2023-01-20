<?php

$name= $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$messaje= $_POST['messaje'];

var_dump($name);

$rta = mail('consultas@sygingenieria.com', "Mensaje Web: $subject", $messaje)
var_dump($rta)