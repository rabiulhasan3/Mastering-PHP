<?php
// object comparing
class Planet {
    public $name;
    function __construct($name) {
        $this->name = $name;
    }
}
$e1 = new Planet("Earth");
$e2 = new Planet("Mars");
if($e1 == $e2){
    echo "Similar";
}else{
    echo "Not similar";
}