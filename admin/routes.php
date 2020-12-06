<?php

// A interrogação no fim da url é para definir o trailing slash

if (resolve_path('/admin/?')){
    echo 'Administração';
} elseif (resolve_path('/admin/pages/?')) {
    echo 'Administração de Páginas';
} else {
    echo 'Página não encontrada';
}