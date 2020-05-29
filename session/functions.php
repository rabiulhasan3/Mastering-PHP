<?php
function isLoggedIn(){
    return ( $_SESSION['logged_in'] == true);
}