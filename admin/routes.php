<?php

$path = $_SERVER['PATH_INFO'] ?? "/";

if($path == '/'){
    require __DIR__  . '/sites/routes.php';


} else{
    echo 'pagina não encontrada';
}


// } elseif($path == '/sites/contato'){
    
//     require __DIR__ . '/sites/contato.php';