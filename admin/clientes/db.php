<?php

function users_get_data($redirectOnError)
{
    $nome = filter_input(INPUT_POST, 'nome');
    $sobrenome = filter_input(INPUT_POST, 'sobrenome');
    $numero = filter_input(INPUT_POST, 'numero');
    $bairro = filter_input(INPUT_POST, 'bairro');
    $endereco = filter_input(INPUT_POST, 'endereco');
    $cidade = filter_input(INPUT_POST, 'cidade');
    $estado = filter_input(INPUT_POST, 'estado');
    $foto = $_FILES['foto'];
    $telefone = filter_input(INPUT_POST, 'telefone');

    if (!$nome) {
        flash('Informe o campo nome', 'error');
        header('location: ' . $redirectOnError);
        die();
    }

    return compact('nome', 'sobrenome', 'numero', 'endereco', 'bairro', 'cidade', 'estado', 'foto', 'telefone');
}

$clientes_all = function () use ($conn) {
    $result = $conn->query('SELECT * FROM cliente');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$clientes_view = function ($id) use ($conn) {
    $stmt = $conn->prepare('SELECT * FROM cliente WHERE id=?');
    $stmt->bind_param('i', $id);

    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_assoc();
};

$clientes_create = function () use ($conn) {
    $data = users_get_data('/admin/clientes/create');

    // var_dump($data['foto']['tmp_name']);
    // die;

    if ($data['foto']['tmp_name'] != NULL) {
        $nomeFinal =  'fotos/' . time() . '.jpg';
        if (move_uploaded_file($data['foto']['tmp_name'], $nomeFinal)) {
        } else {
            flash('Erro ao enviar a foto tente novamente');
            header('location: /admin/clientes/create');
            die();
        }
    }


    $sql = 'insert into cliente (nome, sobrenome, numero, endereco, bairro, cidade, estado, foto, telefone, updated, created) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())';

    if (is_null($data['sobrenome'])) {
        flash('Informe o campo nome', 'error');
        header('location: /admin/clientes/create');
        die();
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        'sssssssss',
        $data['nome'],
        $data['sobrenome'],
        $data['numero'],
        $data['endereco'],
        $data['bairro'],
        $data['cidade'],
        $data['estado'],
        $nomeFinal,
        $data['telefone']
    );

    flash('Salvo com sucesso', 'success');

    return $stmt->execute();
};

$clientes_edit = function ($id) use ($conn) {
    $data = users_get_data('/admin/clientes/edit' . $id . '/edit');
    $sql = 'UPDATE cliente set nome=?, sobrenome=?, numero=?, endereco=?, bairro=?, cidade=?, estado=?, foto=?, telefone=?, updated=NOW() WHERE id=?';

    if ($data['foto']['tmp_name'] != NULL) {
        $nomeFinal =  'fotos/' . time() . '.jpg';
        if (move_uploaded_file($data['foto']['tmp_name'], $nomeFinal)) {
        } else {
            flash('Erro ao enviar a foto tente novamente');
            header('location: /admin/clientes/create');
            die();
        }
    }

    $stmt = $conn->prepare($sql);


    $stmt->bind_param(
        'sssssssssi',
        $data['nome'],
        $data['sobrenome'],
        $data['numero'],
        $data['endereco'],
        $data['bairro'],
        $data['cidade'],
        $data['estado'],
        $nomeFinal,
        $data['telefone'],
        $id
    );




    flash('Salvo com sucesso', 'success');

    return $stmt->execute();
};

$clientes_delete = function ($id) use ($conn) {
    $sql = 'DELETE FROM cliente WHERE id=?';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    flash('Removido com sucesso', 'success');

    return $stmt->execute();
};
