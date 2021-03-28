<?php

function ls($en, $fr) {
    global $language;
    // switch (explode('/', $_SERVER['REQUEST_URI'])[1]) {
    //     case 'en':
    //         echo $en;
    //         break;
    //     default:
    //         echo $fr;
    // }
    switch ($language) {
        case 'en':
            echo $en;
            break;
        default:
            echo $fr;
    }
}