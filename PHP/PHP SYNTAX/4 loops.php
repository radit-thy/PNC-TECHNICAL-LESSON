<!-- 
In PHP, we have the following loop types:
    while - loops through a block of code as long as the specified condition is true
    for - loops through a block of code a specified number of times
    foreach - loops through a block of code for each element in an array 
-->

<!-- + while + -->
<?php
// The while loop executes a block of code as long as the specified condition is true.

    // Print $i as long as $i is less than 6:
    $i = 1;
    while ($i < 6) {
    echo $i;
    $i++;
    }
?>

<!-- + for + -->
<?php 
// The for loop is used when you know how many times the script should run.

    // for (statement1, statement2, statement3) {
    //      code block
    //   }

    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
?>

<!-- + foreach + -->
<?php 
// The most common use of the foreach loop, is to loop through the items of an array.
    $colors = ["red", "green", "blue", "yellow"];
    // loop access for value 
    foreach ($colors as $color) {
        echo "$color \n";
    }
    foreach ($colors as $index => $value) {
        echo "$value  is in index: $index\n";
    }

    $members =["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
    // loop access for key and value 
    foreach ($members as $x => $y) {
        echo "$x : $y \n";
    }
?>