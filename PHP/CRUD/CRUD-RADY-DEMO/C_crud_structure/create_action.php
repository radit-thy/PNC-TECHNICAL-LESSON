<?php
//TODO:
require_once('database.php');


// date_default_timezone_set('Asia/Phnom_Penh');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // var_dump($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $statement = $infor->prepare("INSERT INTO c_users (name, email, message) 
    VALUES(:name, :email, :message)");

    $statement->execute([
        ':name'=> $name,
        ':email'=> $email,
        ':message'=>$message
    ]);
    
    header('Location: index.php');

}