<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic class name</title>

    <!-- We add some style to the classes right and wrong -->
    <style>
        .right {
            color:green;
        }
        .wrong {
            color:red;
        }
    </style>
</head>

<body>
    
    <?php
    $status = "wrong";
    ?>

    <!-- Instructions: Change the next line to set the class of the div to the value of $status -->
    <div class=<?php echo 'right' ?>>
    Phnom Penh is the capital of France
    </div>

</body>

</html>