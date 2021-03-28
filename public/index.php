<?php

require_once __DIR__ . '/../app/config.php';
require_once __DIR__ . '/../app/app.php';

$url = url_parser();
$body = body_class($url);

switch ($url) {
    case '' :
    case '/' :
        require __DIR__ . '/../views/index.php';
        break;
    case '/about':
        require __DIR__ . '/../views/about.php';
        break;
    default:
        try {
            if (!$development || !file_exists(__DIR__ . '/../views' . $url . '.php')) {
                throw new Exception();
            }
            require __DIR__ . '/../views' . $url . '.php';
        } catch (Exception $ex) {
            $body = '404';
            http_response_code(404);
            require __DIR__ . '/../views/404.php';
        }
        break;
}