<?php
// TODO
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD']== 'POST'){
    // var_dump($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $statement = $infor->prepare("UPDATE c_users SET name= :name, email= :email, message= :message WHERE id= :id");

    $statement->execute([
        ':name'=> $name,
        ':email'=> $email,
        ':message'=>$message
    ]);
    
    header('Location: index.php');


}
