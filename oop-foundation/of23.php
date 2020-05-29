<?php
// early binding vs late binding
class Planet {
    static function echoName() {
        echo static::getName();
    }

    static function getName() {
        return "Mars\n";
    }
}

class Earth extends Planet {
    static function getName() {
        return "Earth\n";
    }
}

Planet::echoName(); // Mars
Earth::echoName(); // Earth
