<?php

$albums = include("./partials/db.php");

function renderUl ($itemsList)
{
    ?>

    <ul>

    <?php

    foreach($itemsList as $item) {
        ?>
        <li><?php echo $item ?></li>
        <?php
    }

    ?>

    </ul>

    <?php
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ajax dischi</title>
</head>
<body>

    <ul>
        <?php 
        foreach($albums as $album) {
            ?>
            <li><?php renderUl($album) ?></li>
            <?php
        }
        ?>
    </ul>

    
    
</body>
</html>