<?php
class Shape{

}
class Shapes {
    private $shapes;

    public function __construct() {
        $this->shapes = [];
    }

    public function addShape(Shape $shape) {
        array_push($this->shapes, $shape);
    }

    public function totalShape() {
        printf("Total %d shapes \n", count($this->shapes));
    }
}

class Triangle extends Shape{

}
class Rectangle extends Shape{

}
class Student{

}

$shapeCollection = new Shapes();
$shapeCollection->addShape(new Triangle());
$shapeCollection->addShape(new Rectangle());
// $shapeCollection->addShape(new Student());

$shapeCollection->totalShape();

