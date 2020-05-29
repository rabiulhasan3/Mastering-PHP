<?php
    $fileName = "C:\\xampp\\htdocs\\Mastering PHP\\file\\files\\f2.txt";
    // $fp = fopen($fileName,'r+');
    // $line = fgets($fp);
    // echo $line;
    // fwrite($fp,"Kawsar");
    // $line = fgets($fp);
    // echo $line;

    // $fp = fopen($fileName,"w+");
    // fwrite($fp,"Hello");
    // rewind($fp);
    // $line = fgets($fp);
    // echo $line;

    $fp = fopen($fileName,"a+");
    fwrite($fp,"\nworld");
    rewind($fp);
    $lines = fgets($fp);
    echo $lines;