<?php
    session_start([
        "cookie_lifetime" => 300, // 5 minute
    ]);
    $error = '';
    $_SESSION['logged_in'] = false;
    if (isset($_POST['login'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $fileName = "C:\\xampp\\htdocs\\Mastering-PHP\\session\\data\\users.txt";
        $fp = fopen($fileName,'r');

        if (!empty($username) && !empty($password)) {
            while($data = fgetcsv($fp)){
                if($data[0] == $username && $data[1] == $password){
                    $_SESSION['logged_in'] = true;
                    $_SESSION['username'] = $data[0];
                    $error = false;
                    header("location:index.php");
                }
            }

            if(!$_SESSION['logged_in']){
                $_SESSION['logged_in'] = false;
                $error = true;
            }
        }
    }

    // logout section
    if(isset($_GET['logout'])){
        $_SESSION['logged_in'] = false;
        $error = '';
        session_destroy();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link rel="stylesheet" href="assets/css/milligram.css">
    <style>
        body{
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <h2>Authenction</h2>
                <p>Hello Stanger ! Login Below</p>
                <form action="" method="POST">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <input type="submit" value="login" name="login" class="button button-small button-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>