<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of fruits</title>
</head>

<body>
    
    <?php
    // Here is a list of fruits
    $fruits = ["mango", "apple", "banana", "coconut"];
    ?>

    <!-- You know how to display a list of items in HTML
    Can you do the same using PHP ? -->

    <ul>

        <?php
        for ($i=0; $i < count($fruits); $i++) :
        ?>

            <li>mango</li> <!-- Change this line to display the fruit at index $i -->

        <?php
        endfor
        ?>

    </ul>

</body>

</html>