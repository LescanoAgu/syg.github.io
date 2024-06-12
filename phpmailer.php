<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST'){
header("Location: index.html");
}

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';
require 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if( empty(trim($name)) ) $name = 'anonimo';

$body = <<< HTML
<p>De: $name / $email </p>
<p>$message</p>
HTML;

$mailer = new PHPMailer();
$mailer ->setFrom($email, $name);
$mailer ->addAddress('consultas@sygingenieria.com' , 'Sitio Web');
$mailer ->Subject = "Mensaje Web - $subject ";
$mailer ->msgHTML($body);
$mailer ->AltBody = strip_tags($body);
$rta = $mailer -> send();
var_dump($mailer);