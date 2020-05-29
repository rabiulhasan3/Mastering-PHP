<?php
function factorial(int $n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

$startingTime = microtime(true);
factorial(1000);
$endingTime = microtime(true);
$executionTime = $endingTime - $startingTime; 
printf("%10.8f",$executionTime);
