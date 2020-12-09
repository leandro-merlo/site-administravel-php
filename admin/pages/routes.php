<?php

require_once __DIR__ . '/db.php';

if (resolve('/admin/pages/?')) {
    $pages = $pages_all();
    render('admin/pages/index', 'admin', compact('pages'));
} elseif (resolve('/admin/pages/create/?')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pages_create();
        header('location: /admin/pages/');
        return;
    }
    render('admin/pages/create', 'admin');
} elseif ($params = resolve('/admin/pages/(\d+)/?')) {
    $id = $params[1];
    $page = $pages_one($id);
    render('admin/pages/view', 'admin', compact('page'));
} elseif ($params = resolve('/admin/pages/(\d+)/edit/?')) {
    $id = $params[1];
    $page = $pages_one($id);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pages_edit($id);
        header("location: /admin/pages/{$id}");
        return;
    }
    render('admin/pages/edit', 'admin', compact('page'));
} elseif ($params = resolve('/admin/pages/(\d+)/delete/?')) {
    $id = $params[1];
    $pages_delete($id);
    header('location: /admin/pages/');
    return;
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}