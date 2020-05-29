<?php
$fileName = "C:\\xampp\\htdocs\\Mastering PHP\\file\\files\\f06.txt";
$students = [
    [
        "fname"      => "Rabiul",
        "lname"      => "Hasan",
        "age"        => 23,
        "profession" => "Jr. Web Developer",
    ],
    [
        "fname"      => "Motaleb",
        "lname"      => "Hossain",
        "age"        => 25,
        "profession" => "Shop Keeper",
    ],
];

// noraml way 
// $fp = fopen($fileName,"a");
// foreach($students as $student){
//     $data = sprintf("%s,%s,%d,%s\n",$student['fname'],$student['lname'],$student['age'],$student['profession']);
//     fwrite($fp,$data);
// }
// fclose($fp);

// data show with normal way
// $fp = fopen($fileName,'r');
// while($line = fgets($fp)){
//     $lineArray = explode(",",$line);
//     $data = sprintf("Name = %s %s \nAge = %d\nProfession = %s \n\n",$lineArray[0],$lineArray[1],$lineArray[2],$lineArray[3]);
//     echo $data;
// }

// $fp = fopen($fileName,'w');
// foreach($students as $student){
//     fputcsv($fp,$student);
// }


// $fp = fopen($fileName,'r');
// foreach($students as $student){
//    $line =  fgetcsv($fp);
//    print_r($line);
// }












