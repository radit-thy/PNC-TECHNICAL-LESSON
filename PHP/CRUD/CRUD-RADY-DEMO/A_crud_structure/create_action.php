<?php
//TODO:
require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
    $name = $_POST['name'];
    $age = $_POST['age'];
    $class = $_POST['class'];

    $statement = $pdo->prepare("INSERT INTO USERS (name,age,class");
}
