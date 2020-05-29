<?php
// object to string convertion
class Color {
    public $color;
    public function __construct($color) {
        $this->color = $color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __toString()
    {
        $objToString = sprintf("The color is %s",$this->color);
        return $objToString; 
    }

    
}
$c = new Color("Red");
$c->setColor("Green");
$c->color = "White";
echo $c;