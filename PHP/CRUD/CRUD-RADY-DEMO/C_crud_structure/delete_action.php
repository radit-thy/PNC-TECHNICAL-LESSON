<?php
// TODO
require_once 'database.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
    // echo $id;
    $statement = $infor->prepare("DELETE FROM c_users WHERE id=:id" );
    $statement->execute(([":id"=> $id]));

    header("Location: index.php");

}