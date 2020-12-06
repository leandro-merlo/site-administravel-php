<?php

// Renomear para config.php e inserir os dados de acordo com as configurações corretas
$mode = 'development';

if ($mode === 'production') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);    
} else {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);    
}

$config = [
    "DB_CONNECTION" => [
        "SERVER_IP" => "localhost",
        "SERVER_PORT" => "3306",
        "USERNAME" => "root",
        "PASSWORD" => "",
        "DB_NAME" => "mydb",
    ],
];