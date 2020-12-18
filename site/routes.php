<?php

// A interrogação no fim da url é para definir o trailing slash

if (resolve('/?')){
    render('/site/home', 'site');
} elseif (resolve('/contato/?')) {
    render('/site/contatos', '/site');
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}