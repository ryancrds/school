<?php

require __DIR__ . '/../admin/pages/db.php';

if (resolve('/')) {

    $pages = $pages_all();

    render('site/home', 'site/site', ['pages' => $pages]);

} 

elseif ($params = resolve('/contato2')) {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $from = filter_input(INPUT_POST, 'from');
        $subject = filter_input(INPUT_POST, 'subject');
        $message = filter_input(INPUT_POST, 'message');
        $headers = 'From: . $from' . "r/n" . 'Reply-To: ' . $from . "r/n" . 'x-maider; PHP/' . phpversion();
        
        
        if(mail('ryancrds@gmail.com', $subject, $message, $headers)){
            flash('Email enviado com sucesso', 'success');
        }else{
            flash('Opps, algo deu errado tente novamente caso nao funcione tente nos contatar pelo nosso telefone', 'error');
        };
    }
         
    $pages = $pages_all();

    render('site/contato2', 'site/site', ['pages' => $pages]);
}

elseif ($params = resolve('/precos')) {

    $pages = $pages_all();

    render('site/precos', 'site/site', ['pages' => $pages]);

} 

elseif ($params = resolve('/(.*)')) {
    $pages = $pages_all();
    foreach ($pages as $page) {
        if ($page['url'] == $params[1]) {
            break;
        }
    }
    render('site/page', 'site/site', ['pages' => $pages, 'page' => $page]);
}
