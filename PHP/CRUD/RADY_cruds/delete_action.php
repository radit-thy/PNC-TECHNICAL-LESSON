<?php
require_once "database.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $statement = $connection->prepare("DELETE FROM users WHERE id = :id");
    $statement->execute([":id"=> $id]);

    header("Location: index.php");
}