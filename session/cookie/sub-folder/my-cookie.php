<?php
setcookie('sub_folder_data', 'Hasan', time() + 300);
if (isset($_COOKIE['friends'])) {
    $friends = unserialize($_COOKIE['friends']);
    foreach ($friends as $friend) {
        printf("My name is %s .<br>", $friend);
    }
}

if(isset($_COOKIE['sub_folder_data'])){
    echo $_COOKIE['sub_folder_data'];
}