<?php

function render(
    $content,
    $template,
    array $data = []
) {
    $content = __DIR__ .'/../public/templates/'.$content.'.tpl.php';
    return include __DIR__ . '/../public/templates/' . $template . '.tpl.php';
    return include __DIR__ . '/../templates/' . $template . '.tpl.php';
}