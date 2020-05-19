<?php

function resolve($route)
{
    $path = $_SERVER['PATH_INFO'] ?? '/';
    $route = '/^\/([a-z]+)$/';

    if (preg_match($route, '/')) {
        echo "deu";
    } else {
        echo "não deu";
    }
}

resolve('/');

if ($path == '/') {
    require __DIR__ . '/sites/contato.php';
} elseif ($path == '/admin') {
    require __DIR__ . '/sites/contato.php';
} else {
    echo 'pagina não encontrada';
}
