<?php
    $fileName = "C:\\xampp\\htdocs\\Mastering-PHP\\session\\data\\users.txt";
    $fp = fopen($fileName,'r');
    while($data = fgetcsv($fp)){
        print_r($data);
    }