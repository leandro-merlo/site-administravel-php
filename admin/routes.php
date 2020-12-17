<?php

// A interrogação no fim da url é para definir o trailing slash

if (resolve('/admin/?')){
    render('/admin/home', 'admin');
} elseif (resolve('/admin/pages/?.*')) {
    require_once __DIR__ . '/pages/routes.php';
} elseif (resolve('/admin/users/?.*')) {
    require_once __DIR__ . '/users/routes.php';
} elseif (resolve('/admin/auth/?.*')) {
    require_once __DIR__ . '/auth/routes.php';
} elseif (resolve('/admin/upload/image/?')) {
    $file = $_FILES['file'];
    if (!$file) {
        http_response_code(422);
        echo json_encode(['status' => 'nenhum arquivo enviado']);
        exit;
    }
    $allowedTypes = [
        'image/gif',
        'image/jpg',
        'image/jpeg',
        'image/png'
    ];
    if (!in_array($file['type'], $allowedTypes)){
        http_response_code(422);
        echo json_encode(['status' => 'tipo de arquivo não permitido']);
        exit;
    }

    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $name = uniqid(rand(),true) . ".{$extension}";

    move_uploaded_file($file['tmp_name'], __DIR__ . "/../public/upload/{$name}");
    echo "/upload/{$name}";

} else {
    http_response_code(404);
    echo 'Página não encontrada';
}