<?php

mysqli_report(MYSQLI_REPORT_ERROR);

$server_ip = CONFIG['DB_CONNECTION']['SERVER_IP'];
$server_port = CONFIG['DB_CONNECTION']['SERVER_PORT'];
$username = CONFIG['DB_CONNECTION']['USERNAME'];
$password = CONFIG['DB_CONNECTION']['PASSWORD'];
$db = CONFIG['DB_CONNECTION']['DB_NAME'];

$host = empty($server_port) ? $server_ip : "$server_ip:$server_port";

$conn = new mysqli($host, $username, $password, $db);