<?php

if (resolve('/admin/auth/login/?')) {
    render('admin/auth/login', '/admin/login');
} elseif (resolve('/admin/auth/logout/?')) {
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}