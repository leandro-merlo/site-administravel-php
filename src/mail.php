<?php

require_once 'Mail.php';

$send_contact_message = function($from, $subject, $message) {

    $headers = [
        'From' =>  $from, 
        'To' => CONFIG['MAIL']['CONTACT_MAIL'],
        "Reply-To" =>  $from,
        "X-Mailer" =>  "PHP" . phpversion(),
        "Subject" => $subject
    ];

    $host = CONFIG['MAIL']['SMTP_HOST'];
    $port = CONFIG['MAIL']['SMTP_PORT'];
    $user = CONFIG['MAIL']['SMTP_USER'];
    $pass = CONFIG['MAIL']['SMTP_PASS'];

    $smtp = Mail::factory('smtp', [
        'host' => $host,
        'port' => $port,
        'username' => $user,
        'password' => $pass,
        'auth' => true
    ]);

    try {
        $mail = $smtp->send(CONFIG['MAIL']['CONTACT_MAIL'], $headers, $message);
        return true;
    } catch (\Exception $ex) {
        return false;
    }


};