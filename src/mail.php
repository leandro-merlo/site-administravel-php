<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/PHPMailer/Exception.php';
require __DIR__ . '/../vendor/PHPMailer/PHPMailer.php';
require __DIR__ . '/../vendor/PHPMailer/SMTP.php';

$send_contact_message = function($from, $subject, $message) {

    $mail = new PHPMailer;
    $mail->isSMTP(); 
    $mail->SMTPDebug = 0;
    $mail->Host = CONFIG['MAIL']['SMTP_HOST']; 
    $mail->Port = CONFIG['MAIL']['SMTP_PORT'];
    $mail->SMTPSecure = 'tls'; 
    $mail->SMTPAuth = true;
    $mail->Username = CONFIG['MAIL']['SMTP_USER'];
    $mail->Password = CONFIG['MAIL']['SMTP_PASS'];
    $mail->setFrom($from);
    $mail->addAddress(CONFIG['MAIL']['CONTACT_MAIL']);
    $mail->Subject = $subject;
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->msgHTML($message); 
    $mail->AltBody = $message;

    if(!$mail->send()){
        return false;
    }else{
        return true;
    }

};