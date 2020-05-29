<?php


if (isset($_COOKIE['friends'])) {
    $friends = unserialize($_COOKIE['friends']);
    foreach ($friends as $friend) {
        printf("My name is %s .<br>", $friend);
    }
}

