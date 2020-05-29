<?php
// a practicel example of interface
class PhpCollection implements IteratorAggregate {
    private $frameworks;

    public function __construct() {
        $this->frameworks = array();
    }

    public function addFramework($name) {
        array_push($this->frameworks, $name);
    }

    public function getIterator() {
        return new ArrayIterator($this->frameworks);
    }
}
$php = new PhpCollection();
$php->addFramework("Laravel");
$php->addFramework("Codignetor");
$php->addFramework("Symphony");
$php->addFramework("WordPress");
$php->addFramework("Zomla");

foreach($php as $framework){
    printf("%s\n",$framework);
}
