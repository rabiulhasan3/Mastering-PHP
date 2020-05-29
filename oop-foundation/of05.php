<?php
class RGB {
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($initialColor = 0){
        $this->color = $initialColor;
    }

    private function parseColor($colorCode){
        $colorCode = ltrim($colorCode,"#");
        if($this->color){
            list($this->red,$this->green,$this->blue) = sscanf($colorCode,"%02X%02X%02X");
        }else{
            list($this->red,$this->green,$this->blue) = [0,0,0];
        }
    }

    public function readRGBColor(){
        $this->parseColor($this->color);
        printf("Red = %d\nGreen = %d\nBlue = %d\n",$this->red,$this->green,$this->blue);
    }
}
$color = new RGB('#ffe323');
echo $color->readRGBColor();