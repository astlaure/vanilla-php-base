<?php

function url_parser() {
    global $language;

    $url = $_SERVER['REQUEST_URI'];

    if (substr($url, 0, 3) == '/en') {
        $language = 'en';
        $url = substr($url, 3);
    }

    return $url;
}