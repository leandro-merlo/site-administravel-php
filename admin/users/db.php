<?php

function get_users_data($redirectOnError) {
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    if (is_null($email) or is_null($password)){
        flash('Os campos email e senha devem ser informados!', 'Error', 'error');
        header("location: {$redirectOnError}");
        die;
    }

    return compact('email', 'password');
}

$users_all = function() use ($conn) {
    $result = $conn->query('SELECT * FROM users');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$users_one = function($id) use ($conn) {
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();    
    return $result->fetch_assoc();
};

$users_create = function() use ($conn) {
    $data = get_users_data('/admin/users/create');


    $sql = 'INSERT INTO users (email, password, created_at, updated_at) VALUES (?, ?, NOW(), NOW())';
    $stmt = $conn->prepare($sql);

    $password = password_hash($data['password'], PASSWORD_BCRYPT);
    $stmt->bind_param('ss', $data['email'], $password);
    $stmt->execute();

    flash('Registro criado com sucesso!', 'Sucesso', 'success');
};

$users_edit = function($id) use ($conn) {
    $data = get_users_data("/admin/users/{$id}/edit");
    $sql = 'UPDATE users SET title=?, url=?, body=?, updated_at=NOW() WHERE id = ?';
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('sssi', $data['title'], $data['url'], $data['body'], $id);
    $stmt->execute();

    flash('Registro atualizado com sucesso!', 'Sucesso', 'success');
};

$users_delete = function($id) use ($conn) {
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    flash('Registro removido com sucesso!', 'Sucesso', 'success');
};