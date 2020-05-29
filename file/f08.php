<?php
$fileName = "C:\\xampp\\htdocs\\Mastering PHP\\file\\files\\f8.txt";
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
    [
        "fname"      => "Shuvo",
        "lname"      => "Ahmed",
        "age"        => 22,
        "profession" => "Teacher",
    ],
];

$data = json_encode($students);
file_put_contents($fileName,$data, FILE_APPEND | LOCK_EX);

$readData = file_get_contents($fileName);
$jsonDecode = json_decode($readData,true);
print_r($jsonDecode);
