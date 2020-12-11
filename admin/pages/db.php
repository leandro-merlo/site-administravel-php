<?php

function get_pages_data($redirectOnError) {
    $title = filter_input(INPUT_POST, 'title');
    $body = filter_input(INPUT_POST, 'body');
    $url = filter_input(INPUT_POST, 'url');

    if (is_null($title)){
        flash('Os campos título deve ser informado!', 'Error', 'error');
        header("location: {$redirectOnError}");
        die;
    }

    return compact('title', 'url', 'body');
}

$pages_all = function() use ($conn) {
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function($id) use ($conn) {
    $sql = "SELECT * FROM pages WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();    
    return $result->fetch_assoc();
};

$pages_create = function() use ($conn) {
    $data = get_pages_data('/admin/pages/create');
    $sql = 'INSERT INTO pages (title, url, body, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())';
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('sss', $data['title'], $data['url'], $data['body']);
    $stmt->execute();

    flash('Registro criado com sucesso!', 'Sucesso', 'success');
};

$pages_edit = function($id) use ($conn) {
    $data = get_pages_data("/admin/pages/{$id}/edit");
    $sql = 'UPDATE pages SET title=?, url=?, body=?, updated_at=NOW() WHERE id = ?';
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('sssi', $data['title'], $data['url'], $data['body'], $id);
    $stmt->execute();

    flash('Registro atualizado com sucesso!', 'Sucesso', 'success');
};

$pages_delete = function($id) use ($conn) {
    $sql = "DELETE FROM pages WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    flash('Registro removido com sucesso!', 'Sucesso', 'success');
};