<?php
// TODO: connect to database
$dsn = "mysql:host=localhost;dbname=crud_user";
$username = "root";
$password = "";

$pdo = new PDO($dsn,$username,$password);

$infor = $pdo->query("SELECT*FROM users;")->fetchAll(); 

