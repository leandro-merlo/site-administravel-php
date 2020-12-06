<?php

// A interrogação no fim da url é para definir o trailing slash

if (resolve_path('/?')){
    echo 'Home';
} elseif (resolve_path('/contatos/?')) {
    echo 'Página de contatos';
} else {
    echo 'Página não encontrada';
}