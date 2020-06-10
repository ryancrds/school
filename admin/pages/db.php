<?php

function pages_get_data($redirectOnError)
{
    $title = filter_input(INPUT_POST, 'title');
    $url = filter_input(INPUT_POST, 'url');
    $body = filter_input(INPUT_POST, 'body');
    $icon = filter_input(INPUT_POST, 'icon');

    if (is_null($title) or is_null($url)) {
        flash('Informe os campos de titulo e url', 'error');
        header('location: . $redirectOnError');
        die();
    }

    return compact(
        'title',
        'body',
        'url',
        'icon'
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

    $sql = 'INSERT INTO pages (title, body, url, icon, updated, created) VALUES (?, ?, ?, ?, NOW(), NOW() )';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        'ssss',
        $data['title'],
        $data['body'],
        $data['url'],
        $data['icon']
    );


    return $stmt->execute();
};

$pages_edit = function ($id) use ($conn) {
    $data = pages_get_data('/admin/pages/' . $id . '/edit');

    $sql = 'UPDATE pages SET title=?, body=?, url=?, icon=?, updated=NOW() WHERE id=?';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        'ssssi',
        $data['title'],
        $data['body'],
        $data['url'],
        $data['icon'],
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
