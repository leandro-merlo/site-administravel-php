<?php

function get_user() {
    return $_SESSION['user'] ?? null;
}

function auth_protection() {
    if (is_null(get_user()) and !resolve('/admin/auth/?.*')) {
        header("location: /admin/auth/login");
        die;
    }
}

function logout(){
    unset($_SESSION['user']);
    flash('Desconectado com sucesso,','Desconectado', 'success');
    header("location: /admin/auth/login");
    die;
}