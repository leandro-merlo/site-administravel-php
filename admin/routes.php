<?php

// A interrogação no fim da url é para definir o trailing slash

if (resolve_path('/admin/?')){
    render('/admin/home', 'admin');
} elseif (resolve_path('/admin/pages/?')) {
    render('admin/pages', 'admin');
} else {
    echo 'Página não encontrada';
}