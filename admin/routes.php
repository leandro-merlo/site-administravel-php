<?php

// A interrogação no fim da url é para definir o trailing slash

if (resolve('/admin/?')){
    render('/admin/home', 'admin');
} elseif (resolve('/admin/pages/?')) {
    render('admin/pages', 'admin');
} else {
    echo 'Página não encontrada';
}