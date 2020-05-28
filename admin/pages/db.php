<?php

$pages_all = function() {
    //buscar todas as paginas
    // select * from pages
};

$pages_one = function($id) {
    //buscar unica as paginas
    // select * from pages where id = ?
    return ['title' => 'Titulo teste'];
};

$pages_create = function() {
 
    //cadastra uma pagina
    flash('Registro criado com sucesso', 'success');
};

$pages_edit = function($id) {
    //atualiza uma pagina
    flash('Atualizado com sucesso', 'success');
};

$pages_delete = function() {
    //remove uma das paginas
    flash('Deletado com sucesso', 'success');
};
