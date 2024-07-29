<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'post_crud';
$dsn = "mysql:host = $hostname;dbname=$db;charset=utf8mb4";
$connection = new PDO($dsn, $user, $pass);
