<?php

function resolve($route) {
    $path = $_SERVER['PATH_INFO'] ?? '/';
    
    $route = '/^\/([a-z]+)$/';

    if (preg_match($route, $path, $params)) {
        return $params;
    } 
        
    return false;
    }


function render(
    $content,
    $template,
    array $data = []) {
    return include __DIR__ . '/templates/' . $template . 'tpl.php';
    }

if (resolve('/admin/?(.*)')) {
    require __DIR__ . '/admin/routes.php';
}elseif (resolve('/(.*)')) {
    require __DIR__ . '/site/routes.php';
}