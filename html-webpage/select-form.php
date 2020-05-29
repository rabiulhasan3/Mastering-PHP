<?php
    include 'functions.php';
    $relationArray = [
        "bridegroom",
        "maid",
        "co-wife",
        "niece",
        "nephew",
        "descendent",
        "servant"
    ];

    $selectedRelations = filter_input(INPUT_GET,'relation',FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY) ?? [];
    if(count($selectedRelations) > 0){
        printf("You are selected %s", join(',',$selectedRelations));
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Form</title>
</head>
<body>
    <form action="">
        <select name="relation[]" multiple style="height: 200px;">
            <option value="" disabled selected>Select Relaion</option>
            <?php displayOptions($relationArray,$selectedRelations); ?>
        </select>

        <input type="submit" value="send">
    </form>
</body>
</html>