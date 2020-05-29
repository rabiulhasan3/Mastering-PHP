<?php
class Animal {
    static $name;
    static function sayHi() {
        self::$name = "Hasan";
        echo "Hi ! \n";
    }
}

class Cat extends Animal {
    static function sayHi() {
        echo "Hello \n";
        parent::sayHi();
        echo parent::$name;
    }
}

Cat::sayHi();