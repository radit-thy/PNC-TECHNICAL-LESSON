<?php
require_once 'database.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
    
    $statement = $modals_db->prepare("DELETE FROM students WHERE id=:id");
    $statement->execute([":id" => $id]);

    header("Location: index.php");

}

