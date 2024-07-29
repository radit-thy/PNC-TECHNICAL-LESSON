<!-- 
PHP Conditional Statements
Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
 -->

<!-- if statement  -->
 <?php
//  The if statement is used to execute a block of code if a specified condition is true.

    $condition = true;
    if ($condition) {
        // Code to be executed if the condition is true
        echo "Condition is true";
    }
?>

<!-- else statement  -->

<?php
// The else statement is used in conjunction with an if statement to execute a block of code when the if condition is false.

    $condition = false;
    if ($condition) {
        echo "Condition is true";
    } else {
        echo "Condition is false";
    }
?>

<!-- elseif statement  -->

<?php
// The elseif statement allows you to check multiple conditions in a sequence.

    $grade = 75;
    if ($grade >= 90) {
        echo "Excellent";
    } elseif ($grade >= 70) {
        echo "Good";
    } else {
        echo "Needs improvement";
    }
?>


<!-- Extra  Ternary Operator (? :) -->
<?php
// The ternary operator is a shorthand way of writing a simple if-else statement in a single line.

    $age = 20;
    $allowed = ($age >= 18) ? "Allowed" : "Not allowed";
    echo $allowed;
?>


<!-- This is a concise way of writing the equivalent if-else statement: -->
<!-- ------------------ -->
<?php
    $age = 20;
    $allowed = ($age >= 18) ? "Allowed" : "Not allowed";
    echo $allowed;
?>

<!-- Or  -->

<?php
    $age = 20;
    if ($age >= 18) {
        echo "Allowed";
    } else {
        echo "Not allowed";
    }
?>
<!-- ------------------ -->