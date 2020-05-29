<?php
$fileName = "C:\\xampp\\htdocs\\Mastering PHP\\file\\files\\f07.txt";
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

$searializedData = serialize($students);
file_put_contents($fileName,$searializedData);

// $fileData = file_get_contents($fileName);
// $unserializedData = unserialize($fileData);
// print_r($unserializedData);

// unset($unserializedData[1]);

// // print_r($unserializedData);

// $searializedData = serialize($unserializedData);
// file_put_contents($fileName,$searializedData);

// $f = file_get_contents($fileName);
// $unserializedData = unserialize($f);
// print_r($unserializedData);


