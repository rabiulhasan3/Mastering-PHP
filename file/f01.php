<?php
    $fileName = "C:\\xampp\\htdocs\\Mastering PHP\\file\\files\\f1.txt";
    if(is_readable($fileName)){
        $fp = fopen($fileName,"r");
        // while( $line = fgets($fp) ){
        //     echo $line;
        // }
        // echo "hr";
        // fseek($fp,13);
        // while( $line = fgets($fp) ){
        //     echo $line;
        // }

        $fileData = file($fileName);
        $data = file_get_contents($fileName);
        echo $data;
    }
    