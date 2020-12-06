<?php

// A interrogação no fim da url é para definir o trailing slash

if (resolve_path('/?')){
    render('home', '/site/home');
} elseif (resolve_path('/contatos/?')) {
    render('contatos', '/site/contatos');
} else {
    echo 'Página não encontrada';
}