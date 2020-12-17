<?php

require_once __DIR__ . '/db.php';

if (resolve('/admin/auth/login/?')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($login()) {
            flash('Autenticado com sucesso', 'Login', 'success');
            header('Location: /admin');
            exit;
        } else {
            flash('Falha na autenticação', 'Falha', 'danger');
            header('Location: /admin/auth/login');
            exit;
        }
    }
    render('admin/auth/login', '/admin/login');
} elseif (resolve('/admin/auth/logout/?')) {
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}