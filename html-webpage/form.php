<?php
    include 'functions.php';

    $fname = '';
    $lname = '';
    $checked = '';
    if(isset($_GET['fname']) && !empty($_GET['fname'])){
        $fname = htmlspecialchars($_GET['fname']);
    }
    if(isset($_GET['lname']) && !empty($_GET['lname'])){
        $lname = htmlspecialchars($_GET['lname']);
    }
    if(isset($_GET['cb1']) && !empty($_GET['cb1']) && $_GET['cb1'] == 1){
        $checked = ' checked ';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="">
                    <label for="fname">First name</label>
                    <input type="text" name="fname" value="<?php echo $fname; ?>">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" value="<?php echo $lname; ?>">

                    <label for="cb1">Remember me</label>
                    <input type="checkbox" name="cb1" value="1" <?php echo $checked; ?> >

                    <label for="fruits">Select Fruits</label>
                    
                    <label for="fruits">Mango</label>
                    <input type="checkbox" name="fruits[]" value="mango"  <?php isGroupChecked('fruits','mango'); ?> >
                    <label for="fruits">Orange</label>
                    <input type="checkbox" name="fruits[]" value="orange" <?php isGroupChecked('fruits','orange'); ?>>
                    <label for="fruits">Lemon</label>
                    <input type="checkbox" name="fruits[]" value="lemon" <?php isGroupChecked('fruits','lemon'); ?>>
                    <label for="fruits">Pine-Apple</label>
                    <input type="checkbox" name="fruits[]" value="pineapple" <?php isGroupChecked('fruits','pineapple'); ?>>

                    <input type="submit" value="send">
                </form>
            </div>
        </div>
    </div>
</body>
</html>