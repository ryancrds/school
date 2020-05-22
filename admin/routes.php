<?php

if (resolve('/admin')) {
    render('admin/home', 'admin/admin',);
} 
elseif (resolve('/admin/users')) {
    render('admin/users/index', 'admin/admin');
} 
elseif (resolve('/admin/pages')) 
{
    render('admin/pages/index', 'admin/admin');
} 
elseif (resolve('/admin/pages/(\d)+')) 
{
    render('admin/pages/view', 'admin/admin');
} 
elseif (resolve('/admin/pages/(\d)+/edit')) 
{
    render('admin/pages', 'admin/admin');
} 
elseif (resolve('/admin/pages/(\d)+/delete')) 
{
    // codigo delete
    header('location: /admin/pages');
} 
else {
    http_response_code(404);
    echo 'pagina não encontrada';
}





// } elseif($path == '/sites/contato'){
    
//     require __DIR__ . '/sites/contato.php';

// $path = $_SERVER['PATH_INFO'] ?? "/";
