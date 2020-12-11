<?php

$pages_all = function() use ($conn){
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function($id) {

};

$pages_create = function() {
    flash('Registro criado com sucesso!', 'Sucesso', 'success');
};

$pages_edit = function($id) {
    flash('Registro atualizado com sucesso!', 'Sucesso', 'success');
};

$pages_delete = function($id) {
    flash('Registro removido com sucesso!', 'Sucesso', 'success');
};