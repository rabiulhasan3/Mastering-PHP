<?php
class Human {
    public $name;
    public $contactNumber;
    function sayHi() {
        printf("Salam \n");
        $this->sayName();
    }

    function sayName() {
        printf("My name is %s \n", $this->name);
        $this->sayContactNumber($this->contactNumber);
    }

    function sayContactNumber($number) {
        printf("My contact number is %s \n", $number);
    }
}

class Cat {
    function sayHi() {
        printf("Meow \n");
    }
}

class Dog {
    function sayHi() {
        printf("Geow \n");
    }
}

$h1                = new Human();
$h1->name          = "Rabiul Hasan";
$h1->contactNumber = "01859443458";
$h1->sayHi();
