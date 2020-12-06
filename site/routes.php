<?php

// A interrogação no fim da url é para definir o trailing slash

if (resolve('/?')){
    render('home', '/site/home');
} elseif (resolve('/contatos/?')) {
    render('contatos', '/site/contatos');
} else {
    echo 'Página não encontrada';
}