<?php
    $fileName = "C:\\xampp\\htdocs\\Mastering PHP\\file\\files\\f4.txt";
    file_put_contents($fileName,"\nKawsar", FILE_APPEND | LOCK_EX);

    