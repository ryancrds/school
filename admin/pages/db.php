<?php

function pages_get_data($redirectOnError)
{
    $title = filter_input(INPUT_POST, 'title');
    $url = filter_input(INPUT_POST, 'url');
    $body = filter_input(INPUT_POST, 'body');

    if (is_null($title) or is_null($url)) {
        flash('Informe os campos de titulo e url', 'error');
        header('location: . $redirectOnError');
        die();
    }

    return compact(
        'title',
        'body',
        'url'
    );
}

$pages_all = function () use ($conn) {
    $result = $conn->query('select * from pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function ($id) use ($conn) {
   $sql = 'select * from pages where id = ?';
   $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id );
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_assoc();
   
    return ['title' => 'Titulo teste'];
};

$pages_create = function () use ($conn) {
    $data = pages_get_data('/admin/pages/create');

    $sql = 'INSERT INTO pages (title, body, url, updated, created) VALUES (?, ?, ?, NOW(), NOW() )';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        'sss',
        $data['title'],
        $data['body'],
        $data['url']
    );


    return $stmt->execute();
};

$pages_edit = function ($id) use ($conn) {
    $data = pages_get_data('/admin/pages/' . $id . '/edit');

    $sql = 'UPDATE pages SET title=?, body=?, url=?, updated=NOW() WHERE id=?';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        'sssi',
        $data['title'],
        $data['body'],
        $data['url'],
        $id
    );

    
    flash('Atualizado com sucesso', 'success');

    return $stmt->execute();
};

$pages_delete = function ($id) use ($conn) {
  
    $sql = 'delete from pages where id=?';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        'i',
       $id
    );
    flash('Deletado com sucesso', 'success');

    return $stmt->execute();
};
