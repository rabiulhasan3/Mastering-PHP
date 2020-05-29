<?php
class A{
    static function sayHi(){
        echo "Hi From Parent Class \n";
    }
}
class B extends A{
    static function sayHi(){
        echo "Hi From Child Class \n";
        parent::sayHi();
    }
}
B::sayHi();