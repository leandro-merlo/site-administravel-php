<?php


function setInternalServerError($errno, $errstr, $errfile, $errline){
    echo "<h1>Erro</h1>";

    if (CONFIG['ENVIRONMENT'] === 'production') {
        exit;
    }

    echo "<span style='font-weigth: bold; color:red'>";

    switch($errno) {
        case E_USER_ERROR:
            echo '<strong>ERRO</strong> [' . $errno . '] ' . $errstr . '<br />';
            echo "Erro fatal na  linha {$errline} no arquivo {$errfile}";
            break;
        case E_USER_WARNING:
            echo '<strong>AVISO</strong> [' . $errno . '] ' . $errstr . '<br />';
            break;
        case E_USER_NOTICE:
            echo '<strong>NOTA</strong> [' . $errno . '] ' . $errstr . '<br />';
            break;
        default:
            echo '<strong>Erro de tipo desconhecido</strong> [' . $errno . '] ' . $errstr . '<br />';
    }

    echo "</span>";

    echo '<ul>';
    foreach(debug_backtrace() as $error) {
        if (!empty($error['file'])) {
            echo '<li>';
            echo $error['file'] . ":";
            echo $error['line'];
            echo '</li>';
        }
    }
    echo '</ul>';
    die;
}

set_error_handler("setInternalServerError");
set_exception_handler("setInternalServerError");