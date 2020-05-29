<?php
abstract class PrivateUniversity {
    abstract function tutionFee($a, $b);
}
class MyUniversity extends PrivateUniversity {
    private $courseName, $tutionFee;

    function tutionFee($courseName, $tutionFee) {
        $this->courseName = $courseName;
        $this->tutionFee  = $tutionFee;
    }

    public function info(){
        printf("%s Department Total Tution fee is %d TK\n",$this->courseName,$this->tutionFee);
    }
}

$mu = new MyUniversity();
$mu->tutionFee("CSE",198000);
$mu->info();
