<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\POP3;
use PHPMailer\PHPMailer\SMTP;

require 'mailer/src/PHPMailer.php';
require 'mailer/src/SMTP.php';
require 'mailer/src/Exception.php';

require 'components/autoload.php';


$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'annnka72';
    $mail->Password = 'AnuSid789';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    //Recipients
    $mail->setFrom('annnka72@gmail.com', 'Anya');
    $mail->addAddress('anya_sidorova_2015@bk.ru');


    // Content
    $mail->isHTML(true);
    $mail->Subject = 'An_shop Ваш заказ';
    $mail->Body = 'Ваш заказ получен! Скоро мы вам его доставим.';
    $mail->AltBody = 'заказ';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
