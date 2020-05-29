<?php
spl_autoload_register(function ($className) {
    $path = str_replace("CloudStorage\\", "", $className);
    $path = str_replace("\\", "/", $path);
    $path = strtolower($path) . ".php";
    include_once $path;
});