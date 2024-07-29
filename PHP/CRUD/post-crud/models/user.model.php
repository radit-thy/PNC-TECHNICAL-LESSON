<?php
function createUser($username,$password){
    global $connection;
    $statement = $connection -> prepare("INSERT INTO users(user_name,password VALUES(:username,:password)");
    $statement->execute(
        [
        ':username' => $username,
        ':password' => $password
        ]
    );
}