<?php

// Renomear para config.php e inserir os dados de acordo com as configurações corretas

define("CONFIG", [
    "DB_CONNECTION" => [
        "SERVER_IP" => "localhost",
        "SERVER_PORT" => "3306",
        "USERNAME" => "root",
        "PASSWORD" => "",
        "DB_NAME" => "mydb",
    ],
    "ENVIRONMENT" => 'production'
]);

if (CONFIG['ENVIRONMENT'] === 'development') {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);    
} else {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);    
}