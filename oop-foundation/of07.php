<?php
class ParentClass{
    public $name;
    public function __construct($name = ''){
        $this->name = $name;
    }

    public function sayHi(){
        printf("Hi ! %s \n",$this->name);
    }
}

class ChildClass extends ParentClass{
    public function sayHi(){
        parent::sayHi();
        printf("Hi  ! child \n");
    }
}

$cc  = new ChildClass("Hasan");
$cc->sayHi();