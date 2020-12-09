<?php

function flash($message = null, $title = "Nota", $type = "notice") {
    if ($message) {
        $_SESSION['flash'][] = compact('message', 'type', 'title');        
    } else {
        $flash = $_SESSION['flash'] ?? [];
        foreach($flash as $key => $message){
            render('flash', 'ajax', $message);
            unset($_SESSION['flash'][$key]);
        }
    }
}