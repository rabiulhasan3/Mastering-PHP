<?php require_once 'inc/functions.php';?>
<?php
    $task            = $_GET['task'] ?? 'report';
    $sedding_message = $_GET['sedding_message'] ?? '';
    $update_message  = $_GET['update_message'] ?? '';
    $delete_message  = $_GET['delete_message'] ?? '';
    $seddingResult   = '';
    if ('1' == $sedding_message) {
        $seddingResult = "Data Seeding Successfully";
    } else if ('0' == $sedding_message) {
        $seddingResult = "Data Seeding Failed";
    }

    if ("seed" == $task) {
        $dataSedding = seed(DB);
        if ($dataSedding) {
            header("location:index.php?task=report&sedding_message=1");
        } else {
            header("location:index.php?task=report&sedding_message=0");
        }
    }

    // data store  start
    $name       = '';
    $profession = '';
    $age        = '';
    $error      = '';

    $saving_message = $_GET['saving_message'] ?? '';
    if ('1' == $saving_message) {
        $savingResult = "Data Saved Successfully";
    } else if ('0' == $saving_message) {
        $savingResult = "Age are duplicate";
    }

    if (isset($_POST['submit']) && !empty($_POST['submit'])) {
        $name       = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $profession = filter_input(INPUT_POST, 'profession', FILTER_SANITIZE_STRING);
        $age        = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

        if ($name != '' && $profession != '' && $age != '') {
            $add = addFriend(DB, $name, $profession, $age);
            if ($add) {
                header("location:index.php?task=report&saving_message=1");
            } else {
                $error = 1;
            }
        }
    }
    // data store  end

    // data update start
    if (isset($_POST['update']) && !empty($_POST['update']) && ("edit" == $task)) {
        $id         = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $name       = filter_input(INPUT_POST, 'ename', FILTER_SANITIZE_STRING);
        $profession = filter_input(INPUT_POST, 'eprofession', FILTER_SANITIZE_STRING);
        $age        = filter_input(INPUT_POST, 'eage', FILTER_SANITIZE_NUMBER_INT);

        if ($id != '' && $name != '' && $profession != '' && $age != '') {
            $updateFriend = updateFriend(DB, $id, $name, $profession, $age);
            if ($updateFriend) {
                header("location:index.php?task=report&update_message=1");
            } else {
                $error = 1;
            }
        }
    }
    // data update end

    // data delete

    if ("delete" == $task) {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        if ($id != '') {
            $delete = deleteFriend(DB, $id);
            if ($delete) {
                header("location:index.php?task=report&delete_message=1");
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
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
                <h2 style="text-align:center;">Project-2 CRUD</h2>
                <p  style="text-align:center;">A simple project to perform crud operation using plain files and PHP</p>
                <hr>

                <?php include_once 'inc/templates/nav.php';?>
<?php
    if ($seddingResult != '') {
        echo " <blockquote><p>{$seddingResult}</p></blockquote>";
    } else if ($saving_message != '') {
        echo " <blockquote><p>{$savingResult}</p></blockquote>";
    } else if ($update_message == 1) {
        echo " <blockquote><p>Friend Information Update Successfully.</p></blockquote>";
    } else if ($delete_message == 1) {
        echo " <blockquote><p>Data Deleted Successfully.</p></blockquote>";
    }
?>
<?php if ("report" == $task): ?>
                <table class="table table-bordered table-striped"
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Profession</th>
                            <th>Age</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php generateReport(DB);?>
                    </tbody>
                </table>
                <?php endif;?>

                <?php if ("add" == $task): ?>
<?php if ($error == 1): ?>
                        <blockquote><p>Duplicate Age</p></blockquote>
                    <?php endif;?>
                    <form action="index.php?task=add" method="POST">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
                        <label for="profession">Profession</label>
                        <input type="text" name="profession" id="profession" value="<?php echo $profession; ?>">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" value="<?php echo $age; ?>">
                        <button class="button button-primary" type="submit" name="submit" value="save">Save</button>
                    </form>
                <?php endif;?>

                <?php if ("edit" == $task): ?>
<?php if ($error == 1): ?>
                        <blockquote><p>Duplicate Age</p></blockquote>
                    <?php endif;?>
<?php
    $id     = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $friend = getFriendsInfo(DB, $id);
    if ($friend):
?>
                            <form action="index.php?task=edit&id=<?php echo $id; ?>" method="POST">
                                <input type="hidden" name="id" value="<?php echo $friend['id']; ?>">
                                <label for="name">Name</label>
                                <input type="text" name="ename" id="name" value="<?php echo $friend['name']; ?>">
                                <label for="profession">Profession</label>
                                <input type="text" name="eprofession" id="profession" value="<?php echo $friend['profession']; ?>">
                                <label for="age">Age</label>
                                <input type="number" name="eage" id="age" value="<?php echo $friend['age']; ?>">
                                <button class="button button-primary" type="submit" name="update" value="update">Update</button>
                            </form>
                        <?php endif;?>
<?php endif;?>
            </div>
        </div>
    </div>
</body>
</html>