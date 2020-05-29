<?php
// function ascii($n){
//     if(chr($n) >= 'A' && chr($n) <= 'Z'){
//         printf("The ascii code is %d and character is %s \n",$n,chr($n));
//     }
// }
// $asciiValue =  array_filter(range(1,128,1),'ascii',0);

// $string = "Hello World";

// echo substr($string,4,3); // o W
// echo  "\n";
// echo substr($string,-7,3);
// echo "\n";
// echo substr($string,-7,-4);

// $string = "Hello World";
// // output olleH dlroW
// $stringArray = explode(" ", $string);
// $wordCount   = count($stringArray);

// $currentRevWord = '';
// for ($i = 0; $i < $wordCount; $i++) {
//     if ($currentRevWord == '') {
//         $currentRevWord = strrev($stringArray[$i]);
//     } else {
//         $currentRevWord .= ' ' . strrev($stringArray[$i]);
//     }

// }
// echo $currentRevWord;

// $string = "Hello World,How are-you";

// $strtok = strtok($string," ,-");
// while($strtok !== false){
//     echo $strtok ."\n";
//     $strtok = strtok(" ,-");
// }


// $stringExplodeMultipleDelimeter = preg_split("/ |,|-/",$string);
// print_r($stringExplodeMultipleDelimeter);


// $string = "quick brown fox jump over the lazy fox dog";
// $search_string = [
//     "fox",
//     "brown"
// ];

// $replace_string = [
//     "cat",
//     "red"
// ];

// $changeString =  str_ireplace($search_string,$replace_string,$string,$count);

// echo $changeString;
// echo "\n";
// echo $count;

// $string = "  Hello \n,";
// echo rtrim($string);
// echo "data";

// $string = "Lorem, ipsum doloruuuuuuuuuuuuuudddddddddddddddd sit amet consectetur adipisicing elit. Non, saepe labore eum quia deserunt doloremque facilis fugiat nulla debitis ipsa ullam laborum assumenda dolorum, expedita, sequi commodi voluptatem veniam sit!";
// $wordWrap =wordwrap($string,20, "\n",true);
// echo nl2br($wordWrap);

$string = "Rabiul Hasan 01923232332 xhasan.me@gmail.com";
sscanf($string,"%s %s %11d %s",$fname,$lname,$phone,$email);
echo $email;



