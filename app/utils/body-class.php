<?php

function body_class($url) {
    $body = str_replace('/', '-', $url);

    if (substr($body, 0, 1) == '-') {
        $body = substr($body, 1);
    }
    if ($body == '') {
        $body = 'index';
    }

    return $body;
}