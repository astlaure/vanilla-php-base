<?php

function ls($en, $fr) {
    $local = $_SERVER['REQUEST_URI'];

    $parts = explode('/', $local);

    if ($parts[1] == 'en') {
        echo $en;
    } else if ($parts[1] == 'fr') {
        echo $fr;
    } else {
        echo $fr;
    }
}