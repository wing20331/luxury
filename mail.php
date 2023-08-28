<?php

$data = [
    "feedback_name" => $_POST['feedback_name'],
    "feedback_number" => $_POST['feedback_number']
];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->isHTML(true);

$mail->setFrom('luxuryrentmsk@gmail.com');
$mail->addAddress('luxuryrentmanagermsk@gmail.com');

$mail->Subject = 'Обратная свзяь';

$body = '' . $data["feedback_name"] . ' оставил заявку на звонок, его телефон ' . $data["feedback_number"];
$mail->Body = $body;

$mail->send();
?>