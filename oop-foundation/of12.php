<?php
interface BaseAnimal {
    function sayName();
    function isAlive();
}

class Animal implements BaseAnimal {
    function sayname() {

    }
    function isAlive() {

    }
}

interface BaseHuman extends BaseAnimal {
    function isTalk();
}

class Human implements BaseHuman {
    function isTalk() {

    }
    function sayName() {

    }
    function isAlive() {

    }
}
$human  = new Human();
$animal = new Animal();
echo $human instanceof BaseAnimal; //true
echo "\n";
echo $human instanceof BaseHuman; // true
echo "\n";
echo $animal instanceof BaseAnimal; // true
echo "\n";
echo $animal instanceof BaseHuman; // false