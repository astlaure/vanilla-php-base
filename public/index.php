<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
    case '' :
        require __DIR__ . '/../views/index.php';
        break;
    case '/about' :
        require __DIR__ . '/../views/about.php';
        break;
    case '/implique' :
        require __DIR__ . '/../views/implique.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/../views/404.php';
        break;
}