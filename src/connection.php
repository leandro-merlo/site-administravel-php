<?php

mysqli_report(MYSQLI_REPORT_ERROR);

$server_ip = $config['DB_CONNECTION']['SERVER_IP'];
$server_port = $config['DB_CONNECTION']['SERVER_PORT'];
$username = $config['DB_CONNECTION']['USERNAME'];
$password = $config['DB_CONNECTION']['PASSWORD'];
$db = $config['DB_CONNECTION']['DB_NAME'];

$conn = new mysqli("$server_ip:$server_port", $username, $password, $db);