<?php
abstract class OurClass{
    final public function sayHi(){
        echo "Hi "."\n";
    }
}

class MyClass extends OurClass{
   
}

$mc = new MyClass();
$mc->sayHi();