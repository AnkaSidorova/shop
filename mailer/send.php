<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';
require 'mailer/Exception.php';

require 'components/Autoload.php';

$mail = new PHPMailer(true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = strip_tags(trim($_POST['name_user']));
    $email_user = filter_var(trim($_POST['email_user']), FILTER_SANITIZE_EMAIL);
    $price = $_POST['price'];
    $address_user = $_POST['address_user'];
}

try {

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;
    $mail->CharSet = 'UTF-8';
    
    $mail->Host = 'smtp.gmail.com';    
    $mail->Username = 'annnka72@gmail.com';
    $mail->Password = 'AnuSid789';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    
    
    $mail->setFrom('annnka72@gmail.com', 'An_shop'); 
    $mail->addAddress($email_user);


    $mail->isHTML(true);
    $mail->Subject = 'Ваш заказ';
    $mail->Body = $name . ' , Ваш заказ получен! Заказ на сумму: '. $price .', будет доставлен по адресу ' . $address_user;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
