<?php

// A interrogação no fim da url é para definir o trailing slash

require_once __DIR__ . '/../admin/pages/db.php';

$pages = $pages_all();

if (resolve('/contato/?')) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $from = filter_input(INPUT_POST, 'from');
        $subject = filter_input(INPUT_POST, 'subject');
        $message = filter_input(INPUT_POST, 'message');
        
        if ($send_contact_message($from, $subject, $message)){
            flash('Mensagem enviada com sucesso!', 'Sucesso', 'success');
        } else {
            flash('Falha ao tentar enviar a mensagem!\nTente ligar pra gente.', 'Falha', 'error');            
        }

        header("location: /contato");
        exit;
    }
    render('/site/contatos', '/site', compact('pages'));
} else {
    foreach($pages as $page) {
        $url = $page['url'];
        if (is_null($url)) {
            $url = "";
        }
        if (resolve("/{$url}/?")){
            render('/site/pages', '/site', compact('pages', 'page'));
            $error = false;
            exit;
        }
    }
    http_response_code(404);
    echo 'Página não encontrada';    
}