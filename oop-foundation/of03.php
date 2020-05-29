<?php
class Human {
    public $name;
    public $age;

    function __construct($personName, $personAge = 0) {
        $this->name = $personName;
        $this->age  = $personAge;
    }

    function sayHi() {
        echo "Salam ! ";
        $this->sayInfo();
        echo "\n";
    }

    function sayInfo() {
        if($this->age){
            printf("My name is %s and i am %d years old", $this->name, $this->age);
        }else{
            printf("My name is %s and i dont know how old i am", $this->name);
        }
        
    }

}
$h1 = new Human("Rabiul Hasan","23");
$h2 = new Human("Nazrul Islam");
echo $h1->sayHi();
echo $h2->sayHi();