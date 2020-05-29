<?php
class MathCalculator {
    private $number;
    static $name;

    static function factorial($n){
        echo "Factorial upto {$n} \n";
        self::$name = "Hasan";
        self::doSomething();
    }

    static function doSomething(){
        echo "Hello World ! \n";
    }

    public function callPublicFunction(){
        $this->factorial(8);
        echo self::$name;
    }



}
 // MathCalculator::factorial(8);
$math = new MathCalculator();
$math->callPublicFunction();