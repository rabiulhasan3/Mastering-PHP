<?php
class Shape {
    protected $name;
    protected $area;
    public function __construct($name) {
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea() {
        printf("This %s area's is %s \n", $this->name, $this->area);
    }
}

class Triangle extends Shape {
    private $a, $b, $c;
    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }

    protected function calculateArea() {
        $parimeter  = ($this->a + $this->b + $this->c);
        $area       = sqrt($parimeter * ($parimeter - $this->a) * ($parimeter - $this->b) * ($parimeter - $this->c));
        $this->area = $area;
    }
}

class Rectangle extends Shape{
    private $a, $b;
    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
        parent::__construct("Rectangle");
    }
    protected function calculateArea(){
        $area = ($this->a * $this->b);
        $this->area = $area;
    }
}

$t1 = new Triangle(1,2,3);
$t1->getArea();

$r1 = new Rectangle(4,2);
$r1->getArea();