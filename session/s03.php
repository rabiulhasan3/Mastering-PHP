<?php
    session_start([
        "cookie_lifetime" => 300, // 5 minute
    ]);
    $error = '';
    $_SESSION['logged_in'] = false;
    if (isset($_POST['login'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if (!empty($username) && !empty($password)) {
            if ($username == 'admin' && $password == 'venture') {
                $_SESSION['username'] = 'admin';
                $_SESSION['logged_in'] = true;
                $error = 0;
            } else {
                $_SESSION['logged_in'] = false;
                $error = 1;
            }
        }
    }

    // logout section
    if(isset($_POST['logout'])){
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

                

                <?php if ($_SESSION['logged_in'] == true): ?>
                    <?php if (0 == $error): ?>
                        <blockquote><p><?php printf("Autentication success ! welcome %s", $_SESSION['username'])?></p></blockquote>
                    <?php endif;?>

                    <form action="" method="POST">
                        <input type="submit" value="logout" name="logout" class="button button-small button-red">
                    </form>
                <?php else: ?>
                <?php if (1 === $error): ?>
                    <blockquote><p>Invalid Credential</p></blockquote>
                <?php elseif (0 === $error): ?>
                    <blockquote><p><?php printf("Autentication success ! welcome %s", $_SESSION['username'])?></p></blockquote>
                <?php endif;?>

                <form action="" method="POST">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <input type="submit" value="login" name="login" class="button button-small button-primary">
                </form>

                <?php endif;?>
            </div>
        </div>
    </div>
</body>
</html>