<?php

$data = [
    "feedbackName" => $_POST['feedbackName'],
    "feedbackEmail"=> $_POST['feedbackEmail'],
    "feedbackNumber" => $_POST['feedbackNumber']
    
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

$body = '' . $data["feedbackName"] . ' оставил заявку на звонок, его телефон ' . $data["feedbackNumber"]. ', а так же почта '. $data["feedbackEmail"] ;
$mail->Body = $body;

$mail->send();

?>