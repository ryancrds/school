<?php

if (resolve('/admin')) {
    render('admin/home', 'admin',);
} 

elseif (resolve('/admin/pages.*')) {

    
    include __DIR__ . '/pages/routes.php';

} 
elseif (resolve('/admin/user.*')) {

    
    include __DIR__ . '/user/routes.php';

} 






else {
    http_response_code(404);
    echo 'pagina não encontrada';
}





// } elseif($path == '/sites/contato'){
    
//     require __DIR__ . '/sites/contato.php';

// $path = $_SERVER['PATH_INFO'] ?? "/";
