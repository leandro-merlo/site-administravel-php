<?php

require_once __DIR__ . '/db.php';

if (resolve('/admin/users/?')) {
    $users = $users_all();
    render('admin/users/index', 'admin', compact('users'));
} elseif (resolve('/admin/users/create/?')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $users_create();
        header('location: /admin/users/');
        return;
    }
    render('admin/users/create', 'admin');
} elseif ($params = resolve('/admin/users/(\d+)/?')) {
    $id = $params[1];
    $user = $users_one($id);
    render('admin/users/view', 'admin', compact('user'));
} elseif ($params = resolve('/admin/users/(\d+)/edit/?')) {
    $id = $params[1];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $users_edit($id);
        header("location: /admin/users/{$id}");
        return;
    }
    $user = $users_one($id);
    render('admin/users/edit', 'admin', compact('user'));
} elseif ($params = resolve('/admin/users/(\d+)/delete/?')) {
    $id = $params[1];
    $users_delete($id);
    header('location: /admin/users/');
    return;
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}