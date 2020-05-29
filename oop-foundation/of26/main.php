<?php
function autoload($name) {
    include "{$name}.php";
}
spl_autoload_register('autoload');

(new Bike)->getName();
(new Spaceship)->lunch();