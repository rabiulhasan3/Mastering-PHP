<?php
// countable interface
class PhpCollection implements Countable {
    private $frameworks;

    public function __construct() {
        $this->frameworks = array();
    }

    public function addFramework($name) {
        array_push($this->frameworks, $name);
    }


    public function count(){
        return count($this->frameworks);
    }
}
$php = new PhpCollection();
$php->addFramework("Laravel");
$php->addFramework("Codignetor");
$php->addFramework("Symphony");
$php->addFramework("WordPress");
$php->addFramework("Zomla");



echo $php->count();