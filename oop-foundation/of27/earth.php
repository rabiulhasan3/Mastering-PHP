<?php
namespace Astronomy\Planets;
use Astronomy\Planets\Planet;
include 'planet.php';
class Earth extends Planet{
    function getName(){
        echo "Earth \n";
        parent::getName();
    }
}