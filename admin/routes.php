<?php

// A interrogação no fim da url é para definir o trailing slash

if (resolve('/admin/?')){
    render('/admin/home', 'admin');
} elseif (resolve('/admin/pages/?.*')) {
    require_once __DIR__ . '/pages/routes.php';
} elseif (resolve('/admin/users/?.*')) {
    require_once __DIR__ . '/users/routes.php';
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}