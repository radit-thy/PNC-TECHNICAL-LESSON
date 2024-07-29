<?php
//TODO:
require_once 'database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $class = $_POST['class'];

    $statement = $connection->prepare("INSERT INTO users (name, age, class) 
    VALUES (:name, :age, :class)");

    $statement->execute([
        ":name" => $name,
        ":age" => $age,
        ":class" => $class
    ]);
    header("Location: index.php");
}