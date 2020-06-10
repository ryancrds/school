<?php

auth_protection();

if (resolve('/admin')) {
    render('admin/home', 'admin');
} 
elseif (resolve('/admin/auth.*')) {

    include __DIR__ . '/auth/routes.php';
}
elseif (resolve('/admin/pages.*')) {

    
    include __DIR__ . '/pages/routes.php';

} 
elseif (resolve('/admin/user.*')) {

    
    include __DIR__ . '/user/routes.php';

} 
elseif (resolve('/admin/clientes.*')) {

    
    include __DIR__ . '/clientes/routes.php';

} 

else {
    http_response_code(404);
    echo 'pagina não encontrada';
}





// } elseif($path == '/sites/contato'){
    
//     require __DIR__ . '/sites/contato.php';

// $path = $_SERVER['PATH_INFO'] ?? "/";
