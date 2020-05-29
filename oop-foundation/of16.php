<?php
class Animal{
    const name='Tom';
    static function sayHi(){
        echo self::name ." says Meow\n";
    }
}
Animal::sayHi();