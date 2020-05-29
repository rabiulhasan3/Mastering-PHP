<?php
// Magic method get and set
class Student {
    private $name, $age, $class;
    public function __construct($name, $age, $class) {
        $this->name  = $name;
        $this->age   = $age;
        $this->class = $class;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}

$student = new Student("Md Rabiul Hasan",23,"BSC in CSE");
$student->name = "Rabiul Hasan";
echo $student->name;