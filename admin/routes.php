<?php

if(resolve('/admin')){
    render('oi', 'admin', );
} 
elseif(resolve('/admin/pages')){
    echo 'administraçao de paginas';
} else {
    echo 'pagina não encontrada';
}




// } elseif($path == '/sites/contato'){
    
//     require __DIR__ . '/sites/contato.php';

// $path = $_SERVER['PATH_INFO'] ?? "/";