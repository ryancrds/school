<?php

// include __DIR__ . '/../../src/auth.php';
include __DIR__ . '/db.php';
 


if (resolve('/admin/clientes')) {
    $clientes = $clientes_all();
    render('admin/clientes/index', 'admin', compact('clientes'));

} elseif (resolve('/admin/clientes/create')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $clientes_create();
        return header('location: /admin/clientes');
    }
    render('admin/clientes/create', 'admin');

} elseif ($params = resolve('/admin/clientes/(\d+)')) {
    $cliente = $clientes_view($params[1]);
    render('admin/clientes/view', 'admin', ['cliente' => $cliente]);

} elseif ($params = resolve('/admin/clientes/(\d+)/edit')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $clientes_edit($params[1]);
        return header('location: /admin/clientes/' . $params[1]);
    }
    $cliente = $clientes_view($params[1]);
    render('admin/clientes/edit', 'admin', ['cliente' => $cliente]);

} elseif ($params = resolve('/admin/clientes\/(\d+)/delete')) {
    $clientes_delete($params[1]);
    return header('location: /admin/clientes');
}