<?php
    setcookie('username','Rabiul Hasan',time() + 40);
    setrawcookie('name',rawurlencode('Kawsar Uddin'),time()+300);
    $students = [
        "Hasan",
        "Munna",
        "Shuvo",
        "Nasir",
        "Nizam"
    ];
    setcookie('friends',serialize($students),time()+60);
    // echo $_COOKIE['username'];
    // echo $_COOKIE['name'];

    if(isset($_COOKIE['friends'])){
        $friends =  unserialize($_COOKIE['friends']);
        foreach($friends as $friend){
            printf("My name is %s .<br>",$friend);
        }
    }